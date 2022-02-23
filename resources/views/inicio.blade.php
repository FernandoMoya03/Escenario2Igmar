<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="icon" href="{{ asset('images/equis.png') }}">
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
  background: radial-gradient(50% 123.47% at 50% 50%, #00FF94 0%, #720059 100%), linear-gradient(121.28deg, #669600 0%, #FF0000 100%), linear-gradient(360deg, #0029FF 0%, #8FFF00 100%), radial-gradient(100% 164.72% at 100% 100%, #6100FF 0%, #00FF57 100%), radial-gradient(100% 148.07% at 0% 0%, #FFF500 0%, #51D500 100%);
  background-blend-mode: screen, color-dodge, overlay, difference, normal;
}
</style>



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
                      <p></p>
                    
                      <form action="{{ route('save')}}" method="POST">
                      @csrf
                      <div class="form-outline mb-4">
                        <input type="text" name="correo" class="form-control form-control-lg b" />
                        <label class="form-label" for="typeEmail">Email:</label>
                      </div>
                      <button class="btn btn-primary btn-lg btn-rounded gradient-custom text-body px-5" name="favorito "type="submit">Siguiente</button>
                      <p></P>
                      </form>
           
    
                    </div>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    
    
</body>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>

<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
  rel="stylesheet"
/>


 </html>
