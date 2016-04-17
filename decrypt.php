<?php
$lines = file('./pubbannedwords.txt');
$newsLines = array();
foreach ($lines as $rawword) {
    $newsLines[] = base64_decode(trim($rawword));
}
file_put_contents('./rawbannedwords_out.txt', implode("\n", $newsLines));
echo "done\n";