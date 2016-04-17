<?php
/**
* Usage: decrpty.php filename
* /usr/bin/php decrypt.php pub_sms_banned_words.txt
* URL:   https://github.com/spetacular/bannedwords
*/
if ($argc != 2) { 
	die("Usage: /usr/bin/php decrypt.php filename\n"); 
} 
$filename = $argv[1];
$lines = file('./'.$filename);
$newsLines = array();
foreach ($lines as $rawword) {
    $newsLines[] = base64_decode(trim($rawword));
}
file_put_contents('./'.$filename.'.out.txt', implode("", $newsLines));
echo "done\n";