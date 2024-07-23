<?php
    include("db.php");
    class Action extends Db{
        private $con;
        public function cn(){
            $this-> con = new mysqli(
                $this->servername,
                $this->username,
                $this->pass,
                $this->db_name,
            );
            $this->con->set_charset('utf8');
        }
        public function __construct(){
            $this->cn();
        }
        public function countData($tbl,$condition){
            $sql = "select count(*) from $tbl where $condition";
            $res = $this->con->query($sql);
            $row = $res->fetch_array();
            return $row[0];
        }
        public function selectData($field, $tbl, $condition,$od, $limit){
            $data = array();
            $sql = "select $field from $tbl where $condition ORDER BY $od LIMIT $limit";
            $res = $this -> con->query($sql);
            if($res->num_rows > 0){
                while($row = $res->fetch_array()){
                    $data[]= $row;
                }
                return $data;
            }

        }
    }
?>