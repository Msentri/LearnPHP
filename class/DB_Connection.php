<?php

/**
 * Created by PhpStorm.
 * User: msentri
 * Date: 2016/03/22
 * Time: 7:44 AM
 */
class DB_Connection
{
    public $_DB_SERVER;
    public $_DB_USERNAME;
    public $_DB_PASSWORD;
    public $_DB_NAME;

    public function __construct()
    {
        $this->_DB_SERVER  = DB_NAME2;
        $this->_DB_NAME = DB_NAME2;
        $this->_DB_PASSWORD = DB_PASSWORD;
        $this->_DB_USERNAME = DB_USERNAME;
    }

    private function db_connections(){
        return mysqli_connect("localhost","root","root","learn_php");
    }

    public function insert($table,$columns,$values){

        $sql = "INSERT INTO ".$table." ( ".$columns." ) VALUES ( ".$values." )";
        $results = mysqli_query($this->db_connections(),$sql);
        return $results;
    }

    public function update($set,$condition){
        $sql = "UPDATE users SET $set WHERE $condition";
        $results = mysqli_query($this->db_connections(),$sql);
        return $results;
    }

    public function delete($condition){

        $sql = "DELETE FROM users WHERE $condition";
        return mysqli_query($this->db_connections(),$sql);
    }
}