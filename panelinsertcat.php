<h1> category</h1>
<?php include "header.php" ?>
<form  name="myform" method="post" class="container" action="panelinsertcat.php?insertcategory=1">
                    <div class="Row" >
                    <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                          category_name:
                        </label>
                        <div class="errorfname" ></div>
        <input type="text" id="fname"  class="form-control" name="category_name" />
                   </div>
                    <div class="mb-3 form-group col-md-6">
                        <label class="form-label" for="firstname">
                          category_parent:
                        </label>
                        <div class="errorfname" ></div>
 <?php 
            $select_category = mysqli_query($link , ' SELECT * from category');
 ?>
                                <?php echo '<select name="category_parent" id="cars">';
                                echo '<option value="0">select a parent</option>'; 
                    while($exc2 = mysqli_fetch_assoc($select_category)){ 
                       echo '<option value="'.$exc2['id'].'" '.$selected.'  >'.$exc2['parent'].'</option>';
                                   }
                       echo '</select>';?>     
                     </div>
                        <button type="submit" class="btn btn-danger" style="margin:10px">insert to table</button>             
</form> 
    <?php 
    if(isset($_GET['insertcategory']) === true && $_GET['insertcategory'] == 1 ){
              $cat_name=$_POST['category_name'];
              $cat_parent=$_POST['category_parent'];
              $insert_category = mysqli_query($link , 'INSERT INTO category(name, parent) 
                                          VALUES ( "'.$cat_name.'","'. $cat_parent.'")');
}
 ?>
<?php include "footer.php"?>
