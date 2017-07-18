<?php

/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 6/18/2017
 */
require_once __DIR__.'/../../lib/Classes/Database.php';
class Admin
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
    /**Insert Last ID of any query*/
    public function lastID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }

    /**
     * Change the fullname to slug and append it to picture
     * @return string
     */
    function addSlug($string)
    {
        $string = str_replace("\n", "<br />", $string);
        $string = str_replace('\n', "<br />", $string);
        $string = stripslashes($string);
        $string = preg_replace('/[^a-z0-9]+/i', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $string));
        $string = trim($string, '-');
        $string = strtolower($string);
        return $string;
    }

    /**
    * This function register New Admin
    */
    public function register($fullname, $uname,$email,$upass,$userpost, $code)
    {
        try
        {
            $password = md5($upass);
            $stmt = $this->conn->prepare("INSERT INTO admin(fullName,userName,userEmail,userPass, userPost, tokenCode)
			                                             VALUES(:full_name, :user_name, :user_mail, :user_pass, :user_post, :active_code)");
            $stmt->bindParam(":full_name",$fullname);
            $stmt->bindparam(":user_name",$uname);
            $stmt->bindparam(":user_mail",$email);
            $stmt->bindparam(":user_pass",$password);
            $stmt->bindParam(":user_post", $userpost);
            $stmt->bindparam(":active_code",$code);
            $stmt->execute();
            return $stmt;
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }

    /**
     * This function create daily/weekly tip
    */
    public function addDailyTip($title, $message, $userID, $date_added, $added_time, $thumbname)
    {
        try
        {
                $stmt = $this->conn->prepare("INSERT INTO weekly_tip(title, content, user_id, date_added, added_time, imagedefault)
                                                    VALUES(:title, :content, :user_id,:date_added, :added_time, :thumb)");

                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":content", $message);
                $stmt->bindValue(":user_id", $_SESSION['userSession']);
                $stmt->bindParam(":date_added", $date_added);
                $stmt->bindParam(":added_time", $added_time);
                $stmt->bindParam(":thumb", $thumbname);
                $stmt->execute();
                return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

    }
    /**
     * Create Articles in database
     *
     */
    public function createArticle($art_code, $title, $link, $body, $art_category_id, $time_published, $date_added)
    {
        try {

            $stmt = $this->conn->prepare("INSERT INTO articles(art_code, a_link, a_title, a_body, art_category_id, time_published, date_inserted)
                                                VALUES(:art_code, :a_link, :a_title, :a_body, :art_category, :time_published, :date_inserted)");

            $stmt->bindParam(":art_code", $art_code);
            $stmt->bindParam(":a_link", $link);
            $stmt->bindParam(":a_title", $title);
            $stmt->bindParam(":a_body", $body);
            $stmt->bindParam(":art_category", $art_category_id);
            $stmt->bindParam(":time_published", $time_published);
            $stmt->bindParam(":date_inserted", $date_added);
            $stmt->execute();
            return $stmt;

        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    /**
     * Update Articles by Id
    */
    public function updateArticle($id, $title, $link, $body, $art_category_id) {
        try {
            $stmt = $this->conn->prepare("UPDATE articles SET a_title = :title, a_link =:link, a_body =:body, art_category_id=:cat_id WHERE article_id=:id");

            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":link", $link);
            $stmt->bindParam(":body", $body);
            $stmt->bindParam(":cat_id", $art_category_id);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt;
        }
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }

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
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Function to create pictures in gallery
    */
    public function createGallery($caption, $imgFile) {
        try {

            $stmt = $this->conn->prepare("INSERT INTO gallery(caption, img_path, date_added) VALUES (:caption, :imgfile)");

            $stmt->bindParam(":caption", $caption);
            $stmt->bindParam(":imgfile", $imgFile);
            $stmt->execute();
            return $stmt;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    /**Function to login admin and check for email existence*/
    public function login($email,$upass)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT * FROM admin WHERE userEmail=:email_id");
            $stmt->execute(array(":email_id"=>$email));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1)
            {
                if($userRow['userStatus']== "Y")
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
                    header("Location: index.php?inactive");
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

    /**Function to insert new Bible or other quotes*/
    public function addNewQuote($content, $author, $date_inserted) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO other_quotes (content, author, date_inserted)
                                                     VALUES (:content, :author, :date_inserted)");
            $stmt->bindParam(":content", $content);
            $stmt->bindParam(":author", $author);
            $stmt->bindParam(":date_inserted", $date_inserted);
            $stmt->execute();
            return $stmt;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    /**Function to insert new marriage quotes*/
    public function addNewMarriageQuote($m_content, $m_author, $date_inserted) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO marriage_quotes (content, author, date_inserted)
                                                     VALUES (:content, :author, :date_inserted)");
            $stmt->bindParam(":content", $m_content);
            $stmt->bindParam(":author", $m_author);
            $stmt->bindParam(":date_inserted", $date_inserted);
            $stmt->execute();
            return $stmt;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function is_logged_in()
    {
        if(isset($_SESSION['userSession']))
        {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        $_SESSION['userSession'] = false;
    }

    function send_mail($email,$message,$subject)
    {
        require_once('../../lib/Helpers/PHPMailer/PHPMailerAutoload.php');
        require_once('../../lib/Helpers/PHPMailer/class.phpmailer.php');
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
        $mail->SetFrom('no-reply@peacefullifeminstry.org','Peaceful Life Ministry');
        $mail->AddReplyTo("no-reply@peacefullifeministry.org","Peaceful Life Ministry");
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->send();
    }
}
