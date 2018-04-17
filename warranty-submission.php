<?php
$name = $_POST[‘element_1’].$_POST['element_2'];
$email = $_POST[’element_3’];
$fp = fopen(”newfile.txt”, “a”);
$savestring = $name . “,” . $email . “n”;
fwrite($fp, $savestring);
fclose($fp);
echo “<h1>You data has been saved in a text file!</h1>”;
?>
<!-- 4&5 star ratings: go to https://www.amazon.com/review/create-review# -->
<!-- save review -->