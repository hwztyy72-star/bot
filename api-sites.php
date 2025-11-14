<?php
#=========={api}==========#
$site=$_GET["site"];
$app=$_GET["app"];
$country=$_GET["country"];
$operator=$_GET["operator"];
$number=$_GET["number"];
$idnumber=$_GET["idnumber"];
$smsnum=$_GET["smsnum"];
$allsms=$_GET["allsms"];
include("name.php");
$APPS = json_decode(file_get_contents("data/api/apps.json"),true);
#________ALL
$api_key = $APPS[$site][api_key];
$Username = $APPS[$site][Username];
$Password = $APPS[$site][Password];
if($site=="5sim"){
$zx=$o_co['country'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["whatsapp","telegram","facebook","instagram","twitter","tiktok","google","imo","viber","snapchat","netflix","haraj","other"],$app);
}
if($site=="tempnum"){
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au",""],$app);
}
if($site=="man"){
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au",""],$app);
}
if($site=="vak"){
$zx=$o_co['country3'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","tk","gl","","","","nf","",""],$app);
}
if($site=="acktiwator"){
$zx=$o_co['country4'][$country];
$app_price = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["whatsapp","telegram","facebook","instagram","Twitter","TikTok/Douyin","Gmail","Imo","viber","Snapchat","Netflix","",""],$app);
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["7","6","13","16","23","209","9","115","5","42","224","",""],$app);
}
if($site=="pvapins"){
$zx=$o_co['country'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google-Pay","Imo","Viber","","Netflix","",""],$app);
}
if($site=="sms3t"){
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au",""],$app);
}
if($site=="onlinesim"){
$zx=$o_co['country6'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["whatsapp","telegram","facebook","instagram","twitter","tiktok","google","imo","viber","snapchat","netflix","haraj",""],$app);
}
if($site=="supersmstech"){
$zx=$o_co['country7'][$country];
$app_price = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","",""],$app);
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["2","5","7","24","22","82","6","27","18","134","21","",""],$app);
}
if($site=="viotp"){
$zx=$o_co['country8'][$country];
$app_price = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","","nf","","ot"],$app);
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["45","19","7","36","49","29","3","207","105","","357","","276"],$app);
}
if($site=="simsms"){
$zx=$o_co['country9'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["opt20","opt29","opt2","opt16","opt1","opt104","opt41","opt111","opt11","opt90","opt101","",""],$app);
}
if($site=="grizzly"){
$zx=$o_co['country10'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","tk","go","im","vi","","nf","",""],$app);
}
if($site=="smscode"){
$zx=$o_co['country11'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["14","5","9","4","20","36","10","48","8","235","19","","196"],$app);
}
if($site=="tiger"){
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","","nf","","ot"],$app);
}
if($site=="2ndline"){
$zx=str_replace(["13"],["12"],$country);
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["331","269","275","287","283","370","292","","346","482","294","","268"],$app);
}
if($site=="store"){
$zx=$o_co['country14'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","","go","","vi","","nf","",""],$app);
}
if($site=="fastpva"){
$zx=$o_co['country15'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj",""],$app);
}
if($site=="dropsms"){
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","","fb","ig","","","","","","","","",""],$app);
}
if($site=="24sms7"){
$zx=$o_co['country17'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","te"],$app);
}
if($site=="sellotp"){
$app_price = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["wa","tg","fb","ig","tw","lf","go","im","vi","","nf","","ot"],$app);
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["24","12","7","22","26","18","3","83","49","","133","","98"],$app);
}
if($site=="duraincloud"){
$zx=$o_co['country18'][$country];
$app = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["0107","0257","0013","0281","0005","0234","0098","0883","0029","0605","0208","0534",""],$app);
}
#________OPERATOR
$ary1=["17","18","19","20"];
$ary2=["21","22","23","24","25","43","44","45","46","47"];
$ary3=["26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42"];
$ary4=["48","49","50","51","52"];
$ary5=["53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","91","92"];
if($operator >= 1 and $operator <= 16 or $operator == 93 or $operator == 151){
$operator="any";
}elseif(in_array($operator,$ary1)){
$operator = str_replace(["17","18","19","20"],["mobifone","vietnamobile","viettel","vinaphone"],$operator);
}elseif(in_array($operator,$ary2)){
$operator = str_replace(["21","22","23","24","25","43","44","45","46","47"],["MOBIFONE","VINAPHONE","VIETTEL","VIETNAMOBILE","ITELECOM","MOBIFONE","VINAPHONE","VIETTEL","VIETNAMOBILE","ITELECOM"],$operator);
}elseif(in_array($operator,$ary3)){
$operator = str_replace(["26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42"],["0","1","2","3","4","5","6","8","9","10","11","12","13","14","15","16","17"],$operator);
}elseif(in_array($operator,$ary4)){
$operator = str_replace(["48","49","50","51","52"],["1","3","4","5","7"],$operator);
}elseif(in_array($operator,$ary5)){
$operator = str_replace(["53","54","55","56","57","58","59","60","61","62","63","64","65","66","67","68","69","70","71","72","73","74","75","76","77","78","79","80","81","82","83","84","85","86","87","88","89","90","91","92"],["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","g","k","l","m","n"],$operator);
$operator = str_replace(["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","g","k","l","m","n"],["3819","3543","3528","3328","2001","3825","3521","3326","2940","2919","3832","3744","3375","3262","3128","3826","3749","3484","3333","3302","2003","3475","3391","3335","2012","3862","3385","2624","3820","3497","3312","3890","3392","2866","3858","3515","3191","3189","3999","2929"],$operator);
}else{
$operator = str_replace(["94","95","96","97","98","99","100","101","102","103","104","105","106","107","108","109","110","111","112","113","114","115","116","117","118","119","120","121","122","123","124","125","126","127","128","129","130","131","132","133","134","135","136","137","138","139","140","141","142","143","144","145","146","147","148","149","150"],["019","activ","altel","beeline","claro","ee","globe","kcell","lycamobile","matrix","megafon","mts","orange","pildyk","play","redbullmobile","rostelecom","smart","sun","tele2","three","tigo","tmobile","tnt","virginmobile","virtual2","virtual4","virtual5","virtual7","virtual8","virtual12","virtual15","virtual16","virtual17","virtual18","virtual19","virtual20","virtual21","virtual22","virtual23","virtual24","virtual25","virtual26","virtual27","virtual28","virtual29","virtual30","virtual31","virtual32","virtual33","virtual34","virtual35","virtual36","virtual37","vodafone","yota","zz"],$operator);
}
#=========={Ø¬ÙØ¨ Ø§ÙØ±ÙÙ}==========#
if($_GET["action"] == "getNum"){
if($site=="5sim"){
$fali = array("no free phones","not enough user balance","not enough rating","select country","select operator","bad country","bad operator","no product","server offline","internal error");
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://5sim.biz/v1/user/buy/activation/$zx/$operator/$app");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer ' . $api_key;
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$no=$result;
$api = json_decode($result,1);
$idnumber = $api[id];
$number = $api[phone];
if(in_array($no,$fali)){
$number= $number;
}else{
$number = null;
}
if($number==null){
$status=0;
}else{
$status=200;
}
$v=$api[expires];
$ex_time= explode(":",$v);
$v=$ex_time[1];
$x=$api[created_at];
$ex_time= explode(":",$x);
$x=$ex_time[1];
if($v > $x){
$t=$v-$x;
$time=60*$t;
}else{
$t=60-$x+$v;
$time=60*$t;
}
$Location  = "5sim.biz";
}
if($site=="tempnum"){
$api = file_get_contents("https://tempnum.org/stubs/handler_api.php?api_key=$api_key&action=getNumber&service=$app&country=$country");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*15;
$Location  = "tempnum.org";
}
if($site=="man"){
$api = file_get_contents("http://api.sms-man.ru/stubs/handler_api.php?action=getNumber&api_key=$api_key&service=$app&country=$country&ref=$ref");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*15;
$Location  = "sms-man.ru";
}
if($site=="vak"){
$api = json_decode(file_get_contents("https://vak-sms.com/api/getNumber/?apiKey=$api_key&app=$app&country=$zx"));
$number  = $api->tel;
$idnumber = $api->idNum;
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "Vak-sms.com";
}
if($site=="acktiwator"){
$api = json_decode(file_get_contents("https://sms-acktiwator.ru/api/getnumber/$api_key?id=$app&code=$zx"),1);
$idnumber = $api['id'];
$number = $api['number'];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*30;
$Location  = "sms-acktiwator.ru";
}
if($site=="pvapins"){
$fali = array("Customer Not Found.","Number Not Found.","You have not received any code yet.","Your balance is expired.","Error 102, check back later.","App or Country Not Found.","No free channels available check after sometime.");
$api = file_get_contents("http://api.PVAPins.com/user/api/get_number.php?customer=$api_key&app=$app&country=$zx");
$number = $api;
$no = $api;
$idnumber = $number;
if(in_array($no,$fali)){
$number= $number;
}else{
$number = null;
}
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*8;
$Location  = "pvapins.com";
}
if($site=="sms3t"){
$api = file_get_contents("http://vps.sms3t.com/stubs/handler_api.php?api_key=$api_key&action=getNumber&service=$app&operator=$operator&ref=$ref&country=$country");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "sms3t.com";
}
if($site=="onlinesim"){
$api_key = file_get_contents("data/api/api_onlinesim.txt");
$api=json_decode(file_get_contents("https://onlinesim.io/api/getNum.php?apikey=$api_key&app=$app&country=$zx"),1);
$idnumber = $api[tzid];
$api2=json_decode(file_get_contents("https://onlinesim.io/api/getState.php?apikey=$api_key&tzid=$idnumber"),1);
$number = $api2[0][number];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*15;
$Location  = "onlinesim.io";
}
if($site=="supersmstech"){
$fali = array("No user found.","Invalid Service ID","Invalid country ID","Invalid channel ID","Not available for this channel.","The phone number is not available. Please try again later. Suggestion: Try another country or another channel");
$api = json_decode(file_get_contents("https://www.supersmstech.com/api/getnumber?channel=$operator&country=$zx&pid=$app&secret_key=$api_key"),1);
$number = $api[phone];
$idnumber = $api[taskid];
$no=$api[message];
if(in_array($no,$fali)){
$number= $number;
}else{
$number = null;
}
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*35;
$Location  = "supersmstech.com";
}
if($site=="viotp"){
$api = json_decode(file_get_contents("https://api.viotp.com/request/getv2?token=$api_key&serviceId=$app&country=$zx&network=$operator"),1);
$number = $api[data][phone_number];
$cod = $api[data][countryCode];
$idnumber = $api[data][request_id];
if($number==null){
$status=0;
}else{
$status=200;
}
$number = "$cod$number";
$time=60*7;
$Location  = "viotp.com";
}
if($site=="simsms"){
$api=json_decode(file_get_contents("http://simsms.org/priemnik.php?metod=get_number&country=$zx&app=$app&apikey=$api_key"),1);
$idnumber = $api['id'];
$number = $api['number'];
$CountryCode = $api['CountryCode'];
if($number==null){
$status=0;
}else{
$status=200;
}
$number = "$CountryCode$number";
$time=60*12;
$Location  = "simsms.org";
}
if($site=="grizzly"){
$api=file_get_contents("https://api.grizzlysms.com/stubs/handler_api.php?api_key=$api_key&action=getNumber&app=$app&country=$zx");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "grizzlysms.com";
}
if($site=="smscode"){
$api=json_decode(file_get_contents("https://sms-code.ru/api.php?api_key=$api_key&method=phone&app=$app&country=$zx&multiple_sms=0"),1);
$idnumber=$api[data][activation];
$number=$api[data][number];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "sms-code.ru";
}
if($site=="tiger"){
$api=file_get_contents("https://tiger-sms.com/stubs/handler_api.php?api_key=$api_key&action=getNumber&app=$app&country=$country");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "tiger-sms.com";
}
if($site=="2ndline"){
$api=json_decode(file_get_contents("https://2ndline.io/apiv1/order?apikey=$api_key&appId=$app&countryId=$zx&operatorId=$operator"),1);
$idds=$api["id"];
$api2=json_decode(file_get_contents("https://2ndline.io/apiv1/ordercheck?apikey=$api_key&id=$idds"),1);
$idnumber=$api2[data][id];
if($api2[status] != 1){
$number=null;
}else{
$number=$api2[status];
}
if($number==null){
$status=0;
}else{
$status=200;
}
$num2nd=$api2[data][phone];
$number=$api2[data][phone];
$nums = substr("$number", 0,+1);
if($nums==0){
$number = substr("$numb", +1);
$x=$_cod['code'][$country];
$number ="$x$number";
}
$time=60*20;
$Location  = "2ndline.io";
}
if($site=="store"){
$api=file_get_contents("https://receivesms.store/stubs/handler_api.php?api_key=$api_key&action=getNumber&app=$app&country=$zx");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*15;
$Location  = "receivesms.store";
}
if($site=="fastpva"){
$api=json_decode(file_get_contents("http://api.fastpva.com/pvapublic/sms/getNumber?myPid=$operator&locale=$zx&apikey=$api_key"),1);
$idnumber=$api[data][orderId];
$number=$api[data][number];
if(preg_match("/\+[0-9]/",$number)){
$number=$number;
}else{
$number=null;
}
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*15;
$Location  = "sms.fastpva.com";
}
if($site=="dropsms"){
$api=file_get_contents("https://api.dropsms.cc/stubs/handler_api.php?action=getNumber&api_key=$api_key&service=$app&country=$country");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "dropsms.ru";
}
if($site=="24sms7"){
$api=file_get_contents("https://24sms7.com/stubs/handler_api.php?api_key=$api_key&action=getNumber&app=$app&country=$zx");
$explode = explode(":",$api);
$idnumber = $explode[1];
$number = $explode[2];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*20;
$Location  = "24sms7.com";
}
if($site=="sellotp"){
$api=json_decode(file_get_contents("https://api.sellotp.com/request/get?token=$api_key&appId=$app&network=$operator&lang=en"),1);
$idnumber = $api[data][request_id];
$number = $api[data][phone_number];
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*10;
$Location  = "sellotp.com";
}
if($site=="duraincloud"){
$api=json_decode(file_get_contents("http://api.duraincloud.com/out/ext_api/getMobile?name=$Username&pwd=$Password&ApiKey=$api_key&cuy=$zx&pid=$app&num=1&noblack=0&serial=2"),1);
$cod = $api[code];
$number = $api[data];
$idnumber = $number;
if($cod==200){
$number = $number;
}else{
$number = null;
}
if($number==null){
$status=0;
}else{
$status=200;
}
$time=60*5;
$Location  = "mm.duraincloud.com";
}
$num = str_replace('+','',$number);
$number="+$num";
#_____json
if($status==200){
$json[status]=$status;
$json[message]="Number fetched successfully";
if($site=="2ndline"){
$json[num2nd]=$num2nd;
}
$json[number]=$number;
$json[idnumber]=$idnumber;
$json[time]=$time;
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="A problem has occurred from the provider";
$json[Location]=$Location;
}
echo json_encode($json);
}
#=========={Ø¬ÙØ¨ Ø§ÙØ±ÙÙ ÙÙÙØ¹ 2ndline}==========#
if($_GET["action"] == "getNum2nd"){
if($site=="2ndline"){
$api=json_decode(file_get_contents("https://2ndline.io/apiv1/ordercheck?apikey=$api_key&id=$idnumber"),1);
$idnumber=$api[data][id];
if($api[status] != 1){
$number=null;
}else{
$number=$api[status];
}
if($number==null){
$status=0;
}else{
$status=200;
}
$num2nd=$api[data][phone];
$number=$api[data][phone];
$nums = substr("$number", 0,+1);
if($nums==0){
$number = substr("$numb", +1);
$x=$_cod['code'][$country];
$number ="$x$number";
}
$time=60*20;
$Location  = "2ndline.io";
}
$num = str_replace('+','',$number);
$number="+$num";
#_____json
if($status=="200"){
$json[status]=$status;
$json[message]="Number fetched successfully";
if($site=="2ndline"){
$json[num2nd]=$num2nd;
}
$json[number]=$number;
$json[idnumber]=$idnumber;
$json[time]=$time;
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="A problem has occurred from the provider";
$json[Location]=$Location;
}
echo json_encode($json,1);
}
#=========={Ø¬ÙØ¨ Ø§ÙØ±ÙÙ ÙÙÙØ¹ 5sim}==========#
if($_GET["action"] == "getNum5sim"){
if($site=="5sim"){
$fali = array("no free phones","not enough user balance","not enough rating","select country","select operator","bad country","bad operator","no product","server offline","internal error");
$ch = curl_init();

$number    = str_replace('+','',$number);
curl_setopt($ch, CURLOPT_URL, "https://5sim.biz/v1/user/reuse/$app/$number");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer ' . $api_key;
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$no=$result;
$api = json_decode($result,1);
$idnumber = $api[id];
$number = $api[phone];
if(in_array($no,$fali)){
$number= $number;
}else{
$number = null;
}
if($number==null){
$status=0;
}else{
$status=200;
}
$v=$api[expires];
$ex_time= explode(":",$v);
$v=$ex_time[1];
$x=$api[created_at];
$ex_time= explode(":",$x);
$x=$ex_time[1];
if($v > $x){
$t=$v-$x;
$time=60*$t;
}else{
$t=60-$x+$v;
$time=60*$t;
}
$Location  = "5sim.biz";
}
$num = str_replace('+','',$number);
$number="+$num";
#_____json
if($status==200){
$json[status]=$status;
$json[message]="Number fetched successfully";
$json[number]=$number;
$json[idnumber]=$idnumber;
$json[time]=$time;
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="A problem has occurred from the provider";
$json[Location]=$Location;
}
echo json_encode($json,1);
}
#=========={Ø¬ÙØ¨ ÙÙØ¯ Ø§ÙØªØ­ÙÙ}==========#
if($_GET["action"] == "getStatus"){
if($site=="5sim"){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://5sim.biz/v1/user/check/$idnumber");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer ' . $api_key;
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$api=json_decode($result,1);
$code = $api[sms][0][code];
$created_at = $api[sms][0][created_at];
$created_at = explode(".", $created_at);
$created_at = str_replace('T',' ',$created_at[0]);
$sender = $api[sms][0][sender];
$agen = 200;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "5sim.biz";
}
if($site=="tempnum"){
$api = file_get_contents("https://tempnum.org/stubs/handler_api.php?action=getStatus&api_key=$api_key&id=$idnumber");
$ex_api= explode(":",$api);
$code = $ex_api[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "tempnum.org";
}
if($site=="man"){
$api = file_get_contents("http://api.sms-man.ru/stubs/handler_api.php?action=getStatus&api_key=$api_key&id=$idnumber");
$ex_api= explode(":",$api);
$code = $ex_api[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sms-man.ru";
}
if($site=="vak"){
$api = json_decode(file_get_contents("https://vak-sms.com/api/getSmsCode/?apiKey=".$api_key."&idNum=".$idnumber),1);
$code = $api['smsCode'];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "Vak-sms.com";
}
if($site=="acktiwator"){
$api = json_decode(file_get_contents("https://sms-acktiwator.ru/api/getstatus/$api_key?id=$idnumber"),1);
$code = $api['small'];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sms-acktiwator.ru";
}
if($site=="pvapins"){
$fali = array("Customer Not Found.","Number Not Found.","You have not received any code yet.","Your balance is expired.","Error 102, check back later.","App or Country Not Found.","No free channels available check after sometime.");
$api = file_get_contents("http://api.PVAPins.com/user/api/get_sms.php?customer=$api_key&number=$num&country=$counts&app=$app");
$code = $api;
$no = $api;
$agen = 1;
if(in_array($no,$fali)){
$code= $code;
}else{
$code = null;
}
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "pvapins.com";
}
if($site=="sms3t"){
$api = file_get_contents("http://vps.sms3t.com/stubs/handler_api.php?api_key=$api_key&action=getStatus&id=$idnumber");
$code = explode(':',$api)[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sms3t.com";
}
if($site=="onlinesim"){
$api=json_decode(file_get_contents("https://onlinesim.io/api/getState.php?apikey=$api_key&tzid=$idnumber"),1);
$code = $api[0][msg];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "onlinesim.io";
}
if($site=="supersmstech"){
$api = json_decode(file_get_contents("https://www.supersmstech.com/api/getcode?taskid=$idnumber&secret_key=$api_key"),1);
$code = $api[code];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "supersmstech.com";
}
if($site=="viotp"){
$api = json_decode(file_get_contents("https://api.viotp.com/session/getv2?token=$api_key&requestId=$idnumber"),1);
$code = $api[data]['Code'];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "viotp.com";
}
if($site=="simsms"){
$api = json_decode(file_get_contents("http://simsms.org/priemnik.php?metod=get_sms&country=$country&app=$app&id=$idnumber&apikey=$api_key"),1);
$code = $api['sms'];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "simsms.org";
}
if($site=="grizzly"){
$api = file_get_contents("https://api.grizzlysms.com/stubs/handler_api.php?api_key=$api_key&action=getStatus&id=$idnumber");
$code = explode(':',$api)[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "grizzlysms.com";
}
if($site=="smscode"){
$api=json_decode(file_get_contents("https://sms-code.ru/api.php?api_key=$api_key&method=sms&activation=$idnumber"),1);
$code = $api[data];
$agen = 200;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sms-code.ru";
}
if($site=="tiger"){
$api=file_get_contents("https://tiger-sms.com/stubs/handler_api.php?api_key=$api_key&action=getStatus&id=$idnumber");
$code = explode(':',$api)[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "tiger-sms.com";
}
if($site=="2ndline"){
$api = json_decode(file_get_contents("https://2ndline.io/apiv1/ordercheck?apikey=$api_key&id=$idnumber"),1);
$code = $api[data][code];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "2ndline.io";
}
if($site=="store"){
$api=file_get_contents("https://receivesms.store/stubs/handler_api.php?api_key=$api_key&action=getStatus&id=$idnumber");
$explode = explode(":",$api);
$code = $explode[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "receivesms.store";
}
if($site=="fastpva"){
$api=json_decode(file_get_contents("http://api.fastpva.com/pvapublic/sms/getCode?orderId=$idnumber&apikey=$api_key"),1);
$code = $api[data][code];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sms.fastpva.com";
}
if($site=="dropsms"){
$api=file_get_contents("https://api.dropsms.cc/stubs/handler_api.php?action=getStatus&api_key=$api_key&id=$idnumber");
$explode = explode(":",$api);
$code = $explode[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "dropsms.ru";
}
if($site=="24sms7"){
$api=file_get_contents("https://24sms7.com/stubs/handler_api.php?api_key=$api_key&action=getStatus&id=$idnumber");
$explode = explode(":",$api);
$code = $explode[1];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "24sms7.com";
}
if($site=="sellotp"){
$api=json_decode(file_get_contents("https://api.sellotp.com/session/get?token=$api_key&requestId=$idnumber&lang=en"),1);
$code = $api[data][Code];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sellotp.com";
}
if($site=="duraincloud"){
$api = json_decode(file_get_contents("http://api.duraincloud.com/out/ext_api/getMsg?name=$Username&pwd=$Password&ApiKey=$api_key&pn=$number&pid=$app&serial=2"),1);
$code = $api[data];
$agen = 1;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "mm.duraincloud.com";
}
$code = str_replace('-','',$code);
#_____json
if($status==200){
$json[status]=$status;
$json[message]="Verification code has been received";
$json[code]=$code;
if($site=="5sim"){
$json[created_at]=$created_at;
$json[sender]=$sender;
}
$json[agen]=$agen;
$json[price]=$price;
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="Provider verification code not received";
$json[Location]=$Location;
}
echo json_encode($json,1);
}
#=========={Ø¬ÙØ¨ ÙÙØ¯ Ø§ÙØªØ­ÙÙ}==========#
if($_GET["action"] == "getStatus2"){
if($site=="5sim"){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://5sim.biz/v1/user/check/$idnumber");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer ' . $api_key;
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$api=json_decode($result,1);
$code = $api[sms][$allsms][code];
$created_at = $api[sms][$allsms][created_at];
$created_at = explode(".", $created_at);
$created_at = str_replace('T',' ',$created_at[0]);
$sender = $api[sms][$allsms][sender];
$agen = 200;
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "5sim.biz";
}
if($site=="smscode"){
$api=json_decode(file_get_contents("https://sms-code.ru/api.php?api_key=$api_key&method=next_sms&activation=$idnumber"),1);
$code = $api[data];
$error = $api[status];
if($error != "error"){
$code = $code;
$agen = 1;
}else{
$code = null;
$agen = 200;
}
if($code==null){
$status=0;
}else{
$status=200;
}
$Location  = "sms-code.ru";
}
$code = str_replace('-','',$code);
#_____json
if($status==200){
$json[status]=$status;
$json[message]="Verification code has been received";
$json[code]=$code;
if($site=="5sim"){
$json[created_at]=$created_at;
$json[sender]=$sender;
}
$json[agen]=$agen;
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="Provider verification code not received";
$json[Location]=$Location;
}
echo json_encode($json,1);
}
#=========={Ø¥ÙÙØ§Ø¡ Ø§ÙØ±ÙÙ}==========#
if($_GET["action"] == "setStatus"){
if($site=="5sim"){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://5sim.biz/v1/user/finish/$idnumber");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer ' . $api_key;
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$api = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$status=200;
$Location  = "5sim.biz";
}
if($site=="tempnum"){
$status=200;
$Location  = "tempnum.org";
}
if($site=="man"){
$api = file_get_contents("http://api.sms-man.ru/stubs/handler_api.php?action=setStatus&api_key=$api_key&id=$idnumber&status=6");
$status=200;
$Location  = "sms-man.ru";
}
if($site=="vak"){
$status=200;
$Location  = "Vak-sms.com";
}
if($site=="acktiwator"){
$status=200;
$Location  = "sms-acktiwator.ru";
}
if($site=="pvapins"){
$status=200;
$Location  = "pvapins.com";
}
if($site=="sms3t"){
$status=200;
$Location  = "sms3t.com";
}
if($site=="onlinesim"){
$status=200;
$Location  = "onlinesim.io";
}
if($site=="supersmstech"){
$status=200;
$Location  = "supersmstech.com";
}
if($site=="viotp"){
$status=200;
$Location  = "viotp.com";
}
if($site=="simsms"){
$status=200;
$Location  = "simsms.org";
}
if($site=="grizzly"){
$api = file_get_contents("https://api.grizzlysms.com/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=6&id=$idnumber&forward=1");
$status=200;
$Location  = "grizzlysms.com";
}
if($site=="smscode"){
$api = file_get_contents("https://sms-code.ru/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=6&id=$idnumber");
$status=200;
$Location  = "sms-code.ru";
}
if($site=="tiger"){
$api = file_get_contents("https://tiger-sms.com/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=6&id=$idnumber");
$status=200;
$Location  = "tiger-sms.com";
}
if($site=="2ndline"){
$status=200;
$Location  = "2ndline.io";
}
if($site=="store"){
$api=file_get_contents("https://receivesms.store/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=1&id=$idnumber");
$status=200;
$Location  = "receivesms.store";
}
if($site=="fastpva"){
$status=200;
$Location  = "sms.fastpva.com";
}
if($site=="dropsms"){
$status=200;
$Location  = "dropsms.ru";
}
if($site=="24sms7"){
$status=200;
$Location  = "24sms7.com";
}
if($site=="sellotp"){
$status=200;
$Location  = "sellotp.com";
}
if($site=="duraincloud"){
$api = json_decode(file_get_contents("http://api.duraincloud.com/out/ext_api/passMobile?name=$Username&pwd=$Password&ApiKey=$api_key&pn=$number&pid=$app&serial=2"),1);
$code = $api[code];
$status=200;
$Location  = "mm.duraincloud.com";
}
#_____json
if($status==200){
$json[status]=$status;
$json[message]="The number has been terminated from the provider";
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="The number could not be terminated from the provider";
$json[Location]=$Location;
}
echo json_encode($json,1);
}
#=========={Ø­Ø¸Ø± Ø§ÙØ±ÙÙ}==========#
if($_GET["action"] == "addBlack"){
if($site=="5sim"){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://5sim.biz/v1/user/ban/$idnumber");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer ' . $api_key;
$headers[] = 'Accept: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$api = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$status=200;
$Location  = "5sim.biz";
}
if($site=="tempnum"){
$api = file_get_contents("https://tempnum.org/stubs/handler_api.php?api_key=$api_key&action=setStatus&api_key=$api_key&id=$idnumber&status=8");
$status=200;
$Location  = "tempnum.org";
}
if($site=="man"){
$api = file_get_contents("http://api.sms-man.ru/stubs/handler_api.php?action=setStatus&api_key=$api_key&id=$idnumber&status=-1");
$status=200;
$Location  = "sms-man.ru";
}
if($site=="vak"){
$api = file_get_contents("https://vak-sms.com/api/setStatus/?apiKey=$api_key&status=bad&idNum=$idnumber");
$status=200;
$Location  = "Vak-sms.com";
}
if($site=="acktiwator"){
$api = file_get_contents("http://sms-acktiwator.ru/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=8&id=$idnumber&forward=1");
$status=200;
$Location  = "sms-acktiwator.ru";
}
if($site=="pvapins"){
$status=200;
$Location  = "pvapins.com";
}
if($site=="sms3t"){
$api = file_get_contents("http://vps.sms3t.com/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=8&id=$idnumber");
$status=200;
$Location  = "sms3t.com";
}
if($site=="onlinesim"){
$api=json_decode(file_get_contents("https://onlinesim.io/api/setOperationOk.php?apikey=$api_key&tzid=$idnumber"),1);
$tims = $api[0][time];
if($tims > 770){
$status=0;
}else{
$status=200;
}
$Location  = "onlinesim.io";
}
if($site=="supersmstech"){
$numbers    = str_replace('+','',$number);
$api = json_decode(file_get_contents("https://www.supersmstech.com/api/releasenumber?phone=$numbers&secret_key=$api_key"),1);
$status=200;
$Location  = "supersmstech.com";
}
if($site=="viotp"){
$status=200;
$Location  = "viotp.com";
}
if($site=="simsms"){
$api = file_get_contents("http://simsms.org/priemnik.php?metod=ban&service=$service&apikey=$api_key&id=$idnumber");
$status=200;
$Location  = "simsms.org";
}
if($site=="grizzly"){
$api = file_get_contents("https://api.grizzlysms.com/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=8&id=$idnumber&forward=1");
$status=200;
$Location  = "grizzlysms.com";
}
if($site=="smscode"){
$api=json_decode(file_get_contents("https://sms-code.ru/api.php?api_key=$api_key&method=cancel&activation=$idnumber"),1);
$status=200;
$Location  = "sms-code.ru";
}
if($site=="tiger"){
$api=file_get_contents("https://tiger-sms.com/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=8&id=$idnumber");
$status=200;
$Location  = "tiger-sms.com";
}
if($site=="2ndline"){
$status=200;
$Location  = "2ndline.io";
}
if($site=="store"){
$api=file_get_contents("https://receivesms.store/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=8&id=$idnumber");
$status=200;
$Location  = "receivesms.store";
}
if($site=="fastpva"){
$api=json_decode(file_get_contents("http://api.fastpva.com/pvapublic/sms/shieldNumber?orderId=$idnumber&api_key=$api_key"),1);
$status=200;
$Location  = "sms.fastpva.com";
}
if($site=="dropsms"){
$status=200;
$Location  = "dropsms.ru";
}
if($site=="24sms7"){
$api=file_get_contents("https://24sms7.com/stubs/handler_api.php?api_key=$api_key&action=setStatus&status=8&id=$idnumber");
$status=200;
$Location  = "24sms7.com";
}
if($site=="sellotp"){
$status=200;
$Location  = "sellotp.com";
}
if($site=="duraincloud"){
$api = json_decode(file_get_contents("http://api.duraincloud.com/out/ext_api/addBlack?name=$Username&pwd=$Password&ApiKey=$api_key&pn=$number&pid=$app"),1);
$status = $api[code];
$Location  = "mm.duraincloud.com";
}
#_____json
if($status==200){
$json[status]=$status;
$json[message]="The number has been blocked from the provider";
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="The number is not blocked from the provider";
$json[Location]=$Location;
}
echo json_encode($json,1);
}
#=========={Ø§Ø³ØªØ¹ÙØ§Ù Ø¹Ù Ø³Ø¹Ø± Ø§ÙØ¯ÙÙØ©}==========#
if($_GET["action"] == "getPrice"){
if($site=="5sim"){
if($operator!="any"){
$api=json_decode(file_get_contents("https://5sim.biz/v1/guest/prices?country=$zx&product=$app"),1);
$price=$api[$zx][$app][$operator][cost];
$add=$api[$zx][$app][$operator][count];
}else{
$price=json_decode(file_get_contents("https://5sim.biz/v1/guest/products/".$zx."/".$operator))->{$app}->Price;
$add=json_decode(file_get_contents("https://5sim.biz/v1/guest/products/".$zx."/".$operator))->{$app}->Qty;
}
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "5sim.biz";
}
if($site=="tempnum"){
$api = json_decode(file_get_contents("https://tempnum.org/stubs/handler_api.php?api_key=$api_key&action=getPrices&service=$app&country=$country"),1);
$price=$api[$country][$app]["cost"];
$add=$api[$country][$app]["count"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "tempnum.org";
}
if($site=="man"){
$api = json_decode(file_get_contents("http://api.sms-man.ru/stubs/handler_api.php?action=getPrices&api_key=$api_key&service=$app&country=$country"),1);
$price=$api[$country][$app]["cost"];
$add=$api[$country][$app]["count"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "sms-man.ru";
}
if($site=="vak"){
$api=json_decode(file_get_contents("https://vak-sms.com/api/getCountNumber/?apiKey=$api_key&service=$app&country=$zx&operator=$operator&price"),1);
$price=$api["price"];
$add=$api[$app];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "Vak-sms.com";
}
if($site=="acktiwator"){
$api = file_get_contents("https://sms-acktiwator.ru/api/numbersstatus/$api_key?code=$zx");
$ex = explode("$app_price",$api);
$price = explode("cost",$ex[1]);
$add = explode("count",$ex[1]);
$price = explode('"',$price[1]);
$add = explode('"',$add[1]);
$price = str_replace(':','',$price[1]);
$price = str_replace(',','',$price);
$add = str_replace(':','',$add[1]);
$add = str_replace(',','',$add);
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "sms-acktiwator.ru";
}
if($site=="pvapins"){
$status=0;
$Location  = "pvapins.com";
}
if($site=="sms3t"){
$api=json_decode(file_get_contents("http://vps.sms3t.com/stubs/handler_api.php?api_key=$api_key&action=getPrices&service=$app&country=$country"),1);
$price=$api[$country][$app]["cost"];
$add=$api[$country][$app]["count"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "sms3t.com";
}
if($site=="onlinesim"){
$api=json_decode(file_get_contents("https://onlinesim.io/api/getNumbersStats.php?apikey=$api_key&country=$zx&service=$app"),1);
$price=$api["services"]["service_$app"]["price"];
$add=$api["services"]["service_$app"]["count"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "onlinesim.io";
}
if($site=="supersmstech"){
if($operator == 1){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf"],["160","100","75","85","80","80","85","60","69","100","83"],$app_price);
}elseif($operator == 3){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf"],["120","160","75","85","80","80","160","60","69","100","83"],$app_price);
}elseif($operator == 4){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf"],["120","250","","","","120","160",200,"160","",""],$app_price);
}elseif($operator == 5){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf"],["","150","85","85","85","","85","","85","","85"],$app_price);
}elseif($operator == 7){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf"],["600",200,"160","160","160","260","160","160","160","160","160"],$app_price);
}
if($price!=null){
$price=$api/636.9*54;
}
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "supersmstech.com";
}
if($site=="viotp"){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","nf","ot"],["3500","4400","1000","800","800","1000","900","1000","1000","1000","5000"],$app_price);
$price=$api/22000*54;
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "viotp.com";
}
if($site=="simsms"){
$api=json_decode(file_get_contents("http://simsms.org/priemnik.php?metod=get_service_price&country=$zx&service=$app&apikey=$api_key"),1);
$price=$api["price"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "simsms.org";
}
if($site=="grizzly"){
$api=json_decode(file_get_contents("https://api.grizzlysms.com/stubs/handler_api.php?api_key=$api_key&action=getPrices&service=$app&country=$zx"),1);
$price=$api[$zx][$app]["cost"];
$add=$api[$zx][$app]["count"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "grizzlysms.com";
}
if($site=="smscode"){
$api=json_decode(file_get_contents("https://sms-code.ru/api.php?api_key=$api_key&method=full_free_phones&service=$app"),1);
$price=$api[data][$app][$zx]["price"];
$add=$api[data][$app][$zx]["phones"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "sms-code.ru";
}
if($site=="tiger"){
$api=json_decode(file_get_contents("https://tiger-sms.com/stubs/handler_api.php?api_key=$api_key&action=getPrices&service=$app&country=$country"),1);
$price=$api[$app][$country]["price"];
$add=$api[$app][$country]["phones"];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "tiger-sms.com";
}
if($site=="2ndline"){
$status=0;
$Location  = "2ndline.io";
}
if($site=="store"){
$api=str_replace(["wa","tg","fb","ig","tw","go","vi","nf"],["0.3","0.3","0.3","0.3","0.3","0.3","0.3","0.3"],$app);
$price=$api*54;
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "receivesms.store";
}
if($site=="fastpva"){
$status=0;
$Location  = "sms.fastpva.com";
}
if($site=="dropsms"){
$price=$o_co[$app]['price16'][$country];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "dropsms.ru";
}
if($site=="24sms7"){
$api=json_decode(file_get_contents("https://24sms7.com/stubs/handler_api.php?api_key=$api_key&action=getPrices&service=$app&country=$zx"),1);
$price=$api[$zx][$app][cost];
$add=$api[$zx][$app][count];
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "24sms7.com";
}
if($site=="sellotp"){
$api=str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","nf","ot"],["8000","5000","2000","4000","4000","4000","2000","4000","4000","4000","20000"],$app_price);
$price=$api/22000*54;
if($price!=null){
$status=200;
}else{
$status=0;
}
$Location  = "sellotp.com";
}
if($site=="duraincloud"){
$status=0;
$Location  = "mm.duraincloud.com";
}
#_____json
if($status==200){
$json[status]=$status;
$json[message]="The state price was brought";
$json[price]=$price;
$json[add]=$add;
$json[operator]=$operator;
$json[Location]=$Location;
}else{
$json[status]=$status;
$json[message]="This country does not exist";
$json[operator]=$operator;
$json[Location]=$Location;
}
echo json_encode($json,1);
}