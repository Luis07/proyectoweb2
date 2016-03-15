<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap-responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/principal.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
    <section class="container ">
    <div class="col-md-12 ">
            <form  name="form_registro" method="POST" action="{{ url('/registro') }}">
                <div class="row ">
                    <div class="sombra col-md-7 borde col-md-offset-3 "> 
                        <h1 class=" h1 h1registro">Registro</h1>
                        <hr>
                        <p >Nombre: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="First-name" aria-describedby="sizing-addon1" name="Nombre" >
                        </div>
                        <p class="txt-izq">Apellido: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="Last-name" aria-describedby="sizing-addon1" name="Apellido">
                        </div>
                        <p class="txt-izq">Fecha de nacimiento: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                            <input type="date" class="form-control" placeholder="BirthDay" aria-describedby="sizing-addon1" name="Fecha de nacimiento">
                        </div>
                        <p class="txt-izq">Correo: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">@</span>
                            <input type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1"id="usuarioregistro"pattern="[^ @]*@[^ @]*" name="Correo">
                        </div>
                        <p class="txt-izq">ContraseÃ±a: </p>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1">  <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                            <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1"id="contrasenaregistro" name="ContraseÃ±a">
                        </div>
                        <div >
                            <input type="checkbox" id="checkterm" name="terminos" value="Terminos"/> 
                            Acepto las Condiciones del Servicio<br> 
                            y la Politica de Privacidad de Mailtto
                        </div>
                        <div class="div div_btn_acept_register">
                            <button class="button log_accept btn btn-primary" target="_blank"
                             >Acceder </button>  
                        </div>
                        <div class="div div_btn_cancel_register">
                           <button class=" btn btn-primary" type="button" onClick="location.href='{{asset('/')}}'" >Cancelar </button>
                       </div>
                   </div>
               </div>
           </form>
       </div>
   </section>
   <script type="text/javascript"  src="index.js"></script>
   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</body>
</html>