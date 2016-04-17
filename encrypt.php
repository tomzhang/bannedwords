<?php
$lines = file('./rawbannedwords.txt');
$newsLines = array();
foreach ($lines as $rawword) {
    $newsLines[] = base64_encode($rawword);
}
file_put_contents('./pubbannedwords.txt', implode("\n", $newsLines));
echo "done\n";