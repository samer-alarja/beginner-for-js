  <h1> product</h1>
 <?php include "header.php" ?>
<form  name="myform" method="post" class="container" action="panelinsertpro.php?insertproduct=1">
                    <div class="Row" >
                    <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                          product_mo_year:
                        </label>
                        <div class="errorfname" ></div>
                              <input type="text" id="fname"  class="form-control" name="product_mo_year" />
     
                      </div>

                    <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                          product_cat_id:
                        </label>
                        <div class="errorfname" ></div>
 <?php 
            $select_product = mysqli_query($link , ' SELECT * from product');
 ?>
                                <?php echo '<select name="product_cat_id" id="cars">';
                                echo '<option value="0">select a year</option>'; 
                    while($excc = mysqli_fetch_assoc($select_product)){ 
                       echo '<option value="'.$excc['id'].'" '.$selected.'  >'.$excc['cat_id'].'</option>';
                                   }
                       echo '</select>';?>                       </div>
                        <button type="submit" class="btn btn-danger" style="margin:10px">insert to table</button>            
</form>
    <?php 
    if(isset($_GET['insertproduct']) === true && $_GET['insertproduct'] == 1 ){
              $pro_mo_year=$_POST['product_mo_year'];
              $pro_cat_id=$_POST['product_cat_id'];
              $insert_product = mysqli_query($link , 'INSERT INTO product( mo_year , cat_id) 
                                          VALUES ( "'.$pro_mo_year.'","'. $pro_cat_id.'")');
 }
    ?>
<?php include "footer.php"
?>                   
