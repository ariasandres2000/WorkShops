<?php

/**
 * Saves an specific user into the database
 */
function saveUser($user){

  $firstName = $user['firstName'];
  $lastName = $user['lastName'];

  $sql = "INSERT INTO users VALUES('$firstName', '$lastName')";
  mysqli_query($connection, $sql);

}


/**
 *  Gets the provinces from the database
 */
function getProvinces() {
  //select * from provinces; Hola
  return [55 => 'Alajuela', 56 => 'San Jose', 57 => 'Cartago', 80 => 'Heredia', 90 => 'Limon', 100 => 'Puntarenas', 200 => 'Guanacaste'];
}