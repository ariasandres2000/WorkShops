<?php

inclue('functions.php');


if($_POST['firstName']) {

  var_dump($_REQUEST);

  //get each field and insert to the database

  saveUser($_REQUEST);

}