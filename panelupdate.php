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
        function validatemyform() {
            var error = 0;
                if($('#fname').val() == ''){
                        $('.errorfname').html('error, this field is required')
                        error = 1 ;
                }
                if($('#password').val() == ''){
                        $('.errorPassword').html('error, this field is required')
                        error = 1 
                }
                if($('#email').val() == ''){
                        $('.errorEmail').html('error, this field is required')
                        error = 1
                }

                if(error == 1 ){
                    return false;
                }
            }
    </script>
</head>
<body>
   <h1 >update </h1> 
   <?php 
        $select = mysqli_query($link , 'select username,email,password From login where id = '.$_SESSION['id']);
        list($username , $email , $password )  = mysqli_fetch_row($select);
   ?>
   <?php
            if(isset($_GET['error']) === true && $_GET['error'] == 1){
                echo '<div class="alert" >Some field is missings</div>';
            }
   ?>
                 <form  name="myform" method="post" class="container" onsubmit="return validatemyform();" action="panelupdate.php">
                    <div class="Row" >
                     <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                          new  UserName:
                        </label>
                        <div class="errorfname" ></div>
                        <input type="text" id="fname" value="<?php echo $username ?>" class="form-control" name="UserName" />
                    </div>
                        <div class="form-group col-md-6">
                            <label for="password">
                               new Password:
                            </label>
                        <div class="errorPassword" ></div>
                            <input type="password" id="password"  value="<?php echo $password ?>"  class="form-control" name="password" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">
                               new email:
                            </label>
                        <div class="errorEmail" ></div>
                            <input type="email" id="email" class="form-control"  value="<?php echo $email ?>"  name="email" />
                        </div>
                        <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-danger" style="margin:10px">update</button> 
                    </div>
                      </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>
    <?php 
    if(isset($_POST['UserName']) === true && $_POST['UserName'] != ''){
              $newUserName=$_POST['UserName'];
              $newpassword=$_POST['password'];
              $email=$_POST['email'];
             mysqli_query($link , 'UPDATE 
                                        login 
                                        SET 
                                        username="'.$newUserName.'",
                                        PASSWORD="'.$newpassword.'",
                                        email="'.$email.'"
                                        WHERE id='.$_SESSION['id']);
        header('location: panel.php?success=1');
    }
    ?>
