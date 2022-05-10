<?php
 
include “connection.php”
class User {
   public $db;
          public function_construct(){ $this->db = new mysqli(DB_SERVER,
DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if(mysqli_connect_errno()){ echo "Error: Could not connect to database.";
exit;
   } 
}

class customerService {
  public $liveChat;
  public $email;
  public $telepon;
  public $input;
  mysqli = new mysqli (DB_SERVER, DB_USERNAME,
DB_PASSWORD, DB_DATABASE);
  $CS = array();
  while ($input = $CS.fetch_assoc()) {
     $inputs[] = $input;
}
  $this->hasil = $inputs;
  return $this->hasil;
  public function fiturCustomerService {
	public function tampil () {
	 $query = “SELECT * FROM customerService ”
	 $run = $CS -> query ($query);
	while ($CS = $input-> fetch_array()) {
		included „db.php‟‟
   }
  } 