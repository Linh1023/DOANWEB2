<?php
class DAOPhanQuyen{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'ql_cuahanggiay';

    private $conn;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        if(!$this->conn){
            $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->database);
        }
    }

    public function disConnect() {
        if($this->conn){
            mysqli_close($this->conn);
        }
    }


    public function checkQuyen($MaQuyen,$MaChiTiet) {
        $sql = "SELECT * FROM phanquyen WHERE MaQuyen = '".$MaQuyen."' AND MaChiTiet = '".$MaChiTiet."'";
        if($result = mysqli_query($this->conn,$sql)){
            if($result->num_rows != 0){
                return true;
            }
        }
        return false;
    }


    public function getListCTQ(){
        $sql = "SELECT * FROM chitietquyen";
        $data=null;
        if($result = mysqli_query($this->conn,$sql)){
            while($row=mysqli_fetch_array($result)){
                    $data[] = $row;
            }
            mysqli_free_result($result);
        }
        return $data;
    }


}
?>