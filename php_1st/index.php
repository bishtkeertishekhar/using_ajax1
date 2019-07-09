<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ajax php</title>
  </head>
  <body>
    <div class="col-md-4 offset-md-4">
      <label>First Name</label> <input type="text" name="first_name" id="first_name" class="form-control">
      <div id="change">
        <label>Last Name</label><input type="text" name="last_name"  id="last_name" class="form-control">
        <label>Full Name</label><input type="text" name="full_name"  id="full_name" class="form-control">
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script>
// type one 
$(document).ready(function(){
      $('#change').hide();
      $('#first_name').keyup(function(){
        $.ajax({
           type: "POST",
           url: "config.php",
           data: "keyup="+$(this).val(),
           // dataType: "json",
           success: function(data){
            console.log(data);
                $('#change').html(data);
                $('#change').show();
           },

        });
      }); 
    });




//type two 
/*    $(document).ready(function(){
      $('#first_name').keyup(function(){
        $.ajax({
           type: "POST",
           url: "config.php",
           data: "keyup="+$(this).val(),
           dataType: "json",
           success: function(data){
               full_name = 'Mr. ';
               full_name += data['first_name'];
               full_name += ' ';
               full_name +=  data['last_name'];
                $('#last_name').val(data['last_name']);
                $('#full_name').val(full_name);
                $('#change').html(data);
           },

        });
      }); 
    });
    */
</script>

  </body>
</html>