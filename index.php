<?php
echo __FILE__ .' '. __LINE__;

$heredoc = <<<END

heredoc

END;
echo $heredoc;

$a='Рыба';
$b='человек';
echo "$a рыбою сыта, а $b человеком";

