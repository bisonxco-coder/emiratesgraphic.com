<?php

set_include_path(get_include_path() . ':' . '.');
require_once('MailGun/Email.php');
use \MailGun\Email;

$subjectEmail = $_POST['subject'];

$Body = 
        '<label>Mail From Subscibe Section:</label>'.'<br>'.
        '<label><b>Name: </b></label>'.$_POST['fname'].'<br>'.
        '<label><b>Email: </b></label>'.$_POST['femail'].'<br>'.
        '<label><b>Phone: </b></label>'.$_POST['fphone'].'<br>'.
        '<label><b>Website: </b></label>'.$_POST['fproject'].'<br>'.
        '<label>Mail From Main Contact:</label>'.'<br>'.
        '<label><b>Branding: </b></label>'.$_POST['branding_ch'].'<br>'.
        '<label><b>Website: </b></label>'.$_POST['web_ch'].'<br>'.
        '<label><b>Mobile Application: </b></label>'.$_POST['app_ch'].'<br>'.
        '<label><b>Marketing: </b></label>'.$_POST['marketing_ch'].'<br>'.
        '<label><b>Name: </b></label>'.$_POST['name_m'].'<br>'.
        '<label><b>Email: </b></label>'.$_POST['emai_m'].'<br>'.
        '<label><b>Phone: </b></label>'.$_POST['phone_m'].'<br>'.
        '<label><b>Message: </b></label>'.$_POST['message'].'<br>';
	
//Instantiate with your domain and key (no, that's not my real key)
$email = new Email('postmaster.online', 'key-7cfb4b53d8e17762fd2f82b95ed6ffd5');
//Populate the object
$response = $email->setFrom('postmaster@postmaster.online', 'Website LandingPage EmiratesGraphic')
    //->addTo('sacha@emiratesgraphic.com')
    ->addTo('rilindp@gmail.com')
    ->setSubject($subjectEmail)
    ->setHtml($Body)
    ->setTestMode(false)
    ->send();
if ($response->getHttpCode() !== 200) {
    throw new \Exception('Mail failed !');
} else {
    echo 'Email sent successfully';
}

?>

