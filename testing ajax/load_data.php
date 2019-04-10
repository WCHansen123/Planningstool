<!DOCTYPE html>
<html>
<head>
  <title>oke</title>
</head>
<body>
<select id="button" name="color">
  <?php 
  require 'load_data_select.php';
  foreach (GetGames() as $array) {
    printf('<option value="'. $array["id"].'">'. $array["name"] . '</option>');
  }
  ?>
</select>
<div id="container"></div>
</body>
</html>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
</script>



<script type="text/javascript">
  


 $(document).ready(function(){
    $('select#button').change(function(){
      console.log(this.value);
        $.ajax({
            url: 'reciever.php',
            type: 'POST',
            data: {value:this.value},
            dataType: 'html',
            success: function (data) {
                $('#container').html(data);
            }
        });

    });
});


</script>