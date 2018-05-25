<?php
$f_source='http://api.openweathermap.org/data/2.5/weather?q=Bangkok,TH';
	$json_f = file_get_contents($f_source);
	$f_get_list = json_decode($json_f);
     foreach ($f_get_list as $fgetlist ) {
	$cityname=$fgetlist->name;
      }
     foreach ($f_get_list->weather as $weatherlist ) {
	$weatherstatus=$weatherlist->main;
      }
     $temp=$f_get_list->main->temp;
     $windspeed=$f_get_list->wind->speed;

	echo  $celsius = ceil($fahrenheit - 273.15);
?>