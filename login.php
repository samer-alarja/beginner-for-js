 
<?php session_start();
if(isset($_SESSION['login']) === true && $_SESSION['login'] == 'xxx'){

    header('location:panel.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <style>
    /* welcome to jroan */
</style>
<head>
<title>login page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
          include 'config.php'; 
         function validatemyform() {
             const inpObj = document.getElementById("fname");
             const inpObj1 = document.getElementById("password");

             if (!inpObj.checkValidity()) {
             document.getElementById("error").innerHTML = "error";
             } 
             else (!inpObj1.checkValidity())
             { document.getElementById("error").innerHTML = "error";

              } }
    </script>
</head>
<body>
    <?php if (isset($_GET['error']) === true &&  $_GET['error'] == 1 ) { ?>
        <div class="alert">
    Invalid login: Please try again
        </div>
    <?php } ?>
        <?php if (isset($_GET['error']) === true &&  $_GET['error'] == 2 ) { ?>
        <div class="alert">
     You can`t access this page without login.
        </div>
    <?php } ?>
      <div id="error"> </div>
                 <form action="check_login.php" method="post" class="container" onsubmit="return validatemyform();">
                    <div class="Row">
                     <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                            UserName:
                        </label>
                        <input type="text" id="fname" class="form-control" name="UserName" require />
                    </div>
                        <div class="form-group col-md-6">
                            <label for="password">
                                Password:
                            </label>
                            <input type="password" id="password" class="form-control" name="password" require />
                        </div>
                        <Div class="form-group col-md-6">
                        <button type="submit" class="btn btn-primary" style="margin:10px">submit</button> 
        </div>
                        <!-- <button type="submit" class="btn btn-primary" style="margin:10px">SELECT ALL</button> -->
        </div>
                </form>
            </div>
        </div>
    </div>
</form>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>