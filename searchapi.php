<?php 

$location= $_POST['location_entered']; //extracts data from text box representing the address


if (!empty($location))
{
$url= 'https://maps.googleapis.com/maps/api/geocode/json?address=AIzaSyC4lqx0nskGeCxOGON5uSDnAO8-ENCb8vs' . urlencode($location);

$jsoncontent= file_get_contents($url);

$decodedarray= json_decode($jsoncontent, true);

$latitude= $decodedarray['results'][0]['geometry']['location']['lat'];
$longitude= $decodedarray['results'][0]['geometry']['location']['lng'];

if( $_GET["location"] || $_GET["locaton"] ) {
    $_GET['location']. "<br />";
   $_GET['location']. " years old.";
 
 exit();
}

}
?>
