<?php
require '../settings.php'; 
class User
{
  public $userId;
  public $username;
  public $name;
  public $email;
  public $password;
  public $age;
  public $country;
  public $gender;
  public $dob;
  public $workCollege;
  
  //Use this while logging in.
  public function save()
  {
      
  }
 
  public static function getUser($id)
  {
  	// Create connection
	$conn = new mysqli(Database::$servername, Database::$username,Database::$password,Database::$db);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$conn = new mysqli(Database::$servername, Database::$username,Database::$password,Database::$db);
  	$sql = "SELECT user_id,username,name,email,password,age,country,gender,dob,work_college FROM User WHERE user_id=$id";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
	    $row = $result->fetch_assoc();
	    $user=new User();
	    $user->userId=$row['user_id'];
	    $user->username=$row['username'];
	    $user->name=$row['name'];
	    $user->email=$row['email'];
	    $user->age=$row['age'];
	    $user->gender=$row['gender'];
	    $user->dob=$row['dob'];
	    $user->workCollege=$row['work_college'];
	} 
	else 
	{
	    $user=null;
	    echo "USER NOT FOUND OR MULTIPLE USERS WITH SAME ID.";
	}
	$conn->close();
	return $user;
  }
  
}
