<!doctype html>
<?php
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="agenda";
$conexion=mysqli_connect($db_server,$db_user,$db_password,$db_name);
mysqli_query($conexion, "SET NAMES 'utf8'");

// Borrar los datos
if(isset($_GET['delete_id']))
{
    $sql_query="DELETE FROM contactos WHERE id=".$_GET['delete_id'];
    mysqli_query($conexion,$sql_query);
    header("Location: $_SERVER[PHP_SELF]");
}
?>
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
        <div class="col-sm-6 offset-sm-3 mb-4">
          <h3>Registrar contacto</h3>
          <form action="registrar.php" method="post">
            <input type="text" class="form-control mt-3" name="nombre" placeholder="Nombre">
            <input type="text" class="form-control mt-3" name="apellidos" placeholder="Apellidos">
            <input type="text" class="form-control mt-3" name="telefono" placeholder="Teléfono">
            <input type="email" class="form-control my-3" name="email" placeholder="Email">
            <button type="submit" class="btn btn-primary btn-block" name="btn-pelis">ENVIAR</button>
          </form>
        </div>
      </div>
      <div class="row my-5">
          <div class="col-md-12">
              <h3>Lista de contactos</h3>
              <table class="table" align="center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php
                    $sql_query="SELECT * FROM contactos";
                    $result_set=mysqli_query($conexion,$sql_query);
                    while($row=mysqli_fetch_row($result_set)) {
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><i class="fas fa-user-edit"></i></a></td>

                <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><i class="fas fa-user-times"></i></a></td>    
                </tr>
                <?php
                }
                ?>
            </table>    
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