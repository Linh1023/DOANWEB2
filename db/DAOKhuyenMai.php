<?php
class DAOKhuyenMai{
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

    public function getList(){
        $sql = "SELECT MaKhuyenMai,TenKhuyenMai,MoTa FROM khuyenmai";
        $data=null;
        if($result = mysqli_query($this->conn,$sql)){
            while($row=mysqli_fetch_array($result)){
                if($row[0] != '#'){
                    $data[] = $row;
                }
            }
            mysqli_free_result($result);
        }
        return $data;
    }
}
?>