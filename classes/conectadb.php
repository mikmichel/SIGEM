<?php
/**
*
*/
class ConectaDb
{
  private $db_HOST = "localhost";
  private $db_PORT = "5432";
  private $db_USER = "postgres";
  private $db_PASS = "admin";
  private $db = "postgres";
  private $con = null;

  public function __construct(){
  }

  public function conecta(){
      $connect_string = ("host=".$this->db_HOST." port=".$this->db_PORT." user=".$this->db_USER." password=".$this->db_PASS." dbname=".$this->db) or die ("NÃO CONECTADO") ;
      $this->con = pg_connect($connect_string);
      return $this->con;
  }

  public function fechaConexao(){
    pg_close($this->con);
    //echo "\nFechou";
  }

  public function getDb(){
    return $this->db;
  }

  public function verificaConexao(){
    if(!$this->con){
      echo "<h3>O sistema não está conectado à  {$this->db} em {$this->db_HOST}.</h3>";
    }else{
      echo "<h3>O sistema está conectado à  {$this->db} em {$this->db_HOST}.</h3>";
    }
  }
}