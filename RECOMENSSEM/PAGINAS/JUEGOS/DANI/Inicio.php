<!DOCTYPE html>
<html lang="en">
  <?php
  include_once("../../../php_partials/menu.php");
  ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
  <title>Inicio</title>
</head>

<body style="background-image: url(img/fondomercado.jpeg); background-size: cover;">
  <center style="margin-top: 100px;">
    <img class="ejemplo" src="img/gif.gif" width="200px" height="200px">
    <br>
    <button class="boton_personalizado" OnClick="location.href='index.php'">Jugar</button>
    <br>
    <button type="button" class="boton_personalizado" data-toggle="modal" data-target="#exampleModalCenter">
      Ayuda
    </button>
    <br>
    <button class="boton_personalizado" OnClick="location.href='../juegos.php'">Salir</button>
  </center>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ayuda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Te encuentras en el mercado y tienes que buscar la salida para pagar tus productos.
          <br>
          Facil,sencillo y para toda la familia.
        </div>
        <div class="modal-footer">
          <center>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </center>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="js.js"></script>

</html>