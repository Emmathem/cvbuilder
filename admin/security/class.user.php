<?php

require_once 'dbconfig.php';

class USER
{

	private $conn;
	private $id;

	const PRIVILEGE_NONE = 0;
	const PRIVILEGE_SUPER = 1;
	const PRIVILEGE_NORMAL = 2;

	public function __construct($user_id = '')
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;

		$this->id = $user_id;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}

	/** The function to add the
	*Admin Member
	**/
	public function register($fullname,$email,$upass,$code)
	{
		try
		{
			$password = md5($upass);
			$stmt = $this->conn->prepare("INSERT INTO admin(fullName,userEmail,userPass,tokenCode)
			                                             VALUES(:full_name, :user_mail, :user_pass, :active_code)");
			$stmt->bindParam(":full_name",$fullname);
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":active_code",$code);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	/** This function convert the size to human readable form
	**/
	function HumanReadableFileSize($size) {
	  $sequence = 0;
	  $unit = 1024;
	  $units = array("B","KB","MB","GB");
	  if ($size >= $unit) {
	    while ($size >= $unit) {
	    	$sequence++;
	      $size /= $unit;
	    }
	    if($sequence < count($units))
	      return round($size, 1, PHP_ROUND_HALF_UP). $units[$sequence];
	      return round($size, 1, PHP_ROUND_HALF_UP). $units[count($units)-1];
	  }
	  return $size . $units[$sequence];
	}
	/* Insert File into database for the student to download
	 * @param $file_week
	 * $return array
	 */

	public function upload_file($title, $type, $size, $file_url, $file_desc, $file_week, $uploadID)
	{
		try
		 {
             	$file_week = $_POST['file_week'];
             	$file_desc = $_POST['file_desc'];
			   	$file_name = "$file_week".time()."-".$_FILES['thumb']['name'];
			   	$size = $_FILES['thumb']['size'];
			    $temp_name = $_FILES["thumb"]["tmp_name"];

	 	        $folder = "../uploads/$file_name";
	 	        $title = $_POST['title'];

     			$new_size = $this->HumanReadableFileSize($size);
				 	 $type = $_FILES["thumb"]['type'];
				 	 if(move_uploaded_file($temp_name, $folder)) {
						$stmt = $this->conn->prepare("INSERT INTO media (title, type, size, file_url, file_desc, week, uploader_id, created_at) VALUES(:f_title, :f_type, :f_size, :f_url, :f_desc, :f_week, :f_uID, NOW())");

						$stmt->bindParam(":f_title", $title);
						$stmt->bindParam(":f_type", $type);
						$stmt->bindParam(":f_size", $new_size);
						$stmt->bindParam(":f_url", $file_name);
						$stmt->bindParam(":f_desc", $file_desc);
						$stmt->bindParam(":f_week", $file_week);
						$stmt->bindValue(":f_uID", $_SESSION['userSession']);
						$stmt->execute();
						return $stmt;
					}
					}
						catch(PDOException $e)
						{
							echo $e->getMessage();
						}

	}

		/*** Sent client messages to the admin
		*** Not email function
		**sent to database
		***/
	public function feedback ($name, $phone, $email, $subject, $message)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO feedback(name, phone_no, email, subject, message)
												VALUES (:full_name, :phone_num, :user_email, :mail_subject, :user_message)");
			$stmt->bindParam(":full_name", $name);
			$stmt->bindParam(":phone_num", $phone);
			$stmt->bindParam(":user_email", $email);
			$stmt->bindParam(":mail_subject", $subject);
			$stmt->bindParam(":user_message", $message);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}

	/**Login function for the Admin **/
	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM admin WHERE userEmail=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
				if($userRow['userPass']== md5($upass))
					{
						$_SESSION['userSession'] = $userRow['userID'];
						return true;
					}
					else
					{
						header("Location: index.php?error");
						exit;
					}
				}
			else
			{
				header("Location: index.php?error");
				exit;
			}
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}

	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}

	/**public function loggedStatus()
	{
		if(isset($_SESSION['userStatus'] !== 'SuperAdmin'))
		{
			return false;
		}
	} **/
	/*function authorize($userStatus) {
    return $userStatus == "SuperAdmin" ? TRUE : FALSE;
	}*/

	public function getPrivilege() {
		$q = $this->conn->prepare("SELECT '1' FROM `admin` WHERE `userID` = :1 AND `userStatus` = 'SuperAdmin'");
		$q->bindValue(':1', $this->id);

		#!- execute
		if (!$q->execute()) return self::PRIVILEGE_NONE;
		return $q->rowCount() > 0? self::PRIVILEGE_SUPER : self::PRIVILEGE_NORMAL;
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function admin_delete($userID)
	{
		$stmt = $this->conn->prepare("DELETE FROM admin WHERE userID=:id");
		$stmt->bindParam(":id", $userID, PDO::PARAM_INT);
		$stmt->execute();
	}
	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}

	function send_mail($email,$message,$subject)
	{
		require_once('../lib/PHPMailer/PHPMailerAutoload.php');
		require_once('../lib/PHPMailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->SMTPAuth   = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host       = "smtp.gmail.com";
		$mail->Port       = 465;
		$mail->AddAddress($email);
		$mail->Username="emmat0616@gmail.com";
		$mail->Password="engryewoletope";
		$mail->SetFrom('emmat0616@gmail.com','NWT ADMIN');
		$mail->AddReplyTo("emmat0616@gmail.com","NWT ADMIN");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->send();
	}
}

?>
