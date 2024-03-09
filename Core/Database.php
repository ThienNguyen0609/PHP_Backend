<?php
class Database {
    private $db_server = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "g_sneaker_db";
    private $db_port = 3308;

    public function connect() {
        try {
            $connect = mysqli_connect($this->db_server, $this->db_user, $this->db_pass, $this->db_name, $this->db_port);
            mysqli_set_charset($connect, "utf8");
        }
        catch(mysqli_sql_exception) {
            return false;
        }
        return $connect;
    }
}
?>