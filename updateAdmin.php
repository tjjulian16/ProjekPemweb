<?php

include "koneksiJulian.php";

if (isset($_REQUEST['submitin'])) {
  $status_barang = $_REQUEST['status_barang'];
  $result = mysqli_query($link, "SELECT * FROM barang");
  while ($rows = mysqli_fetch_array($result)) { 
      $result2 = mysqli_query($link, "UPDATE barang SET status_barang = '$status_barang' LIMIT 1");
        
    }

    if ($result2) {
    header('Location:kelolaAdmin.php');
}
}  

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

  $(document).click(function(){
    swal({
  title: "BERHASIL!",
  text: "Data berhasil di update!",
  icon: "success",
  

    button: "Yes!",
  });


  });
</script>
