<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:index.php");    
  }

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $row = Conex::getRow('SELECT * FROM libros WHERE id = ?', array($id));
}



?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Start your project here-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-sm-3">
                <!-- Default form login -->
            
<!----------------------------------->

<div class="container-fluid">
<div class="row">
<a class="btn aqua-gradient btn-sm" style="float:left;margin-left:-300px;" href="Table.php">Anterior <i class="fa fa-reply"></i></a>
</div>

           <div class="col-12">
              <h3>BOOKS</h3>
           </div> 

   <form class="text-center" action="controller.php" method="POST">  
            <div class="col-12 col-md-9">
            <div class="md-form">
            <input type="hidden" name="id" value="<?php echo (isset($row->id))? $row->id :'' ?>">
            <input type="hidden" name="method" value="forms">
        <input type="text" id="materialLoginFormEmail" class="form-control"  value="<?php echo @$row->titulo ?>" name="title">
        <label for="materialLoginFormEmail">Title</label>
      </div>


      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" class="form-control"  value="<?php echo (isset($row->autor))? $row->autor  :'' ?>" name="autor">
        <label for="materialLoginFormEmail">Autor</label>
      </div>

                   
      <div class="md-form">
        <input type="Date" id="materialLoginFormEmail" class="form-control"  value="<?php echo @$row->fecha ?>" name="date">
      </div>


                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">
                                Send 
                            </button>
                        </div>
                    </div>

                </form>
            </div>
       </div>

    </div>



<!----------------------------->
        </div>
    </div>
    <!-- Default form login -->
    </div>
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>