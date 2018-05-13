 <?php
  function cekLogin(){
    
    session_start();
  if (!isset($_SESSION['pengguna'])) {
    $_SESSION['pengguna'] = null;  
  }
}

function logout(){

  if(isset($_SESSION['pengguna'])){
  session_destroy();
}
else{
  
    
  
      }
  }
?>