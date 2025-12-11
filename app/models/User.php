<?php

require_once __DIR__ . "/../core/Model.php";

class User extends Model
{
    public function testConnection()
    {
        $sql = "SELECT NOW() as server_time";
        $result = $this->db->query($sql);

        return $result->fetch_assoc();
    }
}
