<?php 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
	private $host;
	private $password;
	private $username;

	private $phpMailer;

	public function __construct($host, $password, $username)
	{
		$this->host = $host;
		$this->password = $password;
		$this->username = $username;
		$this->phpMailer = new PHPMailer();
	}
	public function setup()
	{
		$this->phpMailer->isSMTP();
		$this->phpMailer->Host = $this->host;
		$this->phpMailer->SMTPDebug = 1;
		$this->phpMailer->Password = $this->password;
		$this->phpMailer->Username = $this->username;
		$this->phpMailer->SMTPKeepAlive=true;
		$this->phpMailer->SMTPAuth=true;
		$this->phpMailer->SMTPSecure='tls';
		$this->phpMailer->Port=587;
		return $this;
	}

	public	function eposta_gönderimi($email_alici,$email_alici_adi)
	{
		$this->phpMailer->setFrom("emailman@sample.com","Master");
		$this->phpMailer->addAddress($email_alici,$email_alici_adi); 
		$this->phpMailer->isHTML(true);
		$this->phpMailer->Subject="deneme"; 
		$this->phpMailer->Body="<h1>Hos Geldiniz</h1> <p>yaptıgınız kayit için teşekkür ederim </p>"; //$mail->addAttachment("dosya.txt");//bir dosya atacagımızda kullanıyoruz 
		try{
			// if (!$this->phpMailer->send()) { echo"Mail Gönderimi Başarısız".$this->phpMailer->ErrorInfo; }else{ echo"Mail Gönderimi Basarılı"; } 
			return $this->phpMailer->send();
		}
		catch(Exception $ex){
			echo $this->phpMailer->ErrorInfo;
		}
	}

}
 
?>