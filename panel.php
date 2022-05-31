<?php 
session_start();
if(isset($_SESSION['login']) === false && $_SESSION['login'] != 'xxx'){

    header('location:login.php?error=2');
}

include 'config.php';
 
?>
<!DOCTYPE html>
<html lang="en">
    <style>
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  border: 1px solid #555;
  height:800px;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li {
  text-align: center;
  border-bottom: 1px solid #555;
  
}

li:last-child {
  border-bottom: none;
  
}



li a:hover:not(.active) {
  background-color: #555;
  color: white;
  
}
/* #id {  height:800px ;} */
</style>
<head>
<title>login page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        // function validatemyform() {
        // } 
    </script>
</head>
<body>  
 

   <!-- <div class="container"> -->
                <div class="row">
                  <div class="Col-md-12">
<?php 
    if(isset($_GET['success']) === true && $_GET['success'] == 1){
    echo '<div class="alert" >Your data has been updated successfully</div>'; }
  
    if(isset($_GET['success']) === true && $_GET['success'] == 2){
    echo '<div class="alert" >Your data has been delete successfully</div>';}?>
            </div>
                    <div class="col-4">
<ul>
  <li><a href="panelselect.php">select</a></li>
  <li><a href="#news">insert</a></li>
  <li><a href="panelselect.php">delete</a></li>
  <li><a href="panelupdate.php">update</a></li>
  <li><a class="class" href="logout.php" >logout</a></li>
</ul>                    </div>


                    <div class="col-4">
                        <img src="assets/images/courses-04.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img src="assets/images/courses-02.jpg" alt="">
                    </div>
                </div>
                <!-- </div> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html> 
