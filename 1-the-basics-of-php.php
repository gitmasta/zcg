<?php echo "<p>hello \tworld !</p>";?>
<?='<p>hello short !</p>'?>
<script language='php'>echo '<p>hello script !</p>';</script>
<% echo '<p>hello asptag !</p>' %>
<?php
/*
require
include 
require_once
include_once 
*/

/*
Numeric values: integer and float;
hexademical(base 16) is prefixed by 0x
octal(base 8) is prefixed by 0 (zero only)
*/
/*
string:
single quotes: 'hello O\'sulvian'
				'c:\\folder\file.txt'	 
*/
echo "<p>\x9b</p>"; 
echo "<p>\321</p>"; 
echo <<<ENDOFTEXT
hello this is a
heredoc text;
ENDOFTEXT;
$a="hello";
echo "<p> \$a say '$a'</p>";
$t=100;
echo "<p>{$t}000</p>";
define('myconstant','1.16');
echo "my constant value is ".myconstant;
$b=10;$a=&$b;$a=15;
echo "<p>$b</p>";
$b=20;
echo "<p>$a</p>";
/*Bitwise Operators ???*/
/*Operator Precedence ???*/
$k=10;
$j='k';
echo "<p>\$k = {$$j}</p>";
?>