<?php include"includes/header.php"?>
<?php
if(isset($_GET['edit_id'])){
    $the_edit_id=$_GET['edit_id'];
    $query="SELECT * FROM archive WHERE id= $the_edit_id" ;
    $edit_query=mysqli_query($connection,$query);
    if(!$edit_query){
    die("QUERY FAILED".mysqli_error($connection));
    }
    while($row=mysqli_fetch_assoc($edit_query)){
    $cat_id=$row['id'];
    $date=$row['date'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
     $tache=$row['tache'];
     $prix_donne=$row['prix_donne'];
     $prix_final=$row['prix_final'];
     $rendez_vou=$row['rendez_vou'];

}


}











?>
<nav width="100%" class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <form class="form-inline" action="" method="post">
     
      <input name="submit" style="background-color:#343A40;color:#343A40;"  class="form-control mr-sm-2" value="Search" type="submit">
      
      <input type="text"style="color:white;margin-right:3px;" placeholder="...بحث" name="search" class="btn btn-outline-danger">
      
      <button  name="add_malade" type="button" class="btn btn-outline-danger"><a style="color: white ;" href="archive.php">قائمة المرضى</a></button>
     
      <button  name="add_malade" type="button" class="btn btn-outline-danger"><a href="add_malade.php" style="color:white;">اضافة مريض</a></button>
     
      
     <button style="color:white;" name="add_malade" type="button" class="btn btn-outline-danger"><a href="index.php" style="color:white;">خروج</a></button>
      
  </form>
</nav>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-2">
      <input value="<?php echo $nom ?>" type="text" class="form-control" id="inputEmail4" placeholder="اللقب" name="nom">
    </div>
    <div class="form-group col-md-3">
      <input value="<?php echo $prenom ?>" type="text" class="form-control" id="inputPassword4" placeholder="الاسم" name="prenom">
    </div>
  </div>
  <div class="form-group col-md-2">
    <input value="<?php echo $date ?>" type="text" class="form-control" id="inputAddress" placeholder="التاريخ" name="date">
  </div>
  <div class="form-group">
   <textarea class="form-control" id="inputAddress2" placeholder="الاشياء التي تمت معالجتها" name="tache"><?php echo $tache ?></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2"> 
      <input value="<?php echo $prix_donne ?>"type="text" class="form-control" id="inputCity" placeholder="السعر المعطى" name="prix_donne">
    </div>
      <div class="form-group col-md-2">
      <input value="<?php echo $prix_final?>" type="text" class="form-control" id="inputCity" placeholder="السعر النهائي" name="prix_final">
    </div>
    <div class="form-group col-md-3">
       <input value="<?php echo $rendez_vou?>" type="text" class="form-control" id="inputCity" placeholder="الموعد القادم" name="rendez_vou">
    </div>
  </div>
  <input name="update"type="submit" value="تعديل" class="btn btn-primary">
</form>
<?php
  
    
if(isset($_POST['update'])){
    $date=$_POST['date'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
     $tache=$_POST['tache'];
     $prix_donne=$_POST['prix_donne'];
     $prix_final=$_POST['prix_final'];
     $rendez_vou=$_POST['rendez_vou'];
    $query="UPDATE archive SET date='$date',nom = '$nom',prenom='$prenom',tache='$tache',prix_donne='$prix_donne',prix_final='$prix_final',rendez_vou='$rendez_vou' WHERE id='$the_edit_id' " ;
    $update_sick_query=mysqli_query($connection,$query);
    if(!$update_sick_query){
                         die("QUERY FAILED".mysqli_error($connection));
                     
             }
    
}

?>
<?php include"includes/footer.php"?>