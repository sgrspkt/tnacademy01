<?php 
include('connection.class.php');
class User extends Connection{
	private $user_id;
	private $username;
	private $email;
	private $password;
	private $ckpassword;

	public function __construct(){
		//parent::__construct();
	}

	public function setUserId($id=''){
		$this->user_id=$id;

	}
	public function setUserName($ue=''){
		$this->username=$ue;
	}
	public function setEmail($el=''){
		$this->email=$el;
	}
	public function setPassword($pw=''){
		$this->password=$pw;
	}
	public function setCkPassword($ckpw=''){
		$this->ckpassword=$ckpw;
	}

//add user

	public function addUser(){
		die('die');
		$this->sql = "INSERT INTO user(username,email,password,ckpassword) VALUES('$this->username','$this->email','$this->password','$this->ckpassword')";
		//echo $this->sql;
		$this->res = mysqli_query($this->con, $this->sql);
		$this->aff = mysqli_affected_rows($this->con);
		var_dump($this->aff);
	}
}
?>
