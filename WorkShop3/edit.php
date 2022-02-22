<?php
  // read the id from the querystring
  // select from the users table the user with that id
  // show the date of that user in the form
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <title>Document</title>
</head>
<body>
<div class="container">
    <?php require ('header.php') ?>
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Form Registration</h1>
    <form action="signup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Your username" value="<?php echo $name?> >
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Your Name">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">LastName</label>
        <input type="text" class="form-control" name="lastname" placeholder="Your LastName">
      </div>

      <input type="submit" class="btn btn-primary" value="Submit"></input>
    </form>
</div>

</body>
</html>