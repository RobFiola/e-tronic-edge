<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$name = $_POST[‘element_1’].$_POST['element_2'];
$email = $_POST[’element_3’];
$rating = $_POST[‘rating’];
$string = $name.','.$email.'.'.$rating
fwrite($myfile, $txt);
fclose($myfile);
?>
<!-- 4&5 star ratings: go to https://www.amazon.com/review/create-review# -->
<!-- else save review -->