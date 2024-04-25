<?php
$coutry_name = "";
$active_cases = 0;
$death_cases = 0;
$confirmd_cases = 0;
$fatality_rate = 0;
$recovered = 0;
$last_updated = 0;
// $content = file_get_contents("https://covid-api.com/api/reports");

// $result = json_decode($content);

// print_r($result);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://covid-api.com/api/reports",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


$result = json_decode($response,true);

// print_r($result);
$country_iso =  $_GET['country'];
$data = $result["data"];


for($i = 0; $i < count($data); $i++){
    $covid_data = $data[$i];
    $region = $covid_data["region"];
    $iso = $region["iso"];

    if($iso == $country_iso){
        $coutry_name = $region["name"];
        $confirmd_cases = $covid_data["confirmed"];
        $death_cases = $covid_data["deaths"];
        $active_cases = $covid_data["active"];
        $fatality_rate = $covid_data["fatality_rate"];
        $last_updated = $covid_data["last_update"];
        break;
        
    }

}
$title = $coutry_name ." Data"; 
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container">
  <table class="table table-bordered table-striped fs-10 mb-0">
    <tr>
        <th>Country Name</th>
        <td><?php echo $coutry_name ?></td>
    </tr>
    <tr>
        <th>Confirmed Cases</th>
        <td><?php echo number_format($confirmd_cases) ?></td>
    </tr>
    <tr>
        <th>Death Cases </th>
        <td><?php echo number_format($death_cases )?></td>
    </tr>
    <tr>
        <th>Active Cases</th>
        <td><?php echo  number_format($active_cases) ?></td>
    </tr>
    <tr>
        <th>Fatality Rate</th>
        <td><?php echo $fatality_rate ?></td>
    </tr>
    <tr>
        <th>Last Updated </th>
        <td><?php echo  $last_updated ?></td>
    </tr>
  </table>
  </div>
</body>
</html>

