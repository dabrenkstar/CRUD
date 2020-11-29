<?php
require_once('connect.php');

//echo json_encode($_POST);
if (isset($_REQUEST["method"])){
    $method = $_REQUEST["method"];
    if($method == "login"){
        $email = $_POST["email"];       
        $password = $_POST["password"]; //contraseña = cindy
       // echo 'email is: ' . $email . ' password is: ' . md5($password);

        // SUM: devolver la cantidad de usuarios que tienen ese email y contraseña
$quantity = Conex::getOne('SELECT SUM(id) FROM usuarios WHERE email = ? and password = ? ', array($email,md5($password)));
//termina el script
//exit();
            if($quantity == 0) {
               echo  " <script> alert('Contraseña equivocada'); document.location.href='index.php'</script>";
            }else{
                session_start();
              $_SESSION["usuario"]= $email; 
              header("Location:Table.php");    
            }
    }else  if($method == "forms"){
        $title = $_POST["title"];
        $autor = $_POST["autor"];
        $date = $_POST["date"];
        echo 'title is: ' . $title . ' autor is: ' . $autor . ' fecha is: ' . $date;
        // SUM: devolver la cantidad de usuarios que tienen ese email y contraseña
        if (isset($_POST["id"]) && ($_POST["id"]) ){
            $id = $_POST["id"];
            Conex::query('UPDATE libros set titulo = ?, autor = ?, fecha = ?  WHERE id= ?', array($title,$autor,$date,$id));

            echo  " <script> alert('Registro actualizado'); document.location.href='Table.php'</script>";
            }else{

     Conex::query('INSERT INTO libros(titulo,autor,fecha) VALUES(?,?,?) ', array($title,$autor,$date));
        //termina el script
        //exit();
               echo  " <script> alert('Registro insertado'); document.location.href='Table.php'</script>";
        }
            
    
    }else if($method=="eliminar"){
            $id = $_GET["id"];
            echo 'id: ' . $id;
        Conex::query('DELETE FROM libros WHERE id= ? ', array($id));

        echo  " <script> alert('Registro eliminado'); document.location.href='Table.php'</script>";
    }
     
  else if($method=="cerrar_sesion"){
      session_start();
      session_destroy();
    header("Location:index.php"); 
  }
    else{
        echo "Incorrecto";
    }
   
    


} 
else{
    echo "method false";
}





?>


