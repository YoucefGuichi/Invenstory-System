
<?php include"includes/header.php" ?>
<?php
if(isset($_POST['ajouter_malade'])){
    
    $date=$_POST['date'];
    $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $tache=$_POST['tache'];
     $prix_donne=$_POST['prix_donne'];
     $prix_final=$_POST['prix_final'];
     $rendez_vou=$_POST['rendez_vou'];
    $query="INSERT INTO archive(date,nom,prenom,tache,prix_donne,prix_final,rendez_vou) ";
    $query.=" VALUES('$date',' $nom','$prenom','$tache','$prix_donne','$prix_final','$rendez_vou')" ;
    $add_sick_query = mysqli_query($connection,$query);
    if(!$add_sick_query){
        die("QUERY FAILED" .mysqli_error($connection));
    }
    
   
    
}
?>
 <nav width="100%" class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <form class="form-inline" action="" method="post">
     
      <input name="submit"style="background-color:#343A40;color:#343A40;" class="form-control mr-sm-2" value="Search" type="submit"  >
      
      <input type="text"style="color:white;margin-right:3px;" placeholder="...بحث" name="search" class="btn btn-outline-danger">
      
      <button  name="add_malade" type="button" class="btn btn-outline-danger"><a style="color: white ;" href="archive.php">قائمة المرضى</a></button>
     
      <button  name="add_malade" type="button" class="btn btn-outline-danger"><a href="add_malade.php" style="color:white;">اضافة مريض</a></button>
      
     <button style="color:white;" name="add_malade" type="button" class="btn btn-outline-danger"><a href="index.php" style="color:white;">خروج</a></button>
      
  </form>
</nav>
    












<form method="post">
  <div class="form-row">
    <div class="form-group col-md-2">
      <input  type="text" class="form-control" id="inputEmail4" placeholder="اللقب" name="nom">
    </div>
    <div class="form-group col-md-3">
      <input  type="text" class="form-control" id="inputPassword4" placeholder="الاسم" name="prenom">
    </div>
  </div>
  <div class="form-group col-md-2">
    <input value="<?php echo date('d-m-y') ?>" type="text" class="form-control" id="inputAddress" placeholder="التاريخ" name="date">
  </div>
  <div class="form-group">
   <textarea class="form-control" id="inputAddress2" placeholder="الاشياء التي تمت معالجتها " name="tache"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2"> 
      <input value="0DA"type="text" class="form-control" id="inputCity" placeholder="السعر المعطى" name="prix_donne">
    </div>
      <div class="form-group col-md-2">
      <input value="0DA" type="text" class="form-control" id="inputCity" placeholder="السعر النهائي" name="prix_final">
    </div>
    <div class="form-group col-md-3">
       <input  type="text" class="form-control" id="inputCity" placeholder="الموعد القادم" name="rendez_vou">
    </div>
  </div>
  <input name="ajouter_malade"type="submit" value="اضافة" class="btn btn-primary">
</form>
<?php include"includes/footer.php"?>