<!-- <?php include "config.php" ?>  -->

<?php
$username = "root";
$password="";
$database =new PDO("mysql:host=localhost;dbname=samer;charset=utf8;",$username,$password);
if (!$database){ die('Connection to database faild');}
$sql =  $database->prepare( ' SELECT category.id  ,category.name  as cat_name ,product.mo_year 
                             FROM product JOIN category 
                             ON product.cat_id =category.id 
                             WHERE category.id = product.cat_id'
                            );
$sql->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>

</style>
</head>
<body>

    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">position</th>
      <th scope="col">entry</th>
      <th scope="col">our</th>
      <th scope="col">salary</th>
      <th scope="col">manager</th>
    </tr>
  </thead>
  <tbody> -->
<?php  

// foreach($sql AS $result){
// echo '<tr>
//  <th scope="row">'.$result['id'].'</th>
//  <td>'.$result["name"].'</td>
//  <td>'.$result["position"].' </td>
//  <td>'. $result["entry"].'</td>
//  <td>'. $result["our"].'</td>
//  <td>'.$result["salary"].' </td>
//  <td>'. $result["manager"].'</td>
//  </tr>
//  ';}

//    foreach($sql AS $re){
//      echo $re["name"];}
// echo '<div class="container"><div class="row">';
// foreach($sql AS $re){

//    echo'<div class="col-md-6">';
//    echo $re['employee'];   
//    print '</div>';
//    echo'<div class="col-md-6">';
//    echo $re['manager'];   
//    print '</div>';

// }
// echo '</div></div>';
//    foreach($sql AS $re){
//      echo $re["name"];}
echo '<div class="container"><div class="row">';
foreach($sql AS $re){

   echo'<div class="col-md-6">';
   echo $re['cat1'];   
   print '</div>';
  
   echo'<div class="col-md-6">';
   echo $re['cat2'];   
   print '</div>';
   
   echo'<div class="col-md-6">';
   echo $re['pro'];   
   print '</div>';
}
echo '</div></div>';
?>
</tbody>
 </table>

<?php
// session_start();
// $_SESSION["favcolor"] = "yellow";
// print_r($_SESSION["favcolor"] );

?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>