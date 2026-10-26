<?php

// Mailgun credentials are read from the Laravel .env (one level above /public).
// Keys: CONTACT_MAILGUN_KEY, CONTACT_MAILGUN_DOMAIN, CONTACT_MAILGUN_ENDPOINT
function eg_env($key, $default = '') {
    static $vars = null;
    if ($vars === null) {
        $vars = array();
        $file = dirname(__DIR__) . '/.env';
        if (is_readable($file)) {
            foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                $line = trim($line);
                if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) continue;
                list($k, $v) = explode('=', $line, 2);
                $vars[trim($k)] = trim(trim($v), "\"'");
            }
        }
    }
    return isset($vars[$key]) && $vars[$key] !== '' ? $vars[$key] : $default;
}

function eg_post($key) {
    return isset($_POST[$key]) ? htmlspecialchars((string)$_POST[$key], ENT_QUOTES, 'UTF-8') : '';
}

// 2026-10-26: prano vetëm POST me emër + email të vlefshëm (përndryshe mos dërgo asgjë)
if (!isset($_SERVER['REQUEST_METHOD']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo 'Method not allowed';
    exit;
}
$egName  = isset($_POST['FNAME']) ? trim((string)$_POST['FNAME']) : '';
$egEmail = isset($_POST['EMAIL']) ? trim((string)$_POST['EMAIL']) : '';
if ($egName === '' || !filter_var($egEmail, FILTER_VALIDATE_EMAIL)) {
    header('HTTP/1.1 400 Bad Request');
    echo 'Missing fields';
    exit;
}

// Merr subjektin nga emaili i plotësuar në formular (nga Kodi 1)
$subjectEmail = isset($_POST['EMAIL']) ? str_replace(array("\r", "\n"), ' ', (string)$_POST['EMAIL']) : '';

// Trupi i emailit me të gjitha fushat e detajuara nga Kodi 1
$Body = 
    '<label style="font-size: 15px;"><b>Contact page & Footer Form: </b></label>'.'<br>'.
    '<label><b>Name: </b></label>'.eg_post('FNAME').'<br>'.
    '<label><b>Phone Number: </b></label>'.eg_post('MMERGE4').'<br>'.
    '<label><b>Email: </b></label>'.eg_post('EMAIL').'<br>'.
    '<label><b>Website: </b></label>'.eg_post('MMERGE3').'<br>'.
    '<label><b>Interested In: </b></label>'.eg_post('interested_in').'<br>'.
    '<label><b>App Budget (mob-app pages): </b></label>'.eg_post('market_budget').'<br>'.
    '<label><b>Message: </b></label>'.eg_post('MMERGE2');

// Mailgun EU – kredencialet nga .env
$api_key = eg_env('CONTACT_MAILGUN_KEY');
$domain = eg_env('CONTACT_MAILGUN_DOMAIN', 'pozhegu.com');
$url = rtrim(eg_env('CONTACT_MAILGUN_ENDPOINT', 'https://api.eu.mailgun.net/v3'), '/') . "/" . $domain . "/messages";
// Përgatitja e të dhënave për dërgim (përdoruesit e rinj "to" nga Kodi 2)
$post_data = array(
    'from'    => 'Main contact form Emirates Graphic <postmaster@pozhegu.com>',
    'to'      => 'sacha@emiratesgraphic.com, rilindp@gmail.com',
    'subject' => $subjectEmail,
    'html'    => $Body
);

// Dërgimi me cURL (pa pasur nevojë për librari të jashtme SDK)
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "api:" . $api_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Kthimi i përgjigjes standarde HTTP
// 2026-10-26: sukses vetëm kur Mailgun kthen 200 + "id" (mesazhi u pranua); përndryshe 502 + log
$mgJson = is_string($response) ? json_decode($response, true) : null;
if ($http_code !== 200 || !is_array($mgJson) || empty($mgJson['id'])) {
    error_log('mail_contact.php: Mailgun send failed, HTTP ' . $http_code . ', response: ' . substr(is_string($response) ? $response : var_export($response, true), 0, 500));
    header('HTTP/1.1 502 Bad Gateway');
    echo 'Mail failed !';
} else {
    header('HTTP/1.1 200 OK');
    echo 'Email sent successfully';
}
?>
