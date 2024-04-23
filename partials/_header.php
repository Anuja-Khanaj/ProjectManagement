<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">IONIC</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <li class="nav-item active">
  <a class="nav-link" href="../ProjectManagement/index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">   
  <a class="nav-link" href="../ProjectManagement/about.php">About</a>
</li>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Departments
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="./subpages/_cse.php">CSE</a>
    <a class="dropdown-item" href="./subpages/_mechanical.php">Mechanical</a>
    <a class="dropdown-item" href="./subpages/_aids.php">AIDS</a>
    <a class="dropdown-item" href="./subpages/_mechtronic.php">Mechtronics</a>
    <a class="dropdown-item" href="./subpages/_elctronics.php">Electronics</a>
    <a class="dropdown-item" href="./subpages/_civil.php">Civil</a>
  </div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Hackthons
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="./subpages/_sih.php">Smart India Hackthon</a>
  <a class="dropdown-item" href="./subpages/depex.php">Deepex</a>
</li>




</ul>';
   
    if (!$loggedin) {
      echo '<li class="nav-item">
            <a class="nav-link" href="../ProjectManagement/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../ProjectManagement/signup.php">Signup</a>
          </li>';
    }
    if ($loggedin) {
      echo '<li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>';
    }
    
    echo '</div>
</nav>';
?>




