<?php
include 'encabezado.php';
?>
<body>
    <div class="container-fluid">
        <div class="jumbotron">


            <h2>Infomación de la Empresa</h2>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Nombre Instituto:</label></div>
                <div class="col-md-6" id="nombre"> </div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Telefono:</label></div>
                <div class="col-md-6" id="telefono"></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Correo Electronico:</label></div>
                <div class="col-md-6" id="correo"></div>	
            </div>

            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Dirección:</label></div>
                <div class="col-md-6"id="direccion"></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-1"><label for="">Imagen:</label></div>
                <div class="col-md-5"><img id="imagen" src="" alt="" width="150" height="150"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1"></div>	
                <div class="col-md-2"><button  id="guardar" class="btn pull-left btn-success"></button></div>
            </div>
            <br>
            <br>


        </div>
    </div>
</div>
</body>