<?php
namespace de\christ;

require_once ("Mail.php");
require_once ("Mail/mime.php");


/**
 * Helferfunktionen
 *
 * @author christ
 */
class Mail {
    public static function send($to, $subject, $message, $html_message, $from) {
        $headers["From"]                      = $from;
        $headers["To"]                        = $to;
        $headers["Subject"]                   = $subject;
        $headers["Content-Type"]              = 'text/html; charset=UTF-8';
        $headers["Content-Transfer-Encoding"] = "8bit";

        $mime = new \Mail_mime;
        $mime->setTXTBody($message);
        $mime->setHTMLBody($html_message);
        $mimeparams                  = array();
        $mimeparams['text_encoding'] = "8bit";
        $mimeparams['text_charset']  = "UTF-8";
        $mimeparams['html_charset']  = "UTF-8";
        $mimeparams['head_charset']  = "UTF-8";

        #$mimeparams["debug"] = "True";

        $body    = $mime->get($mimeparams);
        $headers = $mime->headers($headers);

        // SMTP server name, port, user/passwd
        #$smtpinfo["debug"] = "True";

        // Create the mail object using the Mail::factory method
        $params["host"] = "mail.mediaman.de";
        $params["auth"] = TRUE;
        $params["username"] = "xxx";
        $params["password"] = "xxx";
        $mail =& \Mail::factory("smtp", $params);

        return $mail->send($to, $headers, $body);
    }
}