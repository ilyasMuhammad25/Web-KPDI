<?php namespace App\Libraries;
	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
	public function __construct()
    {
        log_message('info', 'Mail Class Initialized');
    }

    public function send_via_google($to = '', $subject = '', $data = [], $is_debug = false)
    {
        $mail = new PHPMailer(true);
        $is_sent = false;
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = get_parameter('mail-smtp_host','smtp.googlemail.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = get_parameter('mail-smtp_user','inlislite.dev@gmail.com');
            $mail->Password   = get_parameter('mail-smtp_pass','Inlislite999!');
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom(get_parameter('mail-smtp_user','inlislite.dev@gmail.com'), 'Inlislite Admin'); // silahkan ganti dengan alamat email Anda
            $mail->addAddress($to);
            $mail->addReplyTo(get_parameter('mail-smtp_user','inlislite.dev@gmail.com'), 'Inlislite Admin'); // silahkan ganti dengan alamat email Anda
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = view('Home\Views\signup_email', $data);
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			$status = true;

			// Send email
			if (!$mail->send()) {
				return false;
			} else {
				return true;
			}
        } catch (Exception $e) {
            $messages =  "Send Email failed. Error: " . $mail->ErrorInfo;
            $status = false;
			return false;
        }
    }

    public function send_via_corporate($data, $is_debug = false)
    {
        $mail = new PHPMailer(true);
        if ($is_debug) {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        }
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       	= 'smtp3.domain.com';
        $mail->SMTPAuth   	= false;
        $mail->Username   	= '';
        $mail->Password   	= '';
        $mail->SMTPSecure 	= false;
        $mail->Port       	= 25;
        $mail->SMTPAutoTLS  = false;

        $mail->setFrom('info@domain.com', 'Sender');
        $mail->addAddress($data['to_email'], $data['to_name']);

        // Set email format to HTML
        $mail->isHTML(true);
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['body'];

        // Send email
        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }
}
