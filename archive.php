<?php include"includes/header.php" ?>
<nav width="100%" class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <form class="form-inline" action="search.php" method="post">
     
      <input name="submit" style="background-color:#343A40;color:#343A40;" class="form-control mr-sm-2" value="Search" type="submit">
 <input type="text"style="color:white;margin-right:3px;" placeholder="...بحث" name="search" class="btn btn-outline-danger">
      <button  name="add_malade" type="button" class="btn btn-outline-danger"><a style="color: white ;" href="archive.php">قائمة المرضى</a></button>
      <button  name="add_malade" type="button" class="btn btn-outline-danger"><a href="add_malade.php" style="color:white;">اضافة مريض</a></button>
     <button style="color:white;" name="add_malade" type="button" class="btn btn-outline-danger"><a href="index.php" style="color:white;">خروج</a></button>
      
  </form>
</nav>
  <!--display data on table -->
<form action="" method="post" >
 <table class="table table-striped  table-bordered ">
<thead class="">
    <tr>
    
  <th>التاريخ</th>
    <th>اللقب</th>
     <th>الاسم</th>
    <th>الاشياء التي تمت معالجتها</th>
    <th>السعر المعطى</th>
    <th>السعر النهائي</th>
        <th>الموعد القادم</th>
    </tr>
    </thead>
     <tbody>
         <?php
    $query="SELECT * FROM archive" ;
    $select_malade=mysqli_query($connection,$query);
    if(!$select_malade){
        die("QUERY FAILED" .mysqli_error($connection));
    }
    while($row=mysqli_fetch_assoc($select_malade)){
        $cat_id=$row['id'];
    $date=$row['date'];
    $nom=$row['nom'];
     $prenom=$row['prenom'];
     $tache=$row['tache'];
     $prix_donne=$row['prix_donne'];
     $prix_final=$row['prix_final'];
     $rendez_vou=$row['rendez_vou'];
        echo"<tr>";
         echo "<td>$date</td>";
         echo "<td>$nom</td>";
         echo "<td>$prenom</td>";
         echo "<td><textarea cols='50' rows='3'>$tache</textarea></td>";
         echo "<td>$prix_donne</td>";
         echo "<td>$prix_final</td>";
         echo "<td>$rendez_vou</td>";
        echo"<td><button class='btn btn-info' ><a style='color:white;'href='edit_malade.php?edit_id=$cat_id'>تعديل</a></button><button style='margin-left:2px;' class='btn btn-danger'><a style='color:white;' href='archive.php?del_id=$cat_id'>حذف</a></button></td>";
          
        echo "</tr>";
        
    }




?>
     </tbody>

</table>
</form>
<?php
if(!empty($_GET['del_id'])){
    $cat_id=$_GET['del_id'];
$query="DELETE FROM archive WHERE id=$cat_id ";
$delete_malade=mysqli_query($connection,$query);
   
    }
?>

<?php include"includes/footer.php"?>


