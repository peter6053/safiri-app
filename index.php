<?php
$jsondata = file_get_contents("register.json");
$json = json_decode($jsondata,true);
$output .="<ul>";
foreach($json ('email')as $register) 
    $output .= "<h4>" $register('firstname'). "</h4>"
    $output .= "<h4>" $register('lastname'). "</h4>"
    $output .= "<h4>" $register('password'). "</h4>"
    $output .= "<h4>" $register('verifypassword'). "</h4>"
    $output .= "<h4>" $email('Phone'). "</h4>"
 
 $output .="</ul>";
 echo$output;
 ?>

/* parsing login datail */
<?php
$jsondata = file_put_contents("login.json");

$json = json_decode($jsondata,true);

$output .="<ul>";
foreach($json ('login')as $login) 
    $output .= "<h4>" $email(''). "</h4>"
    $output .= "<h4>" $email('lastname'). "</h4>"

$output .="</ul>";
?>







