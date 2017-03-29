<?php 
$date=new DateTime();
echo "<p>".date_format($date,"d-m-Y yday")."<p>";
echo "<p>current timestamp is ".time()."</p>";
echo "<p>===============</p><pre>";
print_r(gettimeofday());
echo "</pre><p>===============</p><pre>";
print_r(getdate());
echo "</pre><p>===============</p><pre>";
print_r(localtime());
print_r(localtime(time(),1));
echo "</pre><p>===============</p>";
echo "<p>date now is ".date("d-m-Y H:m:sO A I")."</p>";
echo "<p>date now is ".gmdate("d-m-Y H:m:sO A I")."</p>";
echo "<p>===============</p>";
/*you had to have the locales installed in your system*/
// setlocale(LC_TIME, "fr_FR");
echo "<p>nous somme le  ".strftime("%X %x %Z")."</p>";
echo "<p>".mktime(0,0,0,3,1,1990)."</p>";
