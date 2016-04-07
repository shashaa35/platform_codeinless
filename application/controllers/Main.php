<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __Construct() {
		parent::__Construct();
		$this->load->model('ide_model');
		$this->load->model('users_model');
		$this->load->helper( 'url');
		$this->load->library('session');
	}
	public function home()
	{
		$this->load->view('home.php');
	}
	public function index()
	{
		$username=$this->session->userdata('username');
		if(empty($username))
		{
			
			$data['message']="please login to view";
			$this->load->view('home.php',$data);
			return;
		}

		$this->load->view('index.php');
	}
	public function register()
	{
		$this->load->view('register.php');
	}
	public function signup()
	{
		
		$username=$this->input->get("username");
		$password=$this->input->get("password");
		$status=$this->users_model->signup($username,$password);
		if($status)
			$this->load->view('welcome.php');
		else
			echo "error";
	}
	public function login()
	{
		$username=$this->session->userdata('username');
		if(!empty($username))
		{//back button
			$this->load->view('welcome.php');
		}
		else
		{
		$username=$this->input->get("username");
		$password=$this->input->get("password");
		$exist=$this->users_model->login($username,$password);
		if($exist)
		{
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('password',$password);
			$this->load->view('welcome.php');
		}
		else
			echo "<h2>Sign Up First</h2>";
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->load->view('home.php');
	}
	public function questions()
	{
		$username=$this->session->userdata('username');
		if(empty($username))
		{
			$data['message']="please login to view";
			$this->load->view('home.php',$data);
			return;
		}
		$this->load->view("questions.php");
	}
	public function question($i)
	{
		// echo $i;
		$username=$this->session->userdata('username');
		if(empty($username))
		{
			$data['message']="please login to view";
			$this->load->view('home.php',$data);
			return;
		}

		$data=$this->ide_model->get_details($i);
		$this->load->view("question_template.php",$data[0]);
	}

	public function leaderboard()
	{
		$data['leader']=$this->users_model->get_scores();
		$n=sizeof($data);
		if($n>0)
		{
			$this->load->view("leaderboard.php",$data);
		}
		else
			echo "error ocurred";
	}

	public function run(){
		$username=$this->session->userdata('username');
		if(empty($username))
		{
			$message="please login to view";
			$this->load->view('home.php',$message);
			return;
		}

		$code=$this->input->post("code");
		$lang=$this->input->post("lang");
		$q_no=$this->input->post("q_no");
		$res=$this->ide_model->get_details($q_no);
		$inp_filename=$res[0]['input_file'];
		$input_file="C:/xampp/htdocs/ide/input_files/$inp_filename";
		$input=file_get_contents($input_file);


		$client_secret="876dc85d4ac4eb6100181b7a4ef2bf76128915f0";
		$config = Array();
		$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
		$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
		$config['source']=$code;    	//(REQUIRED) Your properly formatted source code for which you want to use hackerEarth api
		$config['input']=$input;     	//(OPTIONAL) Properly Formatted Input against which you have to test your source code, leave this empty if you are using file
		$config['language']=$lang;   //(REQUIRED) 

	$curl = curl_init();
	curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/run/',
    CURLOPT_POST => 1,
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS => array(
      				  	'client_secret' => $client_secret,
                        'time_limit' => $config['time'],
        				'memory_limit' => $config['memory'],
        				'source' => $config['source'],
        				'input' => $config['input'],
                        'lang' => $config['language'])
	));
	// Send the request & returning response 
	$data=json_decode(curl_exec($curl), true);
	$compile_status=$data['compile_status'];
	if($compile_status==="OK")
	{
		//correct output file
		$data['message']="COMPILATION PASSED<br>";
		$out_filename=$res[0]['output_file'];
		$output_file="C:/xampp/htdocs/ide/output_files/$out_filename";
		$str=file_get_contents($output_file);
		$str=explode("\n",$str);
		
		//user's output
		$str1=$data['run_status']['output'];
		$res=explode("\n",$str1);
		$flag=1;
		//echo sizeof($res)." ";
		if(sizeof($res)==1)
			$flag=0;
		if(sizeof($res)==sizeof($str))
		{
		for($i=0;$i<sizeof($res)-1;$i++)
		{
				
			if(strcmp(trim($res[$i]),trim($str[$i]))!=0)
			{
			
				$flag=0;
				//var_dump($str[$i]);
				//var_dump($res[$i]);
				 // echo $str[$i]." ".$res[$i]."<br>";
			}
			// else $str[$i]." ".$res[$i]."<br>";	
		}
	}
	else
		{$flag=0;
			}
		if ($flag==1) 
		{
			$data['message'].="CORRECT ANSWER!!";
			$length=strlen($code);
			$username=$this->session->userdata('username');
			$password=$this->session->userdata('password');
			if($lang=='C') $lang="CPP";
			$this->users_model->update_pts($username,$password,$q_no."_".$lang,$length);
		}
		else
			$data['message'].="WA";
		$i=0;
	}
	else if($compile_status==NULL)
	{
		$data['message']="Please refresh this page again ..<br>Net is not working ..";
	}
	else
	{	
		$data['message']="compilation not passed";
	}
	$this->load->view("status.php",$data);	
	}

}
