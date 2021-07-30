<?php
$json_data = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
$data = json_decode($json_data,true);

if(is_array($data) || is_object($data)){
foreach ($data as $key => $value) {
  $days = count($value)-1;
  $previous = $days -1;
}
}

$total_confirmed = 0;
$total_recovered = 0;
$total_deceased = 0;
$active = 0;

if(is_array($data) || is_object($data)){
  foreach ($data as $key => $value) {
   $total_confirmed = $total_confirmed + $value[$days]['confirmed'];
   $total_recovered = $total_recovered + $value[$days]['recovered'];
   $total_deceased = $total_deceased + $value[$days]['deaths'];
   $active = $active + $value[$days]['confirmed'] - $value[$days]['recovered'] - $value[$days]['deaths'];
  }
}
 ?>
