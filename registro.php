<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

  <h1>Registro de usuarios</h1>


  <!-- is-valid
is-invalid  -->

  <?php     //etiqueta      variable

  if (!isset($_POST['usuario'])) {
    $nombre = null;
    $email = null;
    $sexo = null;
    $edad = null;
    $observaciones = null;
    $contrasena = null;
    $check = null;
  } else {
    $nombre = $_POST['usuario'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edadu'];
    $observaciones = $_POST['obv'];
    $contrasena = $_POST['cont'];
    $check = $_POST['check'];
  }
  $total = null;


  $errores = [
    'user' => $nombre,
    'checkb' => $check,
    'email2' => $email,
    'sexo' => $sexo,
    'edad' => $edad,
    'Observaciones' => $observaciones,
    'contrasena' => $contrasena
  ];
  $estilos = [];
  $valor1 = null;
  $valor2 = null;
  $valor3 = null;
  $valor4 = null;
  $valor5 = null;
  $valor6 = null;

  $validacion = [];
  foreach ($errores as $etiq => $error) {

    $estilos = [$etiq => 'form-control'];
  }


  // echo "<pre>";
  // printf(var_dump($_POST));
  // echo "<br>";
  // printf(var_dump($errores));
  // echo "</pre>";



  // var_dump($_POST['usuario']);

  $busca = '@';
  $pos = strpos($email, $busca);

  $valor = null;





  if (isset($nombre) && $nombre != null) {
    $estilos['user'] = 'form-control is-valid';
    $valor1 = $nombre;
    $validacion[1] = 0;
  } else {
    $estilos['user'] = 'form-control is-invalid';
    $validacion[1] = 1;
  }

  if (isset($edad) && $edad != null && $edad > 0 && $edad <= 100) {
    $estilos['edad'] = 'form-control is-valid';
    $valor2 = $edad;
    $validacion[2] = 0;
  } else {
    $estilos['edad'] = 'form-control is-invalid';
    $validacion[2] = 1;
  }

  if (isset($email) && $email != null && $pos != false) {
    $estilos['email2'] = 'form-control is-valid';
    $valor3 = $email;
    $validacion[0] = 0;
  } else {
    $estilos['email2'] = 'form-control is-invalid';
    $validacion[0] = 1;
  }

  if (isset($sexo) && $sexo != null) {
    $estilos['sexo'] = 'form-control is-valid';
    $valor4 = $sexo;
    $validacion[3] = 0;
  } else {
    $estilos['sexo'] = 'form-control is-invalid';
    $validacion[3] = 1;
  }
  if (isset($observaciones) && $observaciones != null) {
    $estilos['Observaciones'] = 'form-control is-valid';
    $valor5 = $observaciones;
    $validacion[4] = 0;
  } else {
    $estilos['Observaciones'] = 'form-control is-invalid';
    $validacion[4] = 1;
  }
  if (isset($contrasena) && $contrasena != null && strlen($contrasena) > 6) {
    $estilos['contrasena'] = 'form-control is-valid';
    $valor6 = $contrasena;
    $validacion[5] = 0;
  } else {
    $estilos['contrasena'] = 'form-control is-invalid';
    $validacion[5] = 1;
  }

  if (isset($check) && $check != null) {
    $estilos['checkb'] = 'form-check-input is-valid';
    $validacion[6] = 0;
  } else {
    $estilos['checkb'] = 'form-check-input is-invalid';
    $validacion[6] = 1;
  }



  foreach ($validacion as $valida) {
    $total += $valida;
  }

  if ($total >= 1) {
    echo "
<form method = post>
  <div class='form-row'>
 
    <div class='col-md-4 mb-3'>
      <label >Nombre de usuario</label>
      <div class='input-group'>
        <div class='input-group-prepend'>
          <span class='input-group-text' >@</span>
        </div>
        <input type='text' class='$estilos[user]' name='usuario'  placeholder='Nombre de usuario' value = '$valor1' aria-describedby='inputGroupPrepend3'  >
        <div class='invalid-feedback'>
          El nombre de usuario es obligatorio 
        </div>
      </div>
    </div>
    <div class='col-md-4 mb-3'>
      <label for='validationServer01'>Dirección de correo electrónico</label>
      <input type='text'  name='email' class='$estilos[email2]' value = '$valor3'  placeholder='E-mail'  >
      <div class='valid-feedback'>
        Datos verificados.
      </div>
      <div class='invalid-feedback'>
      El email debe estar bien escrito.
    </div>
    </div>
    <div class='col-md-4 mb-3'>
      <label for='validationServer02'>Edad</label>
      <input type='Number' name='edadu' class='$estilos[edad]'  value= '$valor2' placeholder='Edad' value='Otto'  >
      <div class='valid-feedback'>
       Datos verificados
      </div>
      <div class='invalid-feedback'>
      La edad debe ser entre 0 y 100.
    </div>
    </div>
  </div>
  <div class='form-row'>
    <div class='col-md-2 mb-3'>
      <label for='validationServer03'>Sexo</label>
      <select  name='sexo' class='$estilos[sexo]' value = '$valor4'>
      <option selected> Seleccione uno </option>
      <option> Hombre </option>
      <option> Mujer </option>
      <option> Prefiero no especificarlo </option>
      </select>
      <div class='invalid-feedback'>
      
      </div>
    </div>
    <div class='col-md-4 mb-3'>
      <label for='validationServer04'>Observaciones</label>
      <input type='text' class='$estilos[Observaciones]' name='obv'   placeholder='Observaciones' value='$valor5' >
      <div class='invalid-feedback'>
        
      </div>
    </div>
    <div class='col-md-6 mb-3'>
      <label for='validationServer05'>Contraseña</label>
      <input type='password' class='$estilos[contrasena]'  name ='cont' placeholder='Contraseña' value='$valor6'  >
      <div class='invalid-feedback'>
        Por favor escoge una contraseña más segura.
      </div>
    </div>
  </div>
  <div class='form-group'>
    <div class='form-check'>
    <input class='$estilos[checkb]' type='checkbox' name='check' value='y'/>
      <label class='form-check-label'>
        Aceptar términos y condiciones de uso.
      </label>
      <div class='invalid-feedback'>
        Debes aceptar los términos antes de continuar
      </div>
    </div>
  </div>
  <button class='btn btn-primary' type='submit'>Enviar</button>
</form>";
  } else if ($total == 0) {
    echo "
    <div class='alert alert-success' role='alert'>
  Te has registrado correctamente, te llegará un email en breves con el link de confirmación!
    </div>";
  }
  ?>
</body>

</html>