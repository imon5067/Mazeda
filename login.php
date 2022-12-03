<?php 
class UserLogin
{
	// User Registraton 
	public function UserRegistration($name,$mobile,$email,$password){
		$select= mysql_query("SELECT * FROM user_info WHERE user_name='$name' && email='$email'");
		$findnumber = mysql_num_rows($select);
		if($findnumber!=0){
			return "All Ready Sign Up !";
		}else{
		 $registration = mysql_query("INSERT INTO user_info (user_name,password,email,phone) VALUES ('$name','$password','$email','$mobile')");
		 if($registration){
			return "Sign Up successfull !";
			}else{
				return "Sign Up Fails !";
			}
		}//end else
	}//end registraton method


	public function CustomerLogin($email,$password){
		$select = mysql_query("SELECT * FROM user_info WHERE (email='$email' OR user_name ='$email') && password ='$password'");
		$findout = mysql_num_rows($select);
		$fetch = mysql_fetch_array($select);
		if($findout==1){
			$_SESSION['userLoginId'] = $fetch['user_id'];
			header("Location:index.php");
		}else{
			return"Email or password Wrong !";
		}
	}
	
}//end class


 ?>