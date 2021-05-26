<!DOCTYPE html>
<html lang="es">
@include ('include/head')

<body>
    
@include ('include/header')
<h1 class="text-center text-warning">PERSONAJES MARVEL</h1>
<div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
  <?php for ($i=0; $i < count($listado); $i++) { ?>
    
    <tr>
      <th><?php echo $i+1;?></th>
      <td><?php echo $listado[$i]['id'];?></td>
      <td><img src="<?php echo $listado[$i]['thumbnail']['path'].'.'.$listado[$i]['thumbnail']['extension'];?>" width="50px" height="50px"></td>
      <td><?php echo $listado[$i]['name'];?></td>
      
    </tr>
  <?php }?>
  </tbody>
</table>


</div>
    

 @include ('include/footer')

</body>
</html>