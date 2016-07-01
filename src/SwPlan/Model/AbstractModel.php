<?php

namespace SwPlan\Model;

abstract class AbstractModel
{
    protected $db;
    protected $table;
    
    public function __construct()
    {
        $this->db = new \PDO('connectionString'
        array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
        );
    }
     
     //get All
     public function getAll()
     {
         $result =  $this->db->query("select * from " . $this->table);
         return $result->fetchAll();
     }
     
     //save
        //insert
        //update
        
    //getById($id)
    
    //delete($id)
}