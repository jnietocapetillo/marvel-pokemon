<!DOCTYPE html>
<html lang="es">
@include ('include/head')

<body>
    
@include ('include/header')
<h1 class="text-center text-warning">COMICS</h1>
<div>
    <table class="table">
  <thead>
    <tr>
      <td></td>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
  <?php for ($i=0; $i < count($comics); $i++) { ?>
    
    <tr>
      <th><?php echo $i+1;?></th>
      <td><?php echo $comics[$i]['title'];?></td>
      
    </tr>
  <?php }?>
  </tbody>
</table>


</div>
    

 @include ('include/footer')

</body>
</html>