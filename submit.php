<?php
if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $disc=$_POST['disc'];
    
    //CONNECTING TO A DATABASE
    $servername="localhost";
    $username="root";
    $passward="";
    $database="Contact";
    $con=mysqli_connect($servername,$username,$passward,$database);
    if(!$con){
      die("Error! ".mysqli_connect());

  }
  else{
      $sql="INSERT INTO `contactus` (`Name`, `Email`, `Concern`, `dt`) VALUES ('$name', '$email','$disc', current_timestamp())";
      $result=mysqli_query($con,$sql);
          if($result){
          
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS!</strong> You have been submited sucessfully..
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
          else {
            echo"This record was not inserted because of this error--->>".mysqli_error($con);

            }
   }
}

 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
  </head>
  

  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact Us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PHPBEG/submit.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
  
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      
      </form>
    </div>
  </div>
</nav>
<div class="container mt-3">
<form action="/phpbeg/submit.php" method="post">
    <h1>Please Contact Us For Your Concern</h1>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text"name="name" class="form-control" id="name" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email"name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="disc" class="form-label">Discription</label>
    <textarea class="form-control" name="disc" id="disc" cols="30" rows="10"></textarea>
    
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>