<?php 

class BaseModel extends Database {
    private $connect;

    public function __construct()
    {
        $this->connect = $this->connect();

    }

    public function all($table) {
        $sql = "SELECT * FROM {$table}";
        $result = mysqli_query($this->connect, $sql);

        $data = [];
        
        while($row = mysqli_fetch_assoc($result)){
            array_push($data, $row);
        }
        return $data;
    }
}