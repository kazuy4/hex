<?php
// author : NuLLByte31337
system('clear');
function login_banner(){
echo " _   _
( ) ( )
| |_| |   __
|  _  | /'__`\(`\/')
| | | |(  ___/ >  <
(_) (_)`\____)(_/\_)" . "\33[32;1m Encode Decode";
}
login_banner();
echo "\n\n";
 echo "\33[1;33m[1] encode\n";
 echo "[2] decode\n";
 echo "Chose Your Input : ";
 $input = trim(fgets(STDIN));
// user
switch($input){
// encode
 case "1" :
 echo "Text : ";
 $input_encode = trim(fgets(STDIN));
 echo "Output : " . implode(" ", unpack("H*", $input_encode)) . "\n";
break;

// decode
 case "2" :
 echo "Hex : ";
 $input_decode = trim(fgets(STDIN));
 echo "Output : " . pack("H*", $input_decode) . "\n";
break;
// defaut if user not chose or empty
 default :
 echo "please, select number 1 or 2\n";
break;
}
?>
