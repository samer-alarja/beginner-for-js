   <?php 
    include 'config.php'; 
    if(isset($_GET['id']) === true && $_GET['id'] != ''){
             $val = $_GET['id'];
             mysqli_query($link , 'DELETE   
                                   FROM product   
                                   WHERE product.id = '.$val);
                header('location: panel.php?success=2');  
    }
    ?>
    
              
             