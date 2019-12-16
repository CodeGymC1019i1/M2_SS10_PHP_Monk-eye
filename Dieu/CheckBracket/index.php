<?php

$string1 = "s * (s – a) * (s – b) * (s – c)";
$string2 = "(– b + (b2 – 4*a*c)^0.5) / 2*a";
$string3 = "s * (s – a) * (s – b * (s – c)";
$string4 = 's * (s – a) * s – b) * (s – c)';
$string5 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';


function checkBracket ($str){
    $stacklist = new SplStack();
    for ($i = 0;$i<strlen($str);$i++) {
        if (substr($str, $i, 1) == '(')
            $stacklist->push(substr($str, $i, 1));
        else if (substr($str, $i, 1) == ')') {
            if ($stacklist->count() == NULL)
                return false;
            else {
                $left = $stacklist->pop();
                if ($left != '(')
                    return false;
            }
        }
    }
        if($stacklist->count() == NULL)
            return true;
        else
            return false;
}
var_dump(checkBracket($string1));
echo '<br>';
var_dump(checkBracket($string2));
echo '<br>';
var_dump(checkBracket($string3));
echo '<br>';
var_dump(checkBracket($string4));
echo '<br>';
var_dump(checkBracket($string5));

