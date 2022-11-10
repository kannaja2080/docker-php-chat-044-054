<?php
   
    Class User {
        public function __construct()
        {
            $conn = mysqli_connect("mysql_db","root","root","Chat_db");
            $this->dbcon = $conn;

        }
        public function find_all(){
            $sql = " SELECT * FROM `tb_user`";
            $result = mysqli_query($this->dbcon,$sql);
            return $result;
        }
        public function find_by_id($id){
            $user_list = array();
            $sql = " SELECT * FROM `tb_user` WHERE id = '$id'";
            $result = mysqli_query($this->dbcon,$sql);
            while ($row = mysqli_fetch_array($result)) {
                array_push($user_list,array(
                    'id'=>$row['id'],
                    'username'=>$row['username'],
                    'password'=>$row['password'],
                    'firstname'=>$row['firstname'],
                    'lastname'=>$row['lastname']
                ));
            }
            return $user_list;
        }
    }
    
?>