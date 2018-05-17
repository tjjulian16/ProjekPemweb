<?php


$hostdb = "localhost"; 
$userdb = "root"; 
$passdb = "admin";
$namedb = "anterin"; 
$dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

if ($dbhandle->connect_error) {
exit("There was an error with your connection: ".$dbhandle->connect_error);
}
?>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<?php
     $strQuery = "SELECT COUNT(`jenis_layanan`) as total, `jenis_layanan` FROM barang GROUP BY `jenis_layanan` ORDER BY COUNT(`jenis_layanan`) DESC; ";
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($result) {
        $arrData = array(
            "chart" => array(
              "caption" => "Pilihan Pengguna",
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
            "label" => $row["jenis_layanan"],
            "value" => $row["total"]
            )
        );
        }
        $jsonEncodedData = json_encode($arrData);
        $columnChart = new Charts("pie2d", "myThirdChaRT" , 650, 290, "chart-3", "json", $jsonEncodedData);
        $columnChart->render();

      
    }
?>