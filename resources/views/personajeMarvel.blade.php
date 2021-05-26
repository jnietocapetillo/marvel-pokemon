<!DOCTYPE html>
<html lang="es">
@include ('include/head')

<body>
    
@include ('include/header')
<h1 class="text-center text-warning">PERSONAJE ELEGIDO</h1>
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
    
    <tr>
      <td><?php echo $personaje[0]['id'];?></td>
      <td><img src="<?php echo $personaje[0]['thumbnail']['path'].'.'.$personaje[0]['thumbnail']['extension'];?>" width="50px" height="50px"></td>
      <td><?php echo $personaje[0]['name'];?></td>
      
    </tr>
  </tbody>
</table>


</div>
    

 @include ('include/footer')

</body>
</html>