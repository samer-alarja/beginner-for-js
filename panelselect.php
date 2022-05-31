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
#id {  height:800px ;}
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
                    <div class="col-2">
<ul>
  <li><a href="panelselect.php">select</a></li>
  <li><a href="#news">insert</a></li>
  <li><a href="panelselect.php">delet</a></li>
  <li><a href="panelupdate.php">update</a></li>
  <li><a class="class" href="logout.php" >logout</a></li>
</ul>                    </div>
<div class="col-10">
<table class="table">
  <tr>
          <th>id</th>
          <th>Name</th>
          <th>Category</th>
          <th>tools</th>
        </tr>
                   <?php 
                    $select_product = mysqli_query($link , ' SELECT category.id  as cat_id ,product.id as product_id ,category.name  as cat_name ,product.mo_year 
                             FROM product JOIN category 
                             ON product.cat_id = category.id 
                             WHERE category.id = product.cat_id');
                    while($exc = mysqli_fetch_assoc($select_product)){
                      echo '<Tr>';
                      echo '<Td>'.$exc['product_id'].'</td>';
                      echo '<Td>'.$exc['mo_year'].'</td>';
                      echo '<Td>'.$exc['cat_name'].'</td>';
                      echo '<Td><A href="paneledit.php?id='.$exc['product_id'].'" class="btn btn-primary">Edit</a>
                                <a href="paneldelete.php?id='.$exc['product_id'].'" class="btn btn-primary">Delete</a></td>';
                      echo '</tr>';
                    }
                   ?>
                   </table>
                </div>
                </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>