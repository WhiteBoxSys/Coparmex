<?php
class database
{
    public $que;
    private $servername = 'srv485.hstgr.io';
    private $username = 'u335407339_coparmex';
    private $password = 'c2iTVDvH7>';
    private $dbname = 'u335407339_coparmex';
    private $result = array();
    private $result = array();
    private $mysqli = '';

    public function __construct()
    {
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
    public function insert($table, $para = array())
    {
        $table_columns = implode(',', array_keys($para));
        $table_value = implode("','", $para);

        $sql = "INSERT INTO $table($table_columns) VALUES('$table_value')";

        $result = $this->mysqli->query($sql);
    }
    public function update($table, $para = array(), $id)
    {
        $args = array();

        foreach ($para as $key => $value) {
            $args[] = "$key = '$value'";
        }

        $sql = "UPDATE $table SET " . implode(',', $args);

        $sql .= " WHERE $id";

        $result = $this->mysqli->query($sql);
    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table";
        $sql .= " WHERE $id ";
        $sql;
        $result = $this->mysqli->query($sql);
    }
    public $sql;
    public function select($table, $rows = "*", $where = null)
    {
        if ($where != null) {
            $sql = "SELECT $rows FROM $table WHERE $where";
        } else {
            $sql = "SELECT $rows FROM $table";
        }
        $this->sql = $result = $this->mysqli->query($sql);
    }
    public function getUser($correo, $contra)
    {
        $sql = "SELECT * FROM admin WHERE email= '$correo' AND contra='$contra'";
        $this->sql = $result = $this->mysqli->query($sql);
        $numRows = $result->num_rows;
        if ($numRows == 1) {
            return true;
        }

        return false;
    }
    public function __destruct()
    {
        $this->mysqli->close();
    }
}
