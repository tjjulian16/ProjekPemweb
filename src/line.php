<?php

include("Charts.class.php");
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
    $strQuery = "SELECT SUM(`ongkir`) as pendapatan, `tanggal_pengiriman` FROM barang GROUP BY `tanggal_pengiriman` ORDER BY `tanggal_pengiriman` ASC; ";
    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
    if ($result) {
        $arrData = array(
            "chart" => array(
              "caption" => "Perkembangan pendapatan per-hari",
              "paletteColors" => "#834950",
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
            "label" => $row["tanggal_pengiriman"],
            "value" => $row["pendapatan"]
            )
        );
        }
        $jsonEncodedData = json_encode($arrData);

        $columnChart = new Charts("line", "myFirstChart" , 600 , 290, "chart-1", "json", $jsonEncodedData);

        $columnChart->render();
    }

?>