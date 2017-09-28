<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title> URL Information Using PHP Curl </title>
  </head>
  <body>
    <div class="container">
      <h2>Input Url</h2>
      <form action="result.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="url" placeholder="Enter url" name="url">
        </div>
        <button type="submit" class="btn btn-default" id="btn">Submit</button>
      </form>
    </div>
  </body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.btn').attr('disabled',true);
    $('#url').keyup(function(){
        if($(this).val.length !=0){
            $('.btn').attr('disabled', false);
        }
    })
});
</script>
</html>