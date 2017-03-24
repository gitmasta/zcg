<?php
echo (0=="hello")? "<p>0 and 'hello' are equal</p>":"<p>0 and 'hello' are not equal</p>";
echo (0==="hello")? "<p>0 and 'hello' are identical</p>":"<p>0 and 'hello' are not identical</p>";

$a = 21;
$b = "1";
var_dump(strcmp($a, $b));
if(strcmp($a, $b) == 0) {
print "<p>\$a and \$b are the same</p>";
} else {
print "<p>\$a and \$b are different</p>";
}
$img1="image-image.jpg";
$img2="image2.jpg";
echo "<p>".strncmp($img1, $img2, 5)."</p>";
echo "<p>".stristr($img1,"IMAGE")."</p>";
echo "<p>================</p>";
var_dump(strpos($img1,'m'));
var_dump(strrpos($img1,'m'));
var_dump(strchr($img1,'m'));

/*
PCRE => perl like regexs 
POSIX => standard POSIX-extended regexs syntax(slower than PCRE)
*/
echo "<p>================</p>";
preg_match("/image/", $img1,$matchs);

$string = "My zipcode is 21797-2046";
if(preg_match("/\d{5}-\d{4}/", $string, $matches))
	print_r($matches);
if(preg_match("/(\d{5})-(\d{4})/", $string, $matches))
	print_r($matches);
echo preg_replace("/(\d{5})-(\d{4})/",'\1__\2',$string);
/* a revoir cette partie*/

?>