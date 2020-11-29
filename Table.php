<?php
require_once('connect.php');
session_start();
//echo json_encode($_SESSION);
//exit();
if(!isset($_SESSION["usuario"])){
  header("Location:index.php");  
}
$enters = Conex::getAll('SELECT * FROM libros', null);
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <style>  
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
    bottom: .5em;
    } </style>
</head>

<body>
    <!-- Start your project here-->
    <div class="container">
<div class="row">
<div class="col-12" style="padding-top:10px;">
<a class="btn peach-gradient btn-sm" style="float:right;margin-bottom:40px;" href="controller.php?method=cerrar_sesion">Cerrar sesion <i class="fa fa-door-closed"></i></a>
</div>        
</div>

        <div class="row">
            <div class="col-12"  style="padding-top:50px;">      
             <a class="btn aqua-gradient btn-sm" style="float:right;margin-bottom:40px;" href="forms.php">add <i class="fa fa-plus"></i></a>
            <table id="dtBasicExample" name="bookstore"class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" method="GET">
        <thead>
    <tr>
      <th class="th-sm">ID
      </th>
      <th class="th-sm">TITULO
      </th>
      <th class="th-sm">AUTOR
      </th>
      <th class="th-sm">FECHA
      </th>
      <th class="th-sm">ACCIONES
      </th>
    </tr>

  </thead>
  <tbody>

  <?php
    foreach ($enters as $key => $book) {
    ?>  
    <tr>
      <td><?php echo $book->id ?></td>
      <td><?php echo $book->titulo ?></td>
      <td><?php echo $book->autor ?></td>
      <td><?php echo $book->fecha ?></td>
      <td> <a class="btn  btn-warning btn-sm" style="border-radius:50px;" href="forms.php?id=<?php echo $book->id ?>"> <i class="fa fa-edit fa-lg"></i></a> 
      <a class="btn  btn-danger btn-sm" style="border-radius:50px;" onclick="eliminar('<?php echo $book->id ?>')"> <i class="fa fa-trash-alt fa-lg"></i></a> </td>
       </tr>
    <?php
    }      
    ?>
  </tbody>
</table>
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
      <!-- DataTable -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
}); 

function eliminar(id) {
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "error",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
    document.location.href = "controller.php?id=" + id + "&method=eliminar";
  } else {
    swal("Your imaginary file is safe!");
  }
});
  
}

</script> 

</body>

</html>