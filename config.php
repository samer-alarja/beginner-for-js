<?php
$username = "root";
$password="";
// $username1=$_POST['UserName'];
// $email1=$_POST['email'];
// $password1=$_POST['password'];
$link = mysqli_connect('localhost', 'root', '' ,'samer');

// try{
//     $database =new PDO("mysql:host=localhost;dbname=samer;charset=utf8;",$username,$password);
//     $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                       
//         $sql = $database->prepare(
//                     "SELECT * 
//                         FROM login 
//                         WHERE 
//                         username = ':username'
//                         and 
//                         password = ':password'");
//                         $sql->bindParam(':username',$_REQUEST['UserName']);
//                         $sql->bindParam(':password',$_POST['password']);
//                         $sql->execute();
                
//                         var_dump($sql);
//                     foreach( $sql as $kaka ):

//                         var_dump($kaka);

//                     endforeach;
//                } catch(PDOException $e) {
//   echo "Error: " . $e->getMessage();
// }
?>