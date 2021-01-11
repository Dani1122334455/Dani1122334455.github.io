<!DOCTYPE html>
<html lang="en">

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
    <title>Juego</title>
</head>

<body>
    <div id="tablero">
        <div id="estante1" class="estante"></div>
        <div id="estante2" class="estante"></div>
        <div id="estante3" class="estante"></div>
        <div id="estante4" class="estante"></div>
        <div id="estante5" class="estante"></div>
        <div id="estante6" class="estante"></div>
        <div id="estante7" class="estante"></div>
        <div id="estante8" class="estante"></div>
        <div id="estante9" class="estante"></div>
        <div id="estante10" class="estante"></div>
        <div id="estante11" class="estante"></div>
        <div id="estante12" class="estante"></div>
        <div id="estante13" class="estante"></div>
        <div id="estante14" class="estante"></div>
        <div id="estante15" class="estante"></div>
        <div id="estante16" class="estante"></div>
        <div id="estante17" class="estante"></div>
        <div id="estante18" class="estante"></div>
        <div id="estante19" class="estante"></div>
        <div id="estante20" class="estante"></div>
        <img src="img/mapa.png" width="100%" height="700px">
        <!-- <div id="bola" src="img/Derecha.png" width="60px" height="60px" style="position: absolute"></div> -->
        <script src="js.js"></script>
    </div>
    <center>
        <br>
        <button class="boton_personalizado" OnClick="location.href='Inicio.php'">Volver al Menu</button>
        <!-- Button trigger modal -->
        <button id="boton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle"></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h3 class="modal-title" id="exampleModalLongTitle">HAS GANADO</h3>
                    <div class="modal-footer">
                        <center>
                            <form action="\RECOMENSSEM\PAGINAS\JUEGOS\juegos.php" method="POST" >

                                <button type="submit" class="btn btn-primary" name="vengoJUEGO" >Salir</button>
        
                                <input type="hidden" id="infoGanador" name="infoGanador" value="GANADOR">
                                <input type="hidden" id="idJuego" name="idJuego" value=3 >
                
                            </form>
                            

                        </center>
                    </div>
                </div>
            </div>
        </div>
    </center>


</body>

</html>