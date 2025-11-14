<?php
include("name.php");
#==========={Country}===========#
$ONE = ["x"=>"xx","xx"=>"xx","الإمارات 🇦🇪"=>"95","فيتنام 🇻🇳"=>"10","قطر 🇶🇦"=>"111","الجبل الأسود 🇲🇪"=>"171","عمان 🇴🇲"=>"107","البحرين 🇧🇭"=>"145","قيرغيزستان 🇰🇬"=>"11","كازاخستان 🇰🇿"=>"2","بنغلاديش 🇧🇩"=>"60","إندونيسيا 🇮🇩"=>"6","ماليزيا 🇲🇾"=>"7","سريلانكا 🇱🇰"=>"64","صربيا 🇷🇸"=>"29","روسيا 🇷🇺"=>"0","منغوليا 🇲🇳"=>"72","الكويت 🇰🇼"=>"100","الصين 🇨🇳"=>"3","السعودية 🇸🇦"=>"53"];
$TOW = ["x"=>"xx","xx"=>"xx","الأردن 🇯🇴"=>"116","إسرائيل 🇮🇱👞"=>"13","إيران 🇮🇷"=>"57","هونغ كونغ 🇭🇰"=>"14","رومانيا 🇷🇴"=>"32","البرتغال 🇵🇹"=>"117","سوريا 🇸🇾"=>"110","الهند 🇮🇳"=>"22","كمبوديا 🇰🇭"=>"24","النيبال 🇳🇵"=>"81","ماكو 🇲🇴"=>"20","اليمن 🇾🇪"=>"30","فلسطين 🇵🇸"=>"188","العراق 🇮🇶"=>"47","بابو 🇵🇬"=>"79","الفلبين 🇵🇭"=>"4"];
$THREE = ["x"=>"xx","xx"=>"xx","تركيا 🇹🇷"=>"62","لاوس 🇱🇦"=>"25","افغانستان 🇦🇫"=>"74","تايلاند 🇹🇭"=>"52","المانيا 🇩🇪"=>"43","طاجيكستان 🇹🇯"=>"143","لبنان 🇱🇧"=>"153","اوزبكستان 🇺🇿"=>"40","تركمانستان 🇹🇲"=>"161","باكستان 🇵🇰"=>"66","جورجيا 🇬🇪"=>"128","موريتانيا 🇲🇷"=>"114","مصر 🇪🇬"=>"21","جنوب افريقيا 🇿🇦"=>"31","قبرص 🇨🇾"=>"77","اسبانيا 🇪🇸"=>"56","سويسرا 🇨🇭"=>"173","السودان 🇸🇩"=>"98"];
$FOUR = ["x"=>"xx","xx"=>"xx","تونس 🇹🇳"=>"89","مدغشقر 🇲🇬"=>"17","إستونيا 🇪🇪"=>"34","الجزائر 🇩🇿"=>"58","إثيوبيا 🇪🇹"=>"71","زامبيا 🇿🇲"=>"147","جيبوتي 🇩🇯"=>"168","النيجر 🇳🇪"=>"139","فرنسا 🇫🇷"=>"78","لاتيفيا 🇱🇻"=>"49","ليبيا 🇱🇾"=>"102","ليبيريا 🇱🇷"=>"135","انغولا 🇦🇴"=>"76","السويد 🇸🇪"=>"46"];
$FIVE = ["x"=>"xx","xx"=>"xx","إيطاليا 🇮🇹"=>"86","ساحل العاج 🇨🇮"=>"27","كينيا 🇰🇪"=>"8","المغرب 🇲🇦"=>"37","موزمبيق 🇲🇿"=>"80","زيمبابوي 🇿🇼"=>"96","غانا 🇬🇭"=>"38","بوتسوانا 🇧🇼"=>"123","الصومال 🇸🇴"=>"149","برمودا 🇧🇲"=>"195"];
$SIX = ["x"=>"xx","xx"=>"xx","اليابان 🇯🇵"=>"182","كوريا الجنوبية 🇰🇷"=>"190","شمال مقدونيا 🇲🇰"=>"183","امريكا 🇺🇸"=>"187","البرازيل 🇧🇷"=>"73","الاكوادور 🇪🇨"=>"105","سيراليون 🇸🇱"=>"115","الأرجنتين 🇦🇷"=>"39","المكسيك 🇲🇽"=>"54","بوليفيا 🇧🇴"=>"92","سوازيلاند 🇸🇿"=>"106","كاليدونيا 🇳🇨"=>"185","بلجيكا 🇧🇪"=>"82","اليونان 🇬🇷"=>"129","أوكرانيا 🇺🇦"=>"1","هولندا 🇳🇱"=>"48","ليتوانيا 🇱🇹"=>"44","كندا 🇨🇦"=>"36","كابيفردي 🇨🇻"=>"186","ميانمار 🇲🇲"=>"5"];
$SEVEN = ["x"=>"xx","xx"=>"xx","بولندا 🇵🇱"=>"15","جزر سليمان 🇸🇧"=>"193","بريطانيا 🇬🇧"=>"16","هايتي 🇭🇹"=>"26","بوتان 🇧🇹"=>"158","تيمور 🇹🇱"=>"91","تايوان 🇹🇼"=>"55","فيجي 🇫🇯"=>"189","غامبيا 🇬🇲"=>"28","جزر القمر 🇰🇲"=>"133","إفريقيا الوسطى 🇨🇫"=>"125","جنوب السودان 🇸🇸"=>"177","إريتريا 🇪🇷"=>"176","ناميبيا 🇳🇦"=>"138","الغابون 🇬🇦"=>"154","أذربيجان 🇦🇿"=>"35"];
$EIGHT = ["x"=>"xx","xx"=>"xx","ليسوتو 🇱🇸"=>"136","غواتيمالا 🇬🇹"=>"94","سورينام 🇸🇷"=>"142","بليز 🇧🇿"=>"124","كوستاريكا 🇨🇷"=>"93","بروناي 🇧🇳"=>"121","بيرو 🇵🇪"=>"65","توجو 🇹🇬"=>"99","تشاد 🇹🇩"=>"42","جوادلوب 🇬🇵"=>"160","كوبا 🇨🇺"=>"113","مالي 🇲🇱"=>"69"];
#=========={قائمة البرامج}==========#
if($data == "Buynum"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - *يرجى إختيار التطبيق* الذي تريد *شراء رقم وهمي* لتفعيله 🎥

🔺 - يمكنك إختيار *السيرفر العام* ☑️ ، يمكن ل هذا السيرفر شراء رقم يستقبل الكود لكل البرامج المتورفرة لديك *وبسعر واحد ومميز* 👾
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⁞ واتسأب 💬','callback_data'=>"Kn-2"],['text'=>'⁞ تيليجرام 📢','callback_data'=>"Kn-3"]],
[['text'=>'⁞ إنستقرام 🎥','callback_data'=>"Kn-5"],['text'=>'⁞ فيسبوك🏆','callback_data'=>"Kn-4"]],
[['text'=>'⁞ تويتر 🚀','callback_data'=>"Kn-6"],['text'=>'⁞ تيكتوك 🎬','callback_data'=>"Kn-7"]],
[['text'=>'⁞ قوقل 🌐','callback_data'=>"Kn-8"],['text'=>'⁞ سناب 🐬','callback_data'=>"Kn-11"]],
[['text'=>'⁞ حراج 🛍','callback_data'=>"Kn-13"],['text'=>'⁞ إيمو 🐦','callback_data'=>"Kn-9"]],
[['text'=>'⁞ السيرفر العام ☑️','callback_data'=>"Kn-14"]],
[['text'=>'⁞ السيرفر الملكي 👑','callback_data'=>"saavmotamy"]],
[['text'=>'⁞ سيرفرات الشراء العشوائي ♻️.','callback_data'=>"worldwide"]],
[['text'=>'- رجوع.','callback_data'=>"back"]]
]
])
]);
unlink("data/id/$id/step.txt");
}
#=========={الدول}==========#
if($exdata[0] == "Kn"){
$add=$exdata[1];
$con=$exdata[2];
if($con==null){
$con=1;
}
$APP = str_replace(["10","11","12","13","14","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$APPS = str_replace(["10","11","12","13","14","1","2","3","4","5","6","7","8","9"],["Viber","Snapchat","Netflix","Haraj","Other","Whatsapp","Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo"],$add);
if($con == 1) { $continent     = $ONE;  }
if($con == 2) { $continent     = $TOW;  }
if($con == 3) { $continent     = $THREE;  }
if($con == 4) { $continent     = $FOUR;  }
if($con == 5) { $continent     = $FIVE;  }
if($con == 6) { $continent     = $SIX;  }
if($con == 7) { $continent     = $SEVEN;  }
if($con == 8) { $continent     = $EIGHT;  }
if($continent == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - *يرجى إختيار التطبيق* الذي تريد *شراء رقم وهمي* لتفعيله 🎥

🔺 - يمكنك إختيار *السيرفر العام* ☑️ ، يمكن ل هذا السيرفر شراء رقم يستقبل الكود لكل البرامج المتورفرة لديك *وبسعر واحد ومميز* 👾
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⁞ واتسأب 💬','callback_data'=>"Kn-2"],['text'=>'⁞ تيليجرام 📢','callback_data'=>"Kn-3"]],
[['text'=>'⁞ إنستقرام 🎥','callback_data'=>"Kn-5"],['text'=>'⁞ فيسبوك🏆','callback_data'=>"Kn-4"]],
[['text'=>'⁞ تويتر 🚀','callback_data'=>"Kn-6"],['text'=>'⁞ تيكتوك 🎬','callback_data'=>"Kn-7"]],
[['text'=>'⁞ قوقل 🌐','callback_data'=>"Kn-8"],['text'=>'⁞ سناب 🐬','callback_data'=>"Kn-11"]],
[['text'=>'⁞ حراج 🛍','callback_data'=>"Kn-13"],['text'=>'⁞ إيمو 🐦','callback_data'=>"Kn-9"]],
[['text'=>'⁞ السيرفر العام ☑️','callback_data'=>"Kn-14"]],
[['text'=>'⁞ السيرفر الملكي 👑','callback_data'=>"saavmotamy"]],
[['text'=>'⁞ سيرفرات الشراء العشوائي ♻️.','callback_data'=>"worldwide"]],
]
])
]);
unlink("data/id/$id/step.txt");
}else{
if($con >= 8){
$u = $con-1;
}elseif($con >= 1){
$o = $con+1;
$u = $con-1;
}
if($con == 1){
$t = "التالي. ⬅️";
$s = null;
$v = "الأخير. 🔀";
}elseif($con == 2 or $con == 3 or $con == 4 or $con == 5 or $con == 6 or $con == 7){
$t = "التالي. ⬅️";
$s = "➡️ السابق.";
$v = null;
$n = null;
}elseif($con == 8){
$t = null;
$s = "➡️ السابق.";
$n = "الأول. ⏭";
}
$i = 0;
$e = 0;
$key     = [];
foreach($continent as $country=>$val){
$co = $val;
$name      = $country;
$e++;
$key['inline_keyboard'][$i][]  =   ["text"=>$name,"callback_data"=>"Ms-$add-$co-$con"];
if($e%2 == 0) $i++;
}
$key['inline_keyboard'][0] = [['text'=>'- البحث عن الدول ( للإختصار ) 🔎','callback_data'=>"research-$add"]];
$key['inline_keyboard'][] = [['text'=>"$t",'callback_data'=>"Kn-$add-$o"],['text'=>"$s",'callback_data'=>"Kn-$add-$u"],['text'=>"$v",'callback_data'=>"Kn-$add-8"],['text'=>"$n",'callback_data'=>"Kn-$add-1"]];
$key['inline_keyboard'][] = [['text'=>'- رجوع.','callback_data'=>"Buynum"]];
$keyboad      = json_encode($key);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- التطبيق: $APP

🏋‍♂ - يرجى إختيار الدولة التي تريد شراء رقم لها من الأسفل, أيضا يمكنك البحث عليها بسرعة بالضغط على زر البحث*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>($keyboad),
]);
unlink("data/id/$id/step.txt");
}
}
#=========={عرض سيرفرات الدول}==========#
if($exdata[0] == "Ms"){
$add=$exdata[1];
$co=$exdata[2];
$con=$exdata[3];
if($con==null){
$con=1;
}
$APP = str_replace(["10","11","12","13","14","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$APPS = str_replace(["10","11","12","13","14","1","2","3","4","5","6","7","8","9"],["Viber","Snapchat","Netflix","Haraj","Other","Whatsapp","Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo"],$add);
$name = $_co['country'][$co];
$codee = $_cod['code'][$co];
if($codee == null){
$codee = "??";
}else{
$codee = "+$codee";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- يتم تجميع السيرفرات تلقائياً....*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع.','callback_data'=>":"]]
]
])
]);
$key     = [];
$key['inline_keyboard'][] = [['text'=>'- السيرفر 🎛','callback_data'=>'no'],['text'=>'- السعر 💰','callback_data'=>'no']];
foreach($buy['number'] as $zero=>$num){
if($num['add'] == $add and $num['country'] == $co){
$price=$num['price'];
$app = $num['app'];
$country = $num['country'];
$operator = $num['operator'];
$name = $_co['country'][$co];
$code = "$country$app$operator$add";
$key['inline_keyboard'][] = [['text'=>"$APP $operator 🕹",'callback_data'=>"Xi-$code"],['text'=>"$price ₽ ☑️",'callback_data'=>"Xi-$code"]];
}
}
$key['inline_keyboard'][] = [['text'=>'- رجوع.','callback_data'=>"Kn-$add"]];
$keyboad      = json_encode($key);
if($country == null){
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"
⚠️ - لم يتم إضافة سيرفرات لتطبيق $APP في الوقت الحالي.
",
'show_alert'=>true
]);
if($con == 1) { $continent     = $ONE;  }
if($con == 2) { $continent     = $TOW;  }
if($con == 3) { $continent     = $THREE;  }
if($con == 4) { $continent     = $FOUR;  }
if($con == 5) { $continent     = $FIVE;  }
if($con == 6) { $continent     = $SIX;  }
if($con == 7) { $continent     = $SEVEN;  }
if($con == 8) { $continent     = $EIGHT;  }
if($continent == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - *يرجى إختيار التطبيق* الذي تريد *شراء رقم وهمي* لتفعيله 🎥

🔺 - يمكنك إختيار *السيرفر العام* ☑️ ، يمكن ل هذا السيرفر شراء رقم يستقبل الكود لكل البرامج المتورفرة لديك *وبسعر واحد ومميز* 👾
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⁞ واتسأب 💬','callback_data'=>"Kn-2"],['text'=>'⁞ تيليجرام 📢','callback_data'=>"Kn-3"]],
[['text'=>'⁞ إنستقرام 🎥','callback_data'=>"Kn-5"],['text'=>'⁞ فيسبوك🏆','callback_data'=>"Kn-4"]],
[['text'=>'⁞ تويتر 🚀','callback_data'=>"Kn-6"],['text'=>'⁞ تيكتوك 🎬','callback_data'=>"Kn-7"]],
[['text'=>'⁞ قوقل 🌐','callback_data'=>"Kn-8"],['text'=>'⁞ سناب 🐬','callback_data'=>"Kn-11"]],
[['text'=>'⁞ حراج 🛍','callback_data'=>"Kn-13"],['text'=>'⁞ إيمو 🐦','callback_data'=>"Kn-9"]],
[['text'=>'⁞ السيرفر العام ☑️','callback_data'=>"Kn-14"]],
[['text'=>'⁞ السيرفر الملكي 👑','callback_data'=>"saavmotamy"]],
[['text'=>'⁞ سيرفرات الشراء العشوائي ♻️.','callback_data'=>"worldwide"]],
]
])
]);
unlink("data/id/$id/step.txt");
}else{
if($con >= 8){
$u = $con-1;
}elseif($con >= 1){
$o = $con+1;
$u = $con-1;
}
if($con == 1){
$t = "التالي. ⬅️";
$s = null;
$v = "الأخير. 🔀";
}elseif($con == 2 or $con == 3 or $con == 4 or $con == 5 or $con == 6 or $con == 7){
$t = "التالي. ⬅️";
$s = "➡️ السابق.";
$v = null;
$n = null;
}elseif($con == 8){
$t = null;
$s = "➡️ السابق.";
$n = "الأول. ⏭";
}
$i = 0;
$e = 0;
$key     = [];
foreach($continent as $country=>$val){
$co = $val;
$name      = $country;
$e++;
$key['inline_keyboard'][$i][]  =   ["text"=>$name,"callback_data"=>"Ms-$add-$co-$con"];
if($e%2 == 0) $i++;
}
$key['inline_keyboard'][0] = [['text'=>'- البحث عن الدول ( للإختصار ) 🔎','callback_data'=>"research-$add"]];
$key['inline_keyboard'][] = [['text'=>"$t",'callback_data'=>"Kn-$add-$o"],['text'=>"$s",'callback_data'=>"Kn-$add-$u"],['text'=>"$v",'callback_data'=>"Kn-$add-8"],['text'=>"$n",'callback_data'=>"Kn-$add-1"]];
$key['inline_keyboard'][] = [['text'=>'- رجوع.','callback_data'=>"Buynum"]];
$keyboad      = json_encode($key);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- التطبيق: $APP

🏋‍♂ - يرجى إختيار الدولة التي تريد شراء رقم لها من الأسفل, أيضا يمكنك البحث عليها بسرعة بالضغط على زر البحث*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>($keyboad),
]);
}
unlink("data/id/$id/step.txt");
exit;
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - قمت بإختيار الدولة : *( $name )*
☑️ - التطبيق المختار : *( $APP )*
☑️ - نداء الدولة : *( $codee )*

🎛 *- إختر السيرفر المراد الشراء منه، لكل سيرفر سعر خاص وتوريده الخاص*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>($keyboad),
]);
unlink("data/id/$id/step.txt");
exit;
}
#=========={قسم العروض}==========#
if($data == "Wo"){
$wrod = file_get_contents("data/txt/wrod.txt");
if($wrod != null){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"$wrod",
'show_alert'=>true
]);
unlink("data/id/$id/step.txt");
}else{
$key     = [];
$a=0;//keyboard
$b=0;//count
foreach($buy['number'] as $zero=>$num){
if($num['add'] == 1){
$price=$num['price'];
$add=$num['add'];
$app = $num['app'];
$country = $num['country'];
$operator = $num['operator'];
$name = $_co['country'][$country];
$code = "$country$app$operator$add";
$b++;
if($b%2!=0){
$key[inline_keyboard][$a][]=[text=>"$name ¦ ₽ $price",callback_data=>"Xi-$code"];
}else{
$a++;//لنزول سطر
$key[inline_keyboard][$a][]=[text=>"$name ¦ ₽ $price",callback_data=>"Xi-$code"];
}
}
}
$key['inline_keyboard'][] = [['text'=>'- رجوع.','callback_data'=>"back"]];
$keyboad      = json_encode($key);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- قسم العروض المتوفرة في البوت.

✅ - قم ب الضغط على الدولة لشرائها.* 🔰
",
'parse_mode'=>"MarkDown",
'reply_markup'=>($keyboad),
]);
unlink("data/id/$id/step.txt");
exit;
}
}
#=========={سيرفر المُـمـيز}==========#
if($data == "saavmotamy"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
🐻* ـ مرحباً عزيزي العميل* ،

هذا القسم مخصّص فقط *للواتساب ، والتيليجرام* ،  يرجى إختيار أحد السيرفرات في الأسفل ، *كل سيرفر يحتوي على عدة دول ذات سعر رخيص جداً* ✅.
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🐬 - سيرفر واتسأب المُـمـيز ⭐️.','callback_data'=>"Cw-31"]],
[['text'=>'🍂 - سيرفر تيليجرام المُـمـيز ⭐️.','callback_data'=>"Cw-36"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]],
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}
#=========={سيرفرات المميز}==========#
if($exdata[0] == "Cw"){
$add=$exdata[1];
$APP = str_replace(["31","36"],["واتسأب","تيليجرام"],$add);
$a=0;//keyboard
$b=0;//count
foreach($buy['number'] as $zero=>$num){
if($num['add'] == $add){
$price=$num['price'];
$app = $num['app'];
$country = $num['country'];
$operator = $num['operator'];
$name = $_co['country'][$country];
$code = "$country$app$operator$add";
$b++;
if($b%2!=0){
$key[inline_keyboard][$a][]=[text=>"$name ¦ ₽ $price",callback_data=>"Xi-$code"];
}else{
$a++;//لنزول سطر
$key[inline_keyboard][$a][]=[text=>"$name ¦ ₽ $price",callback_data=>"Xi-$code"];
}
}
}
if($country == null){
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"
- عذرا عزيزي لم نقم ب إضافة سيرفرات ل $APP المُـمـيز إلى الآن. ⚠️
",
'show_alert'=>true
]);
unlink("data/id/$id/step.txt");
exit;
}
$key['inline_keyboard'][] = [['text'=>'- رجوع.','callback_data'=>"saavmotamy"]];
$keyboad      = json_encode($key);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
💨 - حسناً عزيزي لقد اخترت *(سيرفر $APP المُـمـيز)*

💥 ـ هذا القسم مخصّص فقط *لل$APP* ،  يرجى إختيار أحد الدول في الأسفل ، *هذه الدول تم اختيارها من افضل الموردين لدينا* حيث ان جميع ارقامها عند طلب الكود لاتطلب  *( لايمكن التحقق من رقمك الرجاء المحاوله بعد ساعة )*  وبأسعار *رخيصه* جداً ☑️.
",
'parse_mode'=>"MarkDown",
'reply_markup'=>($keyboad),
]);
unlink("data/id/$id/step.txt");
exit;
}
#=========={قسم العشوائي}==========#
if($data == "worldwide"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- هنا قائمة السيرفرات العشوائية* 🌐.

*- إضغط على احد السيرفرات بالأسفل* للشراء من دولة عشوائية💰.
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'♻️ سيرفر [ WhatsApp ] عشوائي بسعر 10 روبل 💰','callback_data'=>"Wi-21"]],
[['text'=>'♻️ سيرفر [ WhatsApp ] عشوائي بسعر 16 روبل 💰','callback_data'=>"Wi-22"]],
[['text'=>'♻️ سيرفر [ Telegram ] عشوائي بسعر 15 روبل 💰','callback_data'=>"Wi-26"]],
[['text'=>'♻️ سيرفر [ Telegram ] عشوائي بسعر 16 روبل 💰','callback_data'=>"Wi-27"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}
#=========={البحث عن الدول}==========#
if($exdata[0] == "research"){
$add=$exdata[1];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ - يمكنك *البحث عن الدول* من هنا .

🔍 - للبحث *ارسل النداء او الرمز الخاص بالدولة.*

⬅️ - مثال: *967 - 966 - 965 - 1 -213* وهكذا ...

*⚠️ - ملاحظات:
⚠️ - كندا ندائها 1000 بينما أمريكا ندائها 1.
⚠️ - روسيا ندائها 7 بينما كازخستان ندائها 77.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع.','callback_data'=>"Kn-$add"]]
]
])
]);
file_put_contents("data/id/$id/step.txt","res|$add");
}
if($text != '/start' and $text != null and $exstep[0] == 'res'){
$code = str_replace('+','',$text);
$co = $_co['code'][$code];
$add = $exstep[1];
$APP = str_replace(["10","11","12","13","14","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$name = $_co['country'][$co];
if($co != null){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ *نتيجة البحث: $APP ♻️
☑️ الدولة: •".$name."• رمز الدولة: •+".$code."•*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$name",'callback_data'=>"Ms-$add-$co"]],
[['text'=>'- رجوع.','callback_data'=>"Kn-$add"]]
]
])
]);
unlink("data/id/$id/step.txt");
}else{
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*❌ لايوجد دولة بهذا النداء مسجل في البوت*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع.','callback_data'=>"Kn-$add"]]
]
])
]);
}
}
#=========={الأرقام الجاهزة}==========#
if($text == '/start ONE'){
if($EM == null or $EMILS['emils'][$EM]['emil'] == null or $passewo != $perrewo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
♐️ - مرحبا بك [$first](tg://user?id=$id) ؛ 🤍

*- في بوت الممكس* ؛ البوت الأفضل على التليجرام والذي يقوم بتوفير *خدمات الأرقام الوهمية* ل مواقع السوشيال ميديا مثل *التيليجرام والواتساب والتويتر وغيره* 👾

*- قم بإنشاء حساب جديد* ؛ واذا كان لديك حساب من قبل: قم بالضغط على زر *تسجيل الدخول* ☑️
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لديكَ حساب؟ تسجيل دخول 🗣','callback_data'=>"login"]],
[['text'=>'إنشاء حساب جديد ☑️','callback_data'=>"sign_in"]],
[['text'=>'شروط الإستخدام وإخلاء للمسؤلية 🚨','callback_data'=>"to_explain"]],
[["text"=>'إدارة البوت 👨🏻‍💻',"url"=>"tg://user?id=$sudo"]],
[['text'=>'هام للأعضاء الجُدد ⚠️','callback_data'=>"Important"]],
[['text'=>'إحصائيات المستخدمين 📈','callback_data'=>'statsbot2']]
]
])
]);
unlink("data/id/$id/step.txt");
}elseif(count($storenumber['ready']) >= 1){
$keyboard = [];
$keyboad['inline_keyboard'][] = [['text'=>'- الرقم ↘️','callback_data'=>'no'],['text'=>'- السعر 💰','callback_data'=>'no'],['text'=>'- الدولة ☑️','callback_data'=>'no']];
foreach($storenumber['ready'] as $zero=>$name){
$now = $name['now'];
$country = $name['country'];
$price=$name['price'];
$number = $name['number'];
$numbery = substr($number, 0,+7)."•••";
$keyboad['inline_keyboard'][] = [['text'=>"$numbery",'callback_data'=>"Noyesnum#$zero"],['text'=>"$price ₽ ☑️",'callback_data'=>"Noyesnum#$zero"],['text'=>"$country",'callback_data'=>"Noyesnum#$zero"]];
}
$keyboad['inline_keyboard'][] = [['text'=>'- تحديث 🔂',"callback_data"=>"ready"],['text'=>'- رجوع.',"callback_data"=>"back"]];
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
☑️ *- هذا هي قائمة الأرقام الجاهزة المتوفرة في البوت
🗄 - إضغط على الدولة للشراء* ♻️
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode($keyboad),
'reply_to_message_id'=>$message_id,
]);
unlink("data/id/$id/step.txt");
}else{
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️ *- لاتوجود أرقام جاهزة حاليا*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع.','callback_data'=>'back']]
]
])
]);
unlink("data/id/$id/step.txt");
}
}
if($data == 'ready'){
if(count($storenumber['ready']) >= 1){
$keyboard = [];
$keyboad['inline_keyboard'][] = [['text'=>'- الرقم ↘️','callback_data'=>'no'],['text'=>'- السعر 💰','callback_data'=>'no'],['text'=>'- الدولة ☑️','callback_data'=>'no']];
foreach($storenumber['ready'] as $zero=>$name){
$now = $name['now'];
$country = $name['country'];
$price=$name['price'];
$number = $name['number'];
$numbery = substr($number, 0,+7)."•••";
$keyboad['inline_keyboard'][] = [['text'=>"$numbery",'callback_data'=>"Noyesnum#$zero"],['text'=>"$price ₽ ☑️",'callback_data'=>"Noyesnum#$zero"],['text'=>"$country",'callback_data'=>"Noyesnum#$zero"]];
}
$keyboad['inline_keyboard'][] = [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"ready"],['text'=>'- رجوع.',"callback_data"=>"back"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- هذا هي قائمة الأرقام الجاهزة المتوفرة في البوت
🗄 - إضغط على الدولة للشراء* ♻️
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode($keyboad),
]);
unlink("data/id/$id/step.txt");
}else{
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"
⚠️ - لاتوجود أرقام جاهزة حاليا
",
'show_alert'=>false,
]);
unlink("data/id/$id/step.txt");
}
}
#=========={القبول والرفض}==========#
if($ex_data[0] == "Noyesnum"){
$zero = $ex_data[1];
$number = $storenumber['ready'][$zero]['number'];
$price = $storenumber['ready'][$zero]['price'];
$name = $storenumber['ready'][$zero]['country'];
if($number == null){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"
⚠️ - عذرا هذا الرقم لم يعد متاحا
",
'show_alert'=>felse,
]);
unlink("data/id/$id/step.txt");
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ أنت الان تقوم بشراء رقم جاهز من البوت.
⚠️ ملاحضة : 
1⃣ > *لا نتحمل مسؤلية حضر الرقم من واتساب بسبب إهمالك*
2⃣ > *لا نتحمل مسؤلية تخريب الكود بمخالفة التعليمات*
3⃣ > *بعد شراء الرقم لاتستطيع ان تقوم بإلغاء الشراء أو التراجع*

📮 > هل تريد شراء دولة -> *$name* بسعر -> *₽ $price* ⬇️
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'موافق ☑️','callback_data'=>"readdd#$zero"]],
[['text'=>'- رجوع.','callback_data'=>"ready"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}
}
#=========={شراء رقم جاهز}==========#
if($ex_data[0] == "readdd"){
$zero = $ex_data[1];
$number = $storenumber['ready'][$zero]['number'];
$code = $storenumber['ready'][$zero]['code'];
$price = $storenumber['ready'][$zero]['price'];
$name = $storenumber['ready'][$zero]['country'];
$now = $storenumber['ready'][$zero]['now'];
$what = $storenumber['ready'][$zero]['what'];
$idSend=$orderall;
$BALANCE = $Balance - $price;
if($number == null){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"
⚠️ - عذرا هذا الرقم لم يعد متاحا
",
'show_alert'=>felse,
]);
unlink("data/id/$id/step.txt");
}else{
if($user != null){
$link="☑️ - رابط العضو ↖️";
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- تم شراء الرقم بنجاح* 🙂🖤

📞 > الرقم : *$number*
🔥 > الكود : *$code*
♨️ > السعر : *₽ $price*
⚠️ > ملاحضة : *$what*
🅿️ > رقم المعاملة : *$idnums*

☑️ *- تم حذف الرقم* من قائمة الأرقام الجاهزة
🗃 *- تم حفظ الرقم* في سجلك للأرقام 🤙
✅ - تم خصم *₽ $price* من نقودك *( $Balance )* 💰
💸 واصبح رصيدك الان: *₽ $BALANCE* ♻️
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع.','callback_data'=>"back"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$PAY,
'text'=>"
⚜ تم بيع رقم جاهز:

☎️ - الرقم: *$number*
🚸 - الكود: *$code*
🧩 - الدولة: *$name*
🎟 - الرصيد: *$BALANCE*
🏋 - الايدي: *$idnums*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🔎 - رقم العمل: *$idSend*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]],
[['text'=>"تسجيل الدخول.",'callback_data'=>"emilead-$EM"]]
]
])
]);
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][name] = $name;
$BUYSNUM[number][$ordermy][app] = "Whatsapp";
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][code] = $code;
$BUYSNUM[number][$ordermy][status] = 2;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][type] = "ready";
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
$BUYSNUM[ready_my] += 1;
NumbBuys($BUYSNUM,$EM);
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 2;
$ORDERALL[ready] +=1;
$ORDERALL[ruble] +=$price;
OrdAll($ORDERALL);
$points = file_get_contents("EMILS/$EM/points.txt");
$as = $points - $price;
file_put_contents("EMILS/$EM/points.txt",$as);
unset($storenumber['ready'][$zero]);
Ready($storenumber);
unlink("data/id/$id/step.txt");
exit;
}
}
#=========={Pay_am}==========#
if($exdata[0] == "Pay_am"){
$EEM = $exdata[1];
$price = $exdata[2];
$Balancc = file_get_contents("EMILS/$EEM/points.txt");
$BALANCE = $Balancc + $price;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🌐 - الايميل: *$EEM*
✅ - تم بنجاح إرجاع *$price روبل*
💰 - رصيده الان : *$Balancc روبل*
💸 - رصيده بعد الإرجاع : *$BALANCE روبل*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
$points = file_get_contents("EMILS/$EEM/points.txt");
$as = $points + $price;
file_put_contents("EMILS/$EEM/points.txt",$as);
}
#=========={تسجيل الدخول}==========#
if($exdata[0] == "emilead"){
$emile = $exdata[1];
$pase = $EMILS['emils'][$emile]['pass'];
if($EMILS['emils'][$emile]['emil'] == null){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"
☑️ - عذرا هذا الحساب قد تم حذفة من البوت بشكل كامل ⚠️
",
'show_alert'=>true
]);
unlink("data/id/$id/step.txt");
}else{
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"
✅ - تم بنجاح تسجل الدخول للحساب إذهب إلى البوت لرؤية الحساب
",
'show_alert'=>true
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
⚠️ - تم تسجيل دخولك إلى الحساب *$emile*
",
'parse_mode'=>"MarkDown",
]);
$EMILNow['emil'][$sudo] = $emile;
$EMILNow['password'][$sudo] = $pase;
Now($EMILNow);
unlink("data/id/$id/step.txt");
}
}
#=========={الشراء العشوائي}==========#
if($exdata[0] == "Wi"){
$add = $exdata[1];
$price=str_replace(["21","22","23","24","25","26","27","28","29","30"],["10","16","0","0","0","15","16","0","0","0"],$add);
if($price > $Balance or $Balance < $price or $Balance == 0 or $Balance === 0 or $Balance < 0){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"
☑️ *- لايوجد لديك رصيد كافي لشراء هذا الرقم
💸 - رصيدك المتوفر في حسابك >> ₽ $Balance*
",
'show_alert'=>true
]);
unlink("data/id/$id/step.txt");
exit;
}
$idSend=$orderall;
$ads = $random[$nums]['add'];
if($ads <= 1){
exit;
}
$ads=$ads-1;
if(time() - $BUYSNUM[number][$Detector][times] <= 2){
unlink("data/id/$id/step.txt");
exit;
}
for($i=1; $i<26;$i++){
$rand=rand(0,$ads);
$zero = $random[$add]['zero'][$rand];
$price=$buy['number'][$zero][price];
$country = $buy['number'][$zero][country];
$operator = $buy['number'][$zero][operator];
$app = $buy['number'][$zero][app];
$site = $buy['number'][$zero][site];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["21","26"],["عشوائي واتسأب","عشوائي تيليجرام"],$add);
$server = str_replace(["21","26"],["Whatsapp","Telegram"],$add);
$APP_S = str_replace(["Whatsapp","Telegram"],["الواتسأب","التيليجرام"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
if($app == "wa"){
$wa = "☑️ - رؤية حالة الرقم في واتسأب. ↖️";
}elseif($app == "tg"){
$tg = "☑️ - رؤية حالة الرقم في تيليجرام. ↖️";
}
if($addblusdel[$site]['add'] == "ok"){
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum&site=$site&country=$country&app=$app&operator=$operator"),1);
}
if($site=="2ndline"){
$num2nd = $api[num2nd];
}
$status = $api[status];
$number = $api[number];
$idnumber = $api[idnumber];
$time = $api[time];
$Location = $api[Location];
#__________Time
$z=$time/60;
$ex1 = explode(".", $z);
$z="0.$ex1[1]";
$z=$z*60;
$ex2 = explode(".", $z);
$n = mb_strlen("$ex2[0]");
if($n > 1){
$start_time="$ex1[0]:$ex2[0]";
}else{
$start_time="$ex1[0]:0$ex2[0]";
}
if($ex1[0] == null){
$k="ثانية";
}else{
$k="دقيقة";
}
#__________Time
if($status != "200" or $status_zero == null){
if($i==25){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- القسم الذي طلبته غير متوفر مؤقتًا ، يرجى المحاولة مرة أخرى وقد يضمن جلب الدولة عشوائياً*
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- محاولة مرة أخرى. 🔄','callback_data'=>"Wi-$add"]],
[['text'=>'- رجوع 🔜','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- جاري جلب الرقم لك الآن، يرجى الإنتظار ...* ☑️
",
'parse_mode'=>"MarkDown",
]);
unlink("data/id/$id/step.txt");
}else{
if($site == "2ndline"){
if($num2nd == null){
for($ii=0; $ii<10;$ii++){
sleep(1);
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum2nd&site=$site&country=$country&id=$idds"),1);
$status = $api[status];
$num2nd = $api[num2nd];
$number = $api[number];
$idnumber = $api[idnumber];
$Location = $api[Location];
$see = str_replace(["0","1","2","3","4","5","6","7","8","9"],["••","•••","••••","••","•••","••••","••","•••","••••"],$ii);
if($num2nd == null and $ii==10){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- عذرا عزيزي ليس متوفر حاليا هذه الدولة.
💠 - قم بتحربة أي سيرفر آخر.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع 🔜','callback_data'=>"Buynum"]]
]
])
]);
exit;
}elseif($num2nd == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- جاري تحضير الرقم يرجى الإنتظار ثواني فقط $see*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع 🔜','callback_data'=>"::"]]
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
💨 - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
}
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
💨 - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
}
}
#=========={Buy Site All2}==========#
if($exdata[0] == "Ii"){
$zero = $exdata[1];
$order = $exdata[2];
$zero = md5($zero);
$numbers=$BUYSNUM[number][$order][phone];
$price=$buy['number'][$zero][price];
$country = $buy['number'][$zero][country];
$add = $buy['number'][$zero][add];
$operator = $buy['number'][$zero][operator];
$app = $buy['number'][$zero][app];
$site = $buy['number'][$zero][site];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
$idSend=$orderall;
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب المميز","تيليجرام المميز","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
if($app == "wa"){
$wa = "☑️ - رؤية حالة الرقم في واتسأب. ↖️";
}elseif($app == "tg"){
$tg = "☑️ - رؤية حالة الرقم في تيليجرام. ↖️";
}
if(time() - $BUYSNUM[number][$Detector][times] <= 2){
unlink("data/id/$id/step.txt");
exit;
}
if($addblusdel[$site]['add'] == "ok" and $order == null){
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum&site=$site&country=$country&app=$app&operator=$operator"),1);
}elseif($addblusdel[$site]['add'] == "ok" and $order != null){
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum5sim&site=$site&country=$country&app=$app&number=$numbers"),1);
}
if($site=="2ndline"){
$num2nd = $api[num2nd];
}
$status = $api[status];
$number = $api[number];
$idnumber = $api[idnumber];
$time = $api[time];
$Location = $api[Location];
#__________Time
$z=$time/60;
$ex1 = explode(".", $z);
$z="0.$ex1[1]";
$z=$z*60;
$ex2 = explode(".", $z);
$n = mb_strlen("$ex2[0]");
if($n > 1){
$start_time="$ex1[0]:$ex2[0]";
}else{
$start_time="$ex1[0]:0$ex2[0]";
}
if($ex1[0] == null){
$k="ثانية";
}else{
$k="دقيقة";
}
#__________Time
if($status_zero == null){
unlink("data/id/$id/step.txt");
}elseif($status != "200"){
$zero = "$country$app$operator$add";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- يبدوا أن هذا السيرفر لا يوجد به أرقام في الوقت الحالي، جرب سيرفر آخر .

↩️ - قم ب تجربة المحاولة 12 مرات قد تزيد من سرعة جلب الأرقام المعدومة.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- محاولة الشراء 12 مره ♻️','callback_data'=>"Xi-$zero"]],
[['text'=>'- اعادة الشراء ✅','callback_data'=>"$data"]],
[['text'=>'- العوده الى السرفرات 🔁','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}else{
if($site == "2ndline"){
if($num2nd == null){
for($ii=0; $ii<10;$ii++){
sleep(1);
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum2nd&site=$site&country=$country&id=$idds"),1);
$status = $api[status];
$num2nd = $api[num2nd];
$number = $api[number];
$idnumber = $api[idnumber];
$Location = $api[Location];
$see = str_replace(["0","1","2","3","4","5","6","7","8","9"],["••","•••","••••","••","•••","••••","••","•••","••••"],$ii);
if($num2nd == null and $ii==10){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- عذرا عزيزي ليس متوفر حاليا هذه الدولة.
💠 - قم بتحربة أي سيرفر آخر.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع 🔜','callback_data'=>"Buynum"]]
]
])
]);
exit;
}elseif($num2nd == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- جاري تحضير الرقم يرجى الإنتظار ثواني فقط $see*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع 🔜','callback_data'=>"::"]]
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد من البوت*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
💬 - الكود : *لم يصل الى الآن*
♻️ - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
✳️ - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'🔙 - رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
}
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد من البوت*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
💬 - الكود : *لم يصل الى الآن*
♻️ - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
✳️ - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'🔙 - رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
}
#=========={Buy Site All TO}==========#
if($exdata[0] == "Xi"){
$zero = $exdata[1];
$zero = md5($zero);
$price=$buy['number'][$zero][price];
$country = $buy['number'][$zero][country];
$add = $buy['number'][$zero][add];
$operator = $buy['number'][$zero][operator];
$app = $buy['number'][$zero][app];
$site = $buy['number'][$zero][site];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
$idSend=$orderall;
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب المميز","تيليجرام المميز","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
if($app == "wa"){
$wa = "☑️ - رؤية حالة الرقم في واتسأب. ↖️";
}elseif($app == "tg"){
$tg = "☑️ - رؤية حالة الرقم في تيليجرام. ↖️";
}
if(time() - $BUYSNUM[number][$Detector][times] <= 2){
unlink("data/id/$id/step.txt");
exit;
}
if($status_zero == null){
unlink("data/id/$id/step.txt");
}elseif($status != "200"){
for($i=1; $i<21;$i++){
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum&site=$site&country=$country&app=$app&operator=$operator"),1);
$status = $api[status];
if($site=="2ndline"){
$num2nd = $api[num2nd];
}
if($site=="nagm" and $status == "200"){
$site = $api[site];
}
$number = $api[number];
$idnumber = $api[idnumber];
$time = $api[time];
$Location = $api[Location];
#__________Time
$z=$time/60;
$ex1 = explode(".", $z);
$z="0.$ex1[1]";
$z=$z*60;
$ex2 = explode(".", $z);
$n = mb_strlen("$ex2[0]");
if($n > 1){
$start_time="$ex1[0]:$ex2[0]";
}else{
$start_time="$ex1[0]:0$ex2[0]";
}
if($ex1[0] == null){
$k="ثانية";
}else{
$k="دقيقة";
}
#__________Time
if($status != "200"){
if($i==20){
$zero = "$country$app$operator$add";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
⚠️ *- لا يوجد ٲرقام في هذا السيرفر حاليآ..

♻️ - قم بتجربة سيرفر ٲخر او اعد المحاوله* 🌐.
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'✅ - إعادة الشراء.','callback_data'=>"$data"]],
[['text'=>'⬅️ - العودة الى السيرفرات.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}
$see = str_replace(["10","11","12","13","14","15","16","17","18","19","0","1","2","3","4","5","6","7","8","9"],["....",".....","..","...","....",".....","..","...","....",".....","..","...","....",".....","..","...","....",".....","..","..."],$i);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- يتم الان محاولات شراء رقم لك♻️.

🔄 - الرجاء الانتظار$see* ⏳.
",
'parse_mode'=>"MarkDown",
]);
unlink("data/id/$id/step.txt");
}else{
if($site == "2ndline"){
if($num2nd == null){
for($ii=0; $ii<10;$ii++){
sleep(1);
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getNum2nd&site=$site&country=$country&id=$idds"),1);
$status = $api[status];
$num2nd = $api[num2nd];
$number = $api[number];
$idnumber = $api[idnumber];
$Location = $api[Location];
$see = str_replace(["0","1","2","3","4","5","6","7","8","9"],["..","...","....",".....","..","...","....",".....","..","..."],$ii);
if($num2nd == null and $ii==10){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- عذرا عزيزي ليس متوفر حاليا هذه الدولة.
💠 - قم بتحربة أي سيرفر آخر.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع 🔜','callback_data'=>"$back"]]
]
])
]);
exit;
}elseif($num2nd == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- يتم الان محاولات شراء رقم لك♻️.

🔄 - الرجاء الانتظار$see* ⏳.
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع 🔜','callback_data'=>"::"]]
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *- يتم الان محاولات شراء رقم لك♻️.

🔄 - الرجاء الانتظار.....* ⏳.
",
'parse_mode'=>"MarkDown",
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد من البوت*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
💬 - الكود : *لم يصل الى الآن*
♻️ - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
✳️ - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'🔙 - رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
}
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *_ يتم الان محاولة شراء رقم💡.

🧿 - يرجا۽ الانتظار.....* ⏳.
",
'parse_mode'=>"MarkDown",
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد من البوت*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
💬 - الكود : *لم يصل الى الآن*
♻️ - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
✳️ - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
}
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ *_ يتم الان محاولة شراء رقم💡.

🧿 - يرجا۽ الانتظار.....* ⏳.
",
'parse_mode'=>"MarkDown",
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد من البوت*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
💬 - الكود : *لم يصل الى الآن*
♻️ - الحالة : *••• Pending*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت : *$start_time دقيقة*

☑️ *- إضغط على الرقم لنسخة!
✳️ - أدخل الرقم في $APP_S لوصول الكود، ثم أضغط على زر تحديث.*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$wa",'url'=>"wa.me/$number"]],
[['text'=>"$tg",'url'=>"T.me/$number"]],
[['text'=>'🔄 - تغيير رقم آخر.','callback_data'=>"$data"]],
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم شراء رقم لتطبيق $APP:

☎️ - الرقم: *$number*
🧩 - الدولة: *$name*
🎯 - رمز الدولة: *$country*
🎟 - الرصيد: *$Balance*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
file_put_contents("data/id/$id/restriction.txt","$ordermy");
$times=time();
$BUYSNUM[number][$ordermy][idSend] = $idSend;
$BUYSNUM[number][$ordermy][phone] = $number;
$BUYSNUM[number][$ordermy][sms][0][code] = null;
$BUYSNUM[number][$ordermy][status] = 1;
$BUYSNUM[number][$ordermy][operator] = $operator;
$BUYSNUM[number][$ordermy][app] = $app;
$BUYSNUM[number][$ordermy][add] = $add;
$BUYSNUM[number][$ordermy][price] = $price;
$BUYSNUM[number][$ordermy][id] = $idnums;
$BUYSNUM[number][$ordermy][site] = $site;
$BUYSNUM[number][$ordermy][zero] = $zero;
$BUYSNUM[number][$ordermy][country] = $country;
$BUYSNUM[number][$ordermy][idnumber] = $idnumber;
$BUYSNUM[number][$ordermy][type] = "direct";
$BUYSNUM[number][$ordermy][finish] = $time;
$BUYSNUM[number][$ordermy][times] = $times;
$BUYSNUM[number][$ordermy]["chat-id"] = $id;
$BUYSNUM[number][$ordermy][DAY] = $DAY;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][account] = $EM;
$ORDERALL[$idSend][order] = $ordermy;
$ORDERALL[$idSend][status] = 1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
}
}
#=========={Code & AgeCod & ending & Ban}==========#
if($exdata[0] == "Code" or $exdata[0] == "AgeCod" or $exdata[0] == "ending" or $exdata[0] == "Ban"){
$idSend=$exdata[1];
$order=$ORDERALL[$idSend][order];
$account=$ORDERALL[$idSend][account];
$number = $BUYSNUM[number][$order][phone];
$status = $BUYSNUM[number][$order][status];
$operator = $BUYSNUM[number][$order][operator];
$app = $BUYSNUM[number][$order][app];
$add = $BUYSNUM[number][$order][add];
$price = $BUYSNUM[number][$order][price];
$idnum = $BUYSNUM[number][$order][id];
$site = $BUYSNUM[number][$order][site];
$zero = $BUYSNUM[number][$order][zero];
$country = $BUYSNUM[number][$order][country];
$idnumber = $BUYSNUM[number][$order][idnumber];
$finish = $BUYSNUM[number][$order][finish];
$times = $BUYSNUM[number][$order][times];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب الملكي","تيليجرام الملكي","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
$cod = "$country$app$operator$add";
if($add == 21 or $add ==30){
$BUYING="Wi-$add";
}else{
$BUYING="Xi-$cod";
}
if($status_zero == null and $exdata[0] == "Code"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - *يرجى إختيار التطبيق* الذي تريد *شراء رقم وهمي* لتفعيله 🎥

🔺 - يمكنك إختيار *السيرفر العام* ☑️ ، يمكن ل هذا السيرفر شراء رقم يستقبل الكود لكل البرامج المتورفرة لديك *وبسعر واحد ومميز* 👾
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⁞ واتسأب 💬','callback_data'=>"Kn-2"],['text'=>'⁞ تيليجرام 📢','callback_data'=>"Kn-3"]],
[['text'=>'⁞ إنستقرام 🎥','callback_data'=>"Kn-5"],['text'=>'⁞ فيسبوك🏆','callback_data'=>"Kn-4"]],
[['text'=>'⁞ تويتر 🚀','callback_data'=>"Kn-6"],['text'=>'⁞ تيكتوك 🎬','callback_data'=>"Kn-7"]],
[['text'=>'⁞ قوقل 🌐','callback_data'=>"Kn-8"],['text'=>'⁞ سناب 🐬','callback_data'=>"Kn-11"]],
[['text'=>'⁞ حراج 🛍','callback_data'=>"Kn-13"],['text'=>'⁞ إيمو 🐦','callback_data'=>"Kn-9"]],
[['text'=>'⁞ السيرفر العام ☑️','callback_data'=>"Kn-14"]],
[['text'=>'⁞ السيرفر الملكي 👑','callback_data'=>"saavmotamy"]],
[['text'=>'⁞ سيرفرات الشراء العشوائي ♻️.','callback_data'=>"worldwide"]],
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($BUYSNUM[number][$order] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - *يرجى إختيار التطبيق* الذي تريد *شراء رقم وهمي* لتفعيله 🎥

🔺 - يمكنك إختيار *السيرفر العام* ☑️ ، يمكن ل هذا السيرفر شراء رقم يستقبل الكود لكل البرامج المتورفرة لديك *وبسعر واحد ومميز* 👾
",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⁞ واتسأب 💬','callback_data'=>"Kn-2"],['text'=>'⁞ تيليجرام 📢','callback_data'=>"Kn-3"]],
[['text'=>'⁞ إنستقرام 🎥','callback_data'=>"Kn-5"],['text'=>'⁞ فيسبوك🏆','callback_data'=>"Kn-4"]],
[['text'=>'⁞ تويتر 🚀','callback_data'=>"Kn-6"],['text'=>'⁞ تيكتوك 🎬','callback_data'=>"Kn-7"]],
[['text'=>'⁞ قوقل 🌐','callback_data'=>"Kn-8"],['text'=>'⁞ سناب 🐬','callback_data'=>"Kn-11"]],
[['text'=>'⁞ حراج 🛍','callback_data'=>"Kn-13"],['text'=>'⁞ إيمو 🐦','callback_data'=>"Kn-9"]],
[['text'=>'⁞ السيرفر العام ☑️','callback_data'=>"Kn-14"]],
[['text'=>'⁞ السيرفر الملكي 👑','callback_data'=>"saavmotamy"]],
[['text'=>'⁞ سيرفرات الشراء العشوائي ♻️.','callback_data'=>"worldwide"]],
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($account != $EM){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"- هذة العملية ليست بحسابك المستخدم ❌",
'show_alert'=>true,
]);
exit;
}elseif($status == -1){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*☑️ - الرقم: $number
☑️ - الدولة: $name
☑️ - البرنامج: $APP*

☑️ - تم الغاء الرقم من قبل!
📅 - بتاريخ:  *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل؟.",'callback_data'=>"$BUYING"]],
[['text'=>"- رجوع 🔜",'callback_data'=>"$back"]],
[['text'=>'- الصفحة الرئيسية 🔙','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($status == -2 and $exdata[0] != "ending"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*☑️ - الرقم: $number
☑️ - الدولة: $name
☑️ - البرنامج: $APP*

⏰ - الوقت المتبقي : *00:00:00 دقيقة*
⌛️ - إنتهى الوقت *المتاح للرقم من قبل*
📅 - بتاريخ:  *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل؟.",'callback_data'=>"$BUYING"]],
[['text'=>"- رجوع 🔜",'callback_data'=>"$back"]],
[['text'=>'- الصفحة الرئيسية 🔙','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($status == 3){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*☑️ - الرقم: $number
☑️ - الدولة: $name
☑️ - البرنامج: $APP*

✅ - تم إنهاء *الرقم من قبل*
📅 - بتاريخ:  *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل؟.",'callback_data'=>"$BUYING"]],
[['text'=>"- رجوع 🔜",'callback_data'=>"$back"]],
[['text'=>'- الصفحة الرئيسية 🔙','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($status != 1 and $exdata[0] == "Code"){
unlink("data/id/$id/step.txt");
exit;
}elseif($status != 2 and $exdata[0] == "AgeCod"){
unlink("data/id/$id/step.txt");
exit;
}elseif($status != 1 and $exdata[0] == "Ban"){
unlink("data/id/$id/step.txt");
exit;
}
}
#=========={Code Site All}==========#
if($exdata[0] == "Code"){
$idSend=$exdata[1];
$order=$ORDERALL[$idSend][order];
$account=$ORDERALL[$idSend][account];
$number = $BUYSNUM[number][$order][phone];
$status = $BUYSNUM[number][$order][status];
$operator = $BUYSNUM[number][$order][operator];
$app = $BUYSNUM[number][$order][app];
$add = $BUYSNUM[number][$order][add];
$price = $BUYSNUM[number][$order][price];
$idnum = $BUYSNUM[number][$order][id];
$site = $BUYSNUM[number][$order][site];
$zero = $BUYSNUM[number][$order][zero];
$country = $BUYSNUM[number][$order][country];
$idnumber = $BUYSNUM[number][$order][idnumber];
$finish = $BUYSNUM[number][$order][finish];
$times = $BUYSNUM[number][$order][times];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
$BALANCE = $Balance - $price;
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب الملكي","تيليجرام الملكي","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
$MS="➡️ قائمة سيرفرات العروض ✔️";
}elseif($add >= 21 and $add <= 25){
$back = "saavmotamy";
$MS="➡️ قائمة سيرفرات $APP ✔️";
}elseif($add >= 26 and $add <= 30){
$back = "worldwide";
$MS="➡️ قائمة سيرفرات ال$APP ✔️";
}else{
$back = "Ms-$add-$country";
$MS="➡️ قائمة سيرفرات $APP ✔️";
}
$cod = "$country$app$operator$add";
if($add == 21 or $add ==30){
$BUYING="Wi-$add";
}else{
$BUYING="Xi-$cod";
}
#__________Time
$start_time=time() - $times;
$start_time=$finish - $start_time;
$z=$start_time/60;
$ex1 = explode(".", $z);
$z="0.$ex1[1]";
$z=$z*60;
$ex2 = explode(".", $z);
$n = mb_strlen("$ex2[0]");
if($n > 1){
$start_time="$ex1[0]:$ex2[0]";
}else{
$start_time="$ex1[0]:0$ex2[0]";
}
if($ex1[0] == null){
$k="ثانية";
}else{
$k="دقيقة";
}
#__________Time
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getStatus&site=$site&idnumber=$idnumber&number=$number&app=$app&add=0"),1);
$status = $api[status];
$code = $api[code];
$agen = $api[agen];
$Location = $api[Location];
if($agen == "200"){
$agen = "- طلب الكود مرة أخرى🔂";
}else{
$agen = null;
}
if($price > $Balance or $Balance < $price or $Balance == 0 or $Balance === 0 or $Balance < 0){
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null and $status == 2 and time() - $times < $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *$code*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>"$agen",'callback_data'=>"AgeCod-$idSend-1"]],
[['text'=>'🔙 - رجوع.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null and $status == 2 and time() - $times >= $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Timeout*
💬 - الكود : *$code*

✅ - قد تم وصول *الكود من قبل*🤧🖤
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code == null and time() - $times < $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"- لم يصل الكود بعد، حاول بعد 10 ثواني 💬",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Processing*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*
⏰ - الوقت المتبقي : *$start_time $k*

💬 - الكود : *حاول مرة أخرى كل 5 ثواني حتى يصل إليك الكود*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'♻️ - تحديث','callback_data'=>"Code-$idSend"]],
[['text'=>'⚠️ - الغاء الرقم.','callback_data'=>"Ban-$idSend"]],
[['text'=>'🔙 - رجوع.','callback_data'=>"Ban-$idSend"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code == null and time() - $times >= $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Timeout*

⏰ - الوقت المتبقي : *00:00:00 دقيقة*
⌛️ - إنتهى الوقت *المتاح للرقم*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$back"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم إنتهاء وقت الرقم المتاح للبوت:

☎️ - الرقم : *$number*
🧩 - الدولة : *$name*
🎯 - رمز الدولة : *$country*
🎬 - التطبيق : *$APP*
🎟 - الرصيد : *$Balance*
🏋 - الايدي : *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع : *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
$BUYSNUM[number][$order][status] = -2;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = -2;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}else{
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"☑️ - تم وصول الكود بنجاح! رصيدك: ₽ $BALANCE",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *تم إسال الكود في الأسفل 🙂*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>"$agen",'callback_data'=>"AgeCod-$idSend-1"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ 𝗡𝗨𝗺𝗕𝗘𝗥 : `$number`
💬 𝗖𝗢𝗗𝗘 : `$code`

☑️ - إضغط على الكود او الرقم للنسخ 🙂🖤𖠛
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
$hnum=substr($number, 0,-4)."••••";
$nid=substr($id, 0,-3)."•••";
bot('SendMessage',[
'chat_id'=>-1002634359026,
'text'=>"
☑️ *- تم شراء رقم من البوت بنجاح* 📢
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
🌐 *- السيرفر : $APP*
♻️ *- الدولة : $name*
✅ *- تطبيق : $APP_S*
☎️ *- الرقم : $hnum*
💰 *- السعر : ₽ $price*
🆔 *- العميل : $nid*
*📥 - رسالة الكود : [ $code ]* ➕
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*📆 -  $DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ - شراء رقم من البوت 🤖",'url'=>"t.me/$me"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$PAY,
'text'=>"
⚜ تم وصول كود الرقم:

☎️ - الرقم : *$number*
🚸 - الكود : *$code*
🧩 - الدولة : *$name*
🎯 - رمز الدولة : *$country*
🎬 - التطبيق : *$APP*
🎟 - الرصيد: *$BALANCE*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🔎 - رقم العمل: *$idSend*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]],
[['text'=>"تسجيل الدخول.",'callback_data'=>"emilead-$EM"]],
[['text'=>'دفع المبلغ.','callback_data'=>"Pay_am-$EM-$price"]]
]
])
]);
$BUYSNUM[number][$order][sms][0][code] = "$code";
$BUYSNUM[number][$order][status] = 2;
$BUYSNUM[number_my] += 1;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = 2;
$ORDERALL[number] +=1;
$ORDERALL[ruble] +=$price;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
$points = file_get_contents("EMILS/$EM/points.txt");
$as = $points - $price;
file_put_contents("EMILS/$EM/points.txt",$as);
unlink("data/id/$id/restriction.txt");
unlink("data/id/$id/step.txt");
}
}
#=========={Code Site All_2}==========#
if($exdata[0] == "AgeCod"){
$idSend = $exdata[1];
$smsnum = $exdata[2];
$allsms = $smsnum+1;
$addnumber = str_replace(["1","2","3","4","5","6","7","8","9"],["1⃣","2⃣","3⃣","4⃣","5⃣","6⃣","7⃣","8⃣","9⃣"],$allsms);
$order=$ORDERALL[$idSend][order];
$account=$ORDERALL[$idSend][account];
$number = $BUYSNUM[number][$order][phone];
$status = $BUYSNUM[number][$order][status];
$operator = $BUYSNUM[number][$order][operator];
$app = $BUYSNUM[number][$order][app];
$add = $BUYSNUM[number][$order][add];
$price = $BUYSNUM[number][$order][price];
$idnum = $BUYSNUM[number][$order][id];
$site = $BUYSNUM[number][$order][site];
$zero = $BUYSNUM[number][$order][zero];
$country = $BUYSNUM[number][$order][country];
$idnumber = $BUYSNUM[number][$order][idnumber];
$finish = $BUYSNUM[number][$order][finish];
$times = $BUYSNUM[number][$order][times];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب الملكي","تيليجرام الملكي","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
$cod = "$country$app$operator$add";
if($add == 21 or $add ==30){
$BUYING="Wi-$add";
}else{
$BUYING="Xi-$cod";
}
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getStatus2&site=$site&idnumber=$idnumber&smsnum=$smsnum&allsms=$allsms"),1);
$status = $api[status];
$code = $api[code];
$agen = $api[agen];
$Location = $api[Location];
if($agen == "200"){
$agen = "- طلب الكود مرة أخرى 🔂";
}
if($code == null and time() - $times < $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"- لم يصل كود جديد بعد... 🔄",
'show_alert'=>false,
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code == null and time() - $times >= $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Timeout*

⏰ - الوقت المتبقي : *00:00:00 دقيقة*
⌛️ - إنتهى الوقت *المتاح للرقم*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$back"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($BUYSNUM[number][$order][sms][$smsnum] != null and time() - $times >= $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"☑️ - تم إرسال الكود الجديد من قبل...",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *$code* $addnumber
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود الجديد بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($BUYSNUM[number][$order][sms][$smsnum] != null and time() - $times < $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"☑️ - تم إرسال الكود الجديد من قبل...",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *$code* $addnumber
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود الجديد بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>"$agen",'callback_data'=>"AgeCod-$idSend-$allsms"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null and time() - $times >= $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"☑️ - تم وصول الكود الجديد $code",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *تم إسال الكود في الأسفل 🙂*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود الجديد بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ 𝗡𝗨𝗺𝗕𝗘𝗥 : `$number`
💬 𝗖𝗢𝗗𝗘 : `$code` $addnumber

☑️ - إضغط على الكود او الرقم للنسخ 🙂🖤𖠛
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
$hnum=substr($number, 0,-4)."••••";
$nid=substr($id, 0,-3)."•••";
bot('SendMessage',[
'chat_id'=>-1002019872754,
'text'=>"
☑️ *- تم شراء رقم من البوت بنجاح* 📢
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
🌐 *- السيرفر : $APP*
♻️ *- الدولة : $name*
✅ *- تطبيق : $APP_S*
☎️ *- الرقم : $hnum*
💰 *- السعر : ₽ $price*
🆔 *- العميل : $nid*
*📥 - رسالة الكود : [ $code ]* ➕
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*📆 -  $DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ - شراء رقم من البوت 🤖",'url'=>"t.me/$me"]]
]
])
]);
bot('SendMessage',[
'chat_id'=>$PAY,
'text'=>"
☑️ 𝗡𝗨𝗺𝗕𝗘𝗥 : *$number*
💬 𝗖𝗢𝗗𝗘 : *$code* $addnumber
✅ 𝗡𝗮𝗺𝗘 : [$name](tg://id=>user?$id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
$BUYSNUM[number][$order][sms][$smsnum][code] = "$code";
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null and time() - $times < $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"☑️ - تم وصول الكود الجديد $code",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *تم إسال الكود في الأسفل 🙂*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود الجديد بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>"$agen",'callback_data'=>"AgeCod-$idSend-$allsms"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ 𝗡𝗨𝗺𝗕𝗘𝗥 : `$number`
💬 𝗖𝗢𝗗𝗘 : `$code` $addnumber

☑️ - إضغط على الكود او الرقم للنسخ 🙂🖤𖠛
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
$hnum=substr($number, 0,-4)."••••";
$nid=substr($id, 0,-3)."•••";
bot('SendMessage',[
'chat_id'=>-1002019872754,
'text'=>"
☑️ *- تم شراء رقم من البوت بنجاح* 📢
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
🌐 *- السيرفر : $APP*
♻️ *- الدولة : $name*
✅ *- تطبيق : $APP_S*
☎️ *- الرقم : $hnum*
💰 *- السعر : ₽ $price*
🆔 *- العميل : $nid*
*📥 - رسالة الكود : [ $code ]* ➕
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*📆 -  $DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ - شراء رقم من البوت 🤖",'url'=>"t.me/$me"]]
]
])
]);
bot('SendMessage',[
'chat_id'=>$PAY,
'text'=>"
☑️ 𝗡𝗨𝗺𝗕𝗘𝗥 : *$number*
💬 𝗖𝗢𝗗𝗘 : *$code* $addnumber
✅ 𝗡𝗮𝗺𝗘 : [$name](tg://id=>user?$id)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
$BUYSNUM[number][$order][sms][$smsnum][code] = "$code";
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}
}
#=========={End Site All}==========#
if($exdata[0] == "ending"){
$idSend=$exdata[1];
$order=$ORDERALL[$idSend][order];
$account=$ORDERALL[$idSend][account];
$number = $BUYSNUM[number][$order][phone];
$status = $BUYSNUM[number][$order][status];
$operator = $BUYSNUM[number][$order][operator];
$app = $BUYSNUM[number][$order][app];
$add = $BUYSNUM[number][$order][add];
$price = $BUYSNUM[number][$order][price];
$idnum = $BUYSNUM[number][$order][id];
$site = $BUYSNUM[number][$order][site];
$zero = $BUYSNUM[number][$order][zero];
$country = $BUYSNUM[number][$order][country];
$idnumber = $BUYSNUM[number][$order][idnumber];
$finish = $BUYSNUM[number][$order][finish];
$times = $BUYSNUM[number][$order][times];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب الملكي","تيليجرام الملكي","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
$cod = "$country$app$operator$add";
if($add == 21 or $add ==30){
$BUYING="Wi-$add";
}else{
$BUYING="Xi-$cod";
}
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=setStatus&site=$site&country=$country&app=$app&idnumber=$idnumber&number=$number"),1);
$status = $api[status];
$Location = $api[Location];
if(time() - $times >= $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Timeout*

⏰ - الوقت المتبقي : *00:00:00 دقيقة*
⌛️ - إنتهى الوقت *المتاح للرقم*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$back"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Terminated*

✅ - تم إنهاء *الرقم بنجاح*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$back"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم إنهاء حالة رقم من البوت:

☎️ - الرقم : *$number*
🧩 - الدولة : *$name*
🎯 - رمز الدولة : *$country*
🎬 - التطبيق : *$APP*
🎟 - الرصيد : *$Balance*
🏋 - الايدي : *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع : *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
$BUYSNUM[number][$order][status] = 3;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = 3;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
}
}
#=========={Ban Site All}==========#
if($exdata[0] == "Ban"){
$idSend=$exdata[1];
$order=$ORDERALL[$idSend][order];
$account=$ORDERALL[$idSend][account];
$number = $BUYSNUM[number][$order][phone];
$status = $BUYSNUM[number][$order][status];
$operator = $BUYSNUM[number][$order][operator];
$app = $BUYSNUM[number][$order][app];
$add = $BUYSNUM[number][$order][add];
$price = $BUYSNUM[number][$order][price];
$idnum = $BUYSNUM[number][$order][id];
$site = $BUYSNUM[number][$order][site];
$zero = $BUYSNUM[number][$order][zero];
$country = $BUYSNUM[number][$order][country];
$idnumber = $BUYSNUM[number][$order][idnumber];
$finish = $BUYSNUM[number][$order][finish];
$times = $BUYSNUM[number][$order][times];
$status_zero = $buy['number'][$zero];
$name = $_co['country'][$country];
$BALANCE = $Balance - $price;
if($add >= 21 and $add <= 25){
$add=21;
}elseif($add >= 26 and $add <= 30){
$add=26;
}
$APP = str_replace(["10","11","12","13","14","21","26","31","36","1","2","3","4","5","6","7","8","9"],["فايبر","سناب شات","نيتفلكس","حراج","السيرفر العام","عشوائي واتسأب","عشوائي تيليجرام","واتسأب الملكي","تيليجرام الملكي","العروض","واتسأب","تيليجرام","فيسبوك","إنستقرام","تويتر","تيك توك","قوقل","ايمو"],$add);
$server = str_replace(["wa","tg","fb","ig","tw","lf","go","im","vi","fu","nf","au","ot"],["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],$app);
$APP_S = str_replace(["Whatsapp","Telegram","Facebook","Instagram","Twitter","TikTok","Google","Imo","Viber","Snapchat","Netflix","Haraj","Other"],["الواتسأب","التيليجرام","الفيسبوك","الإنستقرام","التويتر","التيك توك","القوقل","الإيمو","فايبر","سناب شات","نيتفلكس","حراج","أي تطبيق لديك"],$server);
if($add == 1){
$back = "Wo";
}elseif($add >= 21 and $add <= 30){
$back = "worldwide";
}elseif($add >= 31 and $add <= 40){
$back = "saavmotamy";
}else{
$back = "Ms-$add-$country";
}
$cod = "$country$app$operator$add";
if($add == 21 or $add ==30){
$BUYING="Wi-$add";
}else{
$BUYING="Xi-$cod";
}
$api=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=getStatus&site=$site&app=$app&idnumber=$idnumber&number=$number"),1);
$status = $api[status];
$code = $api[code];
$agen = $api[agen];
$Location = $api[Location];
$api2=json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME']."/$bot/api-sites.php?action=addBlack&site=$site&app=$app&idnumber=$idnumber&number=$number"),1);
$status2 = $api2[status];
$Location2 = $api2[Location];
if($agen == "200"){
$agen = "- طلب الكود مرة أخرى🔂";
}else{
$agen = null;
}
if($code != null and $status == 2 and time() - $times < $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *$code*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>"$agen",'callback_data'=>"AgeCod-$idSend-1"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null and $status == 2 and time() - $times >= $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Timeout*
💬 - الكود : *$code*

✅ - قد تم وصول *الكود من قبل*🤧🖤
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null and time() - $times < $finish){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"لا يمكنك حظر الرقم بعد وصول الكود، إضغط على طلب الكود للحصول عليه ✅",
'show_alert'=>true,
]);
exit;
}elseif($status2 != "200"){
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>'❌ - لا يمكنك إلغاء الرقم لأن طلبك يحتاج لمرور دقيقتين ♻️',
'show_alert'=>true
]);
unlink("data/id/$id/step.txt");
exit;
}elseif($code == null and $status == 2){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Canceled*

✅ - تم إلغاء *الرقم بنجاح*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$back"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
$BUYSNUM[number][$order][status] = -1;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = -1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/restriction.txt");
unlink("data/id/$id/step.txt");
exit;
}elseif($code != null){
bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>"☑️ - تم وصول الكود بنجاح! رصيدك: ₽ $BALANCE",
'show_alert'=>false,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ *- تم شراء رقم جديد*

☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*

☎️ - الرقم : `$number`
🌀 - الحالة : *••• Completed *
💬 - الكود : *تم إسال الكود في الأسفل 🙂*
💸 - السعر : *₽ $price*
📆 - بتاريخ : *$DAY3*

✅ - تم وصول الكود بنجاح 🤧🖤
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- إنهاء الحالة ☑️",'callback_data'=>"ending-$idSend"]],
[['text'=>"$agen",'callback_data'=>"AgeCod-$idSend-1"]],
[['text'=>'- رجوع.','callback_data'=>"$back"]]
]
])
]);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ 𝗡𝗨𝗺𝗕𝗘𝗥 : `$number`
💬 𝗖𝗢𝗗𝗘 : `$code`

☑️ - إضغط على الكود او الرقم للنسخ 🙂🖤𖠛
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
$hnum=substr($number, 0,-4)."••••";
$nid=substr($id, 0,-3)."•••";
bot('SendMessage',[
'chat_id'=>-1002019872754,
'text'=>"
☑️ *- تم شراء رقم من البوت بنجاح* 📢
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
🌐 *- السيرفر : $APP*
♻️ *- الدولة : $name*
✅ *- تطبيق : $APP_S*
☎️ *- الرقم : $hnum*
💰 *- السعر : ₽ $price*
🆔 *- العميل : $nid*
*📥 - رسالة الكود : [ $code ]* ➕
*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*📆 -  $DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ - شراء رقم من البوت 🤖",'url'=>"t.me/$me"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$PAY,
'text'=>"
⚜ تم وصول كود الرقم:

☎️ - الرقم : *$number*
🚸 - الكود : *$code*
🧩 - الدولة : *$name*
🎯 - رمز الدولة : *$country*
🎬 - التطبيق : *$APP*
🎟 - الرصيد: *$BALANCE*
🏋 - الايدي: *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🔎 - رقم العمل: *$idSend*
🎗 - الموقع: *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]],
[['text'=>"تسجيل الدخول.",'callback_data'=>"emilead-$EM"]],
[['text'=>'دفع المبلغ.','callback_data'=>"Pay_am-$EM-$price"]]
]
])
]);
$BUYSNUM[number][$order][sms][0][code] = "$code";
$BUYSNUM[number][$order][status] = 2;
$BUYSNUM[number_my] += 1;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = 2;
$ORDERALL[number] +=1;
$ORDERALL[ruble] +=$price;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
$points = file_get_contents("EMILS/$EM/points.txt");
$as = $points - $price;
file_put_contents("EMILS/$EM/points.txt",$as);
unlink("data/id/$id/restriction.txt");
unlink("data/id/$id/step.txt");
exit;
}elseif(time() - $times >= $finish){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Timeout*

⏰ - الوقت المتبقي : *00:00:00 دقيقة*
⌛️ - إنتهى الوقت *المتاح للرقم*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$Ms"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم إنتهاء وقت الرقم المتاح للبوت:

☎️ - الرقم : *$number*
🧩 - الدولة : *$name*
🎯 - رمز الدولة : *$country*
🎬 - التطبيق : *$APP*
🎟 - الرصيد : *$Balance*
🏋 - الايدي : *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع : *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
$BUYSNUM[number][$order][status] = -2;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = -2;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/step.txt");
exit;
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
☑️ - الرقم : *$number*
☑️ - الدولة : *$name*
☑️ - التطبيق : *$APP*
☑️ - الحالة : *••• Canceled*

✅ - تم إلغاء *الرقم بنجاح*
📆 - *$DAY2*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الشراء مجدداً بسعر $price روبل ؟ 🔄",'callback_data'=>"$BUYING"]],
[['text'=>"$MS",'callback_data'=>"$back"]],
[['text'=>'- رجوع.','callback_data'=>"Buynum"]]
]
])
]);
bot('sendMessage',[
'chat_id'=>$ess,
'text'=>"
⚜ تم حضر رقم من البوت:

☎️ - الرقم : *$number*
🧩 - الدولة : *$name*
🎯 - رمز الدولة : *$country*
🎬 - التطبيق : *$APP*
🎟 - الرصيد : *$Balance*
🏋 - الايدي : *$idnumber*
🔥 - السعر : *₽ $price*
🤸‍♂ - الحساب : *$EM*
🎗 - الموقع : *$Location & $operator*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☑️ - رابط العضو ↖️",'url'=>"tg://openmessage?user_id=$id"]]
]
])
]);
$BUYSNUM[number][$order][status] = -1;
file_put_contents("EMILS/$EM/number.json", json_encode($BUYSNUM,64|128|256));
$ORDERALL[$idSend][status] = -1;
file_put_contents('BUY/Orderall.json', json_encode($ORDERALL,64|128|256));
unlink("data/id/$id/restriction.txt");
unlink("data/id/$id/step.txt");
}
}
