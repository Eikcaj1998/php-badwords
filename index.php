<?php 

$text= 'ciao mi chiamo Jackie Wang
';

echo $text;
echo '<br> </br>';
echo strlen($text);


$bad_words = $_GET['bad_words'];

//replace
$new_text= str_replace($bad_words, '***', $text);

//new text
echo '<br> </br>';
echo $new_text;
echo '<br> </br>';
echo strlen($new_text);
?>