<!DOCTYPE html>
<html lang="es">
<head>
    
  <meta charset="utf-8">
  <title>Correo Electronico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>


<style type="text/css">
.equis{
    border-width:10px;
    border-style:dotted;
    border-color:red;
    background:;
    width:50%;
    text-align:center;
    position: absolute;
    top: 25%;
    left: 22%;
    margin-top: -25px;
}
</style>

<form action="{{ route('save')}}" method="POST">
@csrf
<p style="text-align:center">
<table class="equis">
<tr>
  <td>
  <h1><p>LARAVEL</p></h1>
  
   <div class="">
   <label for="" class="">Correo Electronico </label>
     <input type="text" name="correo">
   </div>

   <div class="">
       <p>
   <button name="favorito" type="submit">Siguiente</button>
     <p></p>
   </div>
 
     
  </td>
</tr>
</table>
</p>


</form>
</body>
</html>