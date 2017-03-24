<pre>
<?php 
/*Arrays*/
$array=array(10,20,30,40,50);
reset($array);
echo "<p></p>";
while(list($k,$v)=each($array))
	echo "<p>$k = $v</p>";
reset($array);
echo "<p>array_walk</p>";
function afficher_cellule($cel){
	echo "<p>$cel</p>";
}
array_walk($array, 'afficher_cellule');
echo "<p>array_key_exists</p>";
var_dump(array_key_exists(1,$array));

echo "<p>krsort</p>";
$array=array(5 => 10,8 => 20,10 => 30,12 => 40,15 => 50);
krsort($array);
var_dump($array);
echo "<p>ksort</p>";
ksort($array);
var_dump($array);
/*sort and rsort are like ksort and krsort but they don't maintain array's keys
to preserve the array's keys you have to use asort(ascending order) and arsort 
*/
var_dump(array_rand($array,1));
echo "<p>==================</p>";
$a = array ("a" => 20, 36, 40);
$b = array ("b" => 20, 30, 40);
/*check only values*/
var_dump(array_intersect($a,$b));
/*check keys and values*/
var_dump(array_intersect_assoc($a,$b));
echo "<p>==================</p>";

/*check only values*/
var_dump(array_diff($a,$b));
/*check keys and values*/
var_dump(array_diff_assoc($a,$b));
?>
</pre>