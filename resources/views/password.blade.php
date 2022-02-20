<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>HTML</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>

<body>
    <style type="text/css">
       .intro {
  height: 100%;
}

@media (min-height: 300px) and (max-height: 450px) {
  .intro {
    height: auto;
  }
}

.gradient-custom {
  background: blue;
  background-blend-mode: screen, color-dodge, overlay, difference, normal;
}
        </style>
<form action=">" method="POST">
    <section class="intro">
        <div class="mask d-flex align-items-center h-100" style="background-color: #D6D6D6;">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card" style="border-radius: 1rem;">
                  <div class="card-body p-5 text-center">
      
                    <div class="my-md-5 pb-5">
      
                      <h1 class="fw-bold mb-0">Laravel</h1>
      
                      <i class="fas fa-user-astronaut fa-3x my-5"></i>
                      <p><label class="form-label" for="typeEmail">Este correo ha sido registrado en nuestro sitio web. 
                        Se te ha enviado un Codigo para confirmar que eres el propietario de la cuenta.
                      </label></p>
                      <h2>Codigo de Verificacion: </h2>
                      <h2>{{$pass}}</h2>
                      
                      
      
                      
      
                    </div>
      
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
</body>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->

</html>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
     <h1>NO Compartas esta informacion....</h1>
    <h2>Codigo de Verificacion = {{$pass}}</h2>
</body>
</html>
-->