<?php

  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
    // switch($_REQUEST['status']) {
    //   case 'success':
    //     $message = 'User was added succesfully';
    //   break;
    //   case 'error':
    //     $message = 'There was a problem inserting the user';
    //   break;
    // }
  }
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand">UTN ISW613</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="list.php" tabindex="-1" aria-disabled="true">List</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="msg">
     <?php echo $message; ?>
    </div>
    <h1>Form Registration</h1>
    <form action="/signup.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Your username">
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