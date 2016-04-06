<?php

class users_model extends CI_Model {

    /**
     * @desc load both db
     */
        function __construct() {
        parent::__Construct();

        $this->db = $this->load->database('default', TRUE, TRUE);
        
    }
    //global variables
    function login($username,$password) {
        $query=$this->db->get_where('users',array('username'=>$username,'password'=>$password));
        $result=$query->result_array();
        $status=sizeof($result);
        if($status>0)
            return true;
        else
            return false;
    }
    function signup($username,$password)
    {
        $data=array('username'=>$username,'password'=>$password);
        $query=$this->db->insert('users',$data);
        
        $data2=array('username'=>$username,'password'=>$password,
            '1_cpp'=>100000,'1_java'=>100000,'1_python'=>100000,
            '2_cpp'=>100000,'2_java'=>100000,'2_python'=>100000,
            '3_cpp'=>100000,'3_java'=>100000,'3_python'=>100000,
            '4_cpp'=>100000,'4_java'=>100000,'4_python'=>100000,
            '5_cpp'=>100000,'5_java'=>100000,'5_python'=>100000);
        
        $query=$this->db->insert('length_table',$data2);
         //$result=$query->result_array();
        //     $status=sizeof($result);
        if($query>0)
            {
                return true;
            }
        else
            return false;
    }
    function updatemax($q_no,$length,$user,$pass)
    {
        $sql="SELECT $q_no FROM length_table where username='boss' and password='boss'";
        $query =$this->db->query($sql);
        $result1=$query->result_array();
        $best=$result1[0][$q_no];
        if($length<$best)
        {
            echo "$user are best till now in this question..";
            $sql1="UPDATE length_table SET $q_no=$length WHERE username='boss' and password='boss'";
            $query1 =$this->db->query($sql1);
            $sql2="UPDATE users,length_table SET 
            users.$q_no=if(100-(length_table.$q_no-$length)<0,0,100-(length_table.$q_no-$length)) 
            where users.username=length_table.username and users.password=length_table.password";
            $query1 =$this->db->query($sql2);
        }
        return $best;
        // if(sizeof($result1)<=0 || sizeof($query1)<=0)
        //     echo "<h2> ERROR OCURRED</h2>";
    }
     function update_pts($user,$password,$q_no,$length)
     {
        $best = $this->updatemax($q_no,$length,$user,$password);
        $sql1 = "SELECT $q_no FROM length_table WHERE username='$user' and password='$password'";   
        $q = $this->db->query($sql1);
        $result = $q->result_array();
        $prev = $result[0][$q_no];
        if($length<$prev)
          {
            $sql2="UPDATE length_table SET $q_no=$length WHERE username='$user' and password='$password'";
            $query1 =$this->db->query($sql2);
            //check error has to done
            echo $q_no." ->";
            $score=100-(intVal($length)-intVal($best));
            echo $score;
            if($score<20)
                $score=20;
    $sql3="UPDATE users SET $q_no=$score WHERE username='$user' and password='$password'";
            $query2 =$this->db->query($sql3);
            
            //update points
          }
           

    }
    function get_scores()
    {
        $sql="SELECT * FROM leaderboard";
        $query=$this->db->query($sql);
        $result=$query->result_array();
        return $result;
    }
}