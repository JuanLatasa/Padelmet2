<?php
require 'header.php';
?>
<body>

  <div class="mx-auto">
    <h1 class="text-center p-5">REGISTRO</h1>
  </div>

  <div class="container py-4 px-4 d-flex justify-content-center bg-light mx-auto">

    <form action = 'backend.php' method = 'POST'>

      <div class="form-group row">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">Jamas compartiremos su informacion personal con nadie</small>
      </div>

      <div class="form-group row">
        <label for="exampleInputEmail1">Nombre de Usuario</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Usuario"  required>
      </div>

      <div class="form-group row">
        <label for="exampleInputPassword1">Password</label>
        <input  type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password" required>
      </div>

      <div class="form-check text-center mx-2">
        <label class="form-check-label" for="exampleCheck1">Acepto las reglas de Paddel Met</label>
        <input class="mx-2" type="checkbox" class="form-check-input" id="exampleCheck1">
      </div>
      
      <div class="text-center my-2">
        <button type="submit" value = 'submit' name= 'register' class="btn btn-primary ">Enviar</button>  
      </div>
      <div class="text-center my-2"> 
        <a href="../Index.php" >Tengo una cuenta. </a>
      </div>
      
    </form>
  
  </div>

</body>

</html>