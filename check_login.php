<?php include 'config.php'; ?>
<?php
                         session_start();
                         $select = mysqli_query($link, "SELECT * 
                                    FROM login 
                                   WHERE 
                                    username = '".$_POST['UserName']."'
                                    and 
                                    password = '".$_POST['password']."'
                                    and 
                                    active = '1' ");                           
                                    if(mysqli_num_rows($select) > 0 ){
                                        while($exc = mysqli_fetch_assoc($select)){
                                           $_SESSION['login'] = 'xxx';
                                           $_SESSION['id'] = $exc['id'];
                                           header('location:panel.php');
                                           exit;
                                        }
                                    }else{
                                        header('location:login.php?error=1');
                                        
                                    }
                
?>