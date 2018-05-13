$(

  function() {
    //alert('helo!');
    $('#logout').click(

      //function akan dijalankan saat button diklik
      function(){
        //alert('Helo juga~');
        var nilai = $('#something').val();
        //alert(nilai);

        //setting variabel ala json
        var postdata = {
          'n':nilai,
          'x':2,
          'y':false,
          'z':"asoy"
        };
        //setting variabel ala ?
        postdata =
          "n="+nilai+"&x="+2+"&y=true&z=OKK";
        
        $.post(
          "random.php",
          postdata,
          function(data){
            $('#hasil').html(data);

          }

        );
      }

    );

  }

);