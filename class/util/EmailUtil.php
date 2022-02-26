<?
date_default_timezone_set('America/Fortaleza');

define( 'DS', DIRECTORY_SEPARATOR );
define( 'BASE_DIR', dirname( dirname( __FILE__ ) ) . DS );

require BASE_DIR . 'phpmailer/PHPMailerAutoload.php';
require BASE_DIR . 'phpmailer/vendor/autoload.php';

class EmailUtil {

	const EMAIL_OWNER = "Lumen Studio Fotografia";
	const EMAIL = "programador.leandrolopes@gmail.com";
	const EMAIL_SUBJECT = "Lumen Studio Fotografia - Contato do Site";
	public function ContactUtil() {
	}

	/**
	*
	* @param Contact $contact
	*/
	public static function send($contact) {

		$mail = new PHPMailerOAuth;

		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->AuthType = 'XOAUTH2';
		$mail->oauthUserEmail = "programador.leandrolopes@gmail.com";
		$mail->oauthClientId = "359711748838-bbuu81fhji8s38foht59m11knt7cem53.apps.googleusercontent.com";
		$mail->oauthClientSecret = "3kJNsVc3hCISi6F_T0VqzxJW";
		$mail->oauthRefreshToken = "1/qnaxSWpuovqwCommfwcKTXmerUP_DAX0RXNY4m51lwg";

		//$mail->Username = "programador.leandrolopes@gmail.com";
		//$mail->Password = "Larakeleo1";

		$mail->setFrom(self::EMAIL, self::EMAIL_OWNER);
		$mail->addAddress(self::EMAIL, self::EMAIL_OWNER);

		//$mail->isHTML(true);
		$mail->Subject = self::EMAIL_SUBJECT;
		$mail->msgHTML(self::message($contact));

		if ($mail->send()) {
			return true;
		}
		//echo "Mailer Error: " . $mail->ErrorInfo;
		return false;
	}

	/**
	*
	* @param Contact $contact
	*/
	public static function header($contact) {
		$headers = "";

		$headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
		$headers .= 'To: '. self::EMAIL_TO . "\n";
    $headers .= 'From: '. self::EMAIL_TO . "\n";

		return $headers;
	}

	/**
	*
	* @param Contact $contact
	*/
	public static function message($contact) {
		$data_envio = date('d/m/Y');
		$hora_envio = date('H:i:s');
		$html = "";

		$html .= "<html><body>";
		$html .= "<p><b>Nome:</b> " . $contact->getName() . "</p>";
		$html .= "<p><b>E-mail:</b> ". $contact->getEmail () ."</p>";
		$html .= "<p><b>Telefone:</b> " . $contact->getPhone() . "</p>";
		$html .= "<p><b>Mensagem:</b> ".$contact->getMessage()."</p>";
		$html .= "<p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>";
		$html .= "</body></html>";

		return $html;
	}
}
