<?php
$host="localhost";
$user="root";
$password="";
$database="agenda";
$conexion=mysqli_connect($host,$user,$password,$database);
mysqli_query($conexion, "SET NAMES 'utf8'");
if(isset($_GET['edit_id']))
{
    $sql_query="SELECT * FROM contactos WHERE id=".$_GET['edit_id'];
    $result_set=mysqli_query($conexion,$sql_query);
    $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    
$sql_query = "UPDATE contactos SET nombre='$nombre',apellidos='$apellidos',telefono='$telefono', email='$email' WHERE id=".$_GET['edit_id'];
    
   if(mysqli_query($conexion,$sql_query))
   {
       ?>
        <script type="text/javascript">
            alert("Datos actualizados");
            window.location.href='index.php'
        </script>
    <?php
   }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Error durante la actualización de datos");
        </script>
    <?php
    }
}
if (isset($_POST['btn-cancel']))
{
    header("Location: index.php");
}

?>
<!doctype html>
<html lang="es-ES">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <style type="text/css">
        .jumbotron {
              background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url("img/bg.jpg");
              background-size: cover;
              background-position: center;
              color: #fff;
              padding: 80px 0;
              border-radius: 0;
        }  
      
    </style>
    
    <script type="text/javascript">
      function delete_id(id)
          {
              if(confirm('¿Seguro que quieres borrar el contacto?'))
                  {
                      window.location.href='index.php?delete_id='+id;
                  }
          }
          
      function edit_id(id)
          {
              if(confirm('¿Seguro que quieres editar el contacto?'))
                  {
                      window.location.href='editar.php?edit_id='+id;
                  }
          }
      
      </script>

    <title>Agenda Diabólica</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
      <!-- Brand -->
      <a class="navbar-brand" href="#">Agenda Diabólica</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      </div>
    </nav> 
    <div class="jumbotron text-center">
        <h1>Contactos del más allá y del más acá</h1>
        <p>Mu' chungo todo</p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3 mb-5">
          <h3>Editar contacto</h3>
          <form method="post">
            <input type="text" class="form-control mt-3" name="nombre" placeholder="Nombre" value="<?php echo $fetched_row['nombre']; ?>">
            <input type="text" class="form-control mt-3" name="apellidos" placeholder="Apellidos" value="<?php echo $fetched_row['apellidos']; ?>">
            <input type="text" class="form-control mt-3" name="telefono" placeholder="Teléfono" value="<?php echo $fetched_row['telefono']; ?>">
            <input type="email" class="form-control my-3" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>">
            <div class="form-row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block" name="btn-update">ENVIAR</button>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-danger btn-block" name="btn-cancel">CANCELAR</button>
                </div>
            </div>
          </form>
        </div>
      </div>
      </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>