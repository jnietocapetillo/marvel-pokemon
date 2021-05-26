<!DOCTYPE html>
<html lang="es">
@include ('include/head')

<body>
    
@include ('include/header')

<!-- cuerpo de inicio -->
<div class="container pt-5">
    <div class="d-flex flex-row justify-content-center alig-content-center">
        <div class="p-2">
            <a href="/marvel/listado" class="btn btn-info mr-2 p-2">Personajes</a>
        </div>
        <div class="p-2">
            <a href="/marvel/comics" class="btn btn-info">Comics</a>
        </div>
        <div class="p-2 d-inline">
            <form method="post" action= "{{ route('un_personaje') }}">
            @csrf
            <label for="id" class="">Personaje por ID:</label>   
            <input type="text" id="id" name="id" class="form-control" value=""><button type="submit" class="btn btn-info">Buscar</button>
            </form>
        </div>
    </div>
</div>
<div>
    

</div>



 @include ('include/footer')

</body>
</html>