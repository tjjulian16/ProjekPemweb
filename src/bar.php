<?php


$hostdb = "localhost"; // MySQl host
$userdb = "root"; // MySQL username
$passdb = "admin"; // MySQL password
$namedb = "anterin"; // MySQL database name
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>

<?php
    $strQuery = "SELECT COUNT(`kota_tujuan`) as total, `kota_tujuan`
FROM harga
GROUP BY `kota_tujuan`
ORDER BY COUNT(`kota_tujuan`) DESC; ";
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($result) {
        $arrData = array(
            "chart" => array(
              "caption" => "Data Tujuan terbanyak",
              "paletteColors" => "#1175c2,#FF2342,#FFFF00,#324354",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "100",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#999999",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );
        $arrData["data"] = array();
        while($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["kota_tujuan"],
            "value" => $row["total"]
            )
        );
        }
        $jsonEncodedData = json_encode($arrData);
        $columnChart = new Charts("column2D", "mySecondChaRT" , 600, 290, "chart-2", "json", $jsonEncodedData);
        $columnChart->render();
  $dbhandle->close();
       
    }
?>