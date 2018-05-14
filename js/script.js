$(

  function() {
    
    $('#login').submit(
      
      //function akan dijalankan saat button diklik
      function(e){
       
        //alert('Helo juga~');
        var username = $('#username').val();
        var password = $('#password').val();
        
        var credentials = {
          'Username': username,
          'password': password
        };
        
        $.ajax({
       type: "POST",
       url: 'autentikasi.php',
       data: credentials,
       success: function(data)
       {
          if (data == 'sukses') {
            alert(data);
          }
          else {

            alert('Invalid Credentials');
          }
       }
      });

     }

    );
  }
  );