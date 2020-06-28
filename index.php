<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">
   <style rel="stylesheet">
     .table{
      width:50%;
     text-align:center;
     margin:0 auto;
}
    </style>
</head>
<body>
<?php
// // Desactivar toda notificación de error
     error_reporting(0); 
    //require_once("vista/inicio.php");
    session_start();
    if(!isset($_SESSION['Reg']))
        require_once("vista/inicio.php");
    else {
        if($_SESSION['Reg'] != 'ok')
            require_once("vista/inicio.php");
        /* else
            require_once("vista/biblio_Vista.php"); */
    }
    if($_POST)
    {
        $controlador = $_POST['controlador'];
        $accion = $_POST['accion'];
        if(file_exists("controlador/{$controlador}.php"))
        {
            require_once("controlador/{$controlador}.php");
            $control = new $controlador();
            $control->$accion($_POST);
        }
    }

    
    if(isset($_GET['b'])){
        session_destroy();
        header('Location: index.php');
    }     
?>
</body>
</html>
