<?php
  session_start();

  $user = $_SESSION['user'];
  if (!$user) {
    header('Location: index.php');
  }
  ?>

  <h1> Bienvenido <?php echo $user['name']; echo $user['lastname'] ?> </h1>
  <a href="logout.php">Logout</a>

  <nav class="nav">
    <?php  if($user['role'] === 'Administrador') { ?>
      <li class="nav-item">
        <a class="nav-link active" href="#">Users</a>
      </li>
    <?php } ?>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Arboles</a>
    </li>
  </nav>