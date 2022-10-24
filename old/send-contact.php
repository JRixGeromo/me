<?

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

//$smtpHost = 'mail.jintelcare.com';
//$smtpPort = '587';

$to = 'jrixgeromo@jintelcare.com';
$from = $email;
$fromNotification = "jrixgeromo@jintelcare.com";

$message = $content;
$subject = $name. " Contacted You";
$headers = "From: ".$from."\r\n" .
           "Reply-To:".$from."\r\n" .
           "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers,"-f jrixgeromo@jintelcare.com");
?>