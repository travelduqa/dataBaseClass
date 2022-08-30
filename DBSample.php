	<?php
  //Class Database
  
  class Database {
	
		protected $db_conn;
		protected $db_host = DB_HOST;
		protected $db_name = DB_NAME;
		protected $db_user = DB_USER;
		protected $db_pass = DB_PASS;
		 
		public function connect(){
			try{
			  $this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_pass);
			  return $this->db_conn;
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}
  
  //Sample Usage on Modal
  protected $db;
   
	public function __construct(){
	   $db_conn = new Database;
	   $this->db = $db_conn->connect();
	   return $this->db;
	} 
  
  	$stmt_gets=$this->db->query("SELECT valid, expiry FROM tbl_recovery_keys WHERE token = '$token'");
		$row = $stmt_gets->fetch(PDO::FETCH_ASSOC);
		
    
   ?>
