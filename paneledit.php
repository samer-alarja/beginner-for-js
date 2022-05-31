<?php 
    session_start(); 
    include 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <style>     
        h1 {margin-left:600px;}  
</style>
<head>
<title>login page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
   //mkkl   
    </script>
</head>
<body>
   <h1 >edit </h1> 
   <?php 
        $select = mysqli_query($link , 'select id as id1,mo_year, cat_id From product where id = '.$_GET['id']);
        list($id , $mo_year , $cat_id )  = mysqli_fetch_row($select);
        // $select2 = mysqli_query($link , 'SELECT * FROM category');
        // list($id2 , $name , $parent )  = mysqli_fetch_row($select);
   ?>
    <?php 
            $select_product = mysqli_query($link , ' SELECT category.name  as cat_name 
                             FROM product JOIN category 
                             ON product.cat_id = category.id 
                             WHERE category.id = product.cat_id');
 ?>
   <?php
            if(isset($_GET['error']) === true && $_GET['error'] == 1){
                echo '<div class="alert" >Some field is missings</div>';
            }
   ?>
                 <form  name="myform" method="post" class="container" >
                    <div class="Row" >
                     <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                          category:
                        </label>
                        <div class="errorfname" ></div>
                        <input type="text" id="fname" value="<?php echo $mo_year ?>" class="form-control" name="category" />
                    </div>
                        <div class="form-group col-md-6">
                         <label for="cars">Choose a car:</label>
                   <?php echo '<select name="cars" id="cars">';
                    while($exc = mysqli_fetch_assoc($select_product)){
                       echo '<option value="volvo" name:"car">'.$exc['cat_name'].'</option>';
                                   }
                       echo '</select>';?>
                        <div class="errorPassword" ></div>                     
                        <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-danger" style="margin:10px">edit</button> 
                    </div>
                    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body> 
</html>
<?php 
    if(isset($_POST['category']) === true && $_POST['category'] != ''){
            $newcategory=$_POST['category'];
             mysqli_query($link , 'UPDATE product   
                                        SET 
                                        mo_year="'.$newcategory.'",
                                        WHERE id='.$id);
        header('location:panel.php');
    }
    ?>   