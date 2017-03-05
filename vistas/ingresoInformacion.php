<?php
include 'encabezado.php';
?>
<div class="container-fluid">
    <div class="">
        <h2>Infomación de la Empresa</h2>

        <hr>
        <br>
        <form  id="form1">
            <div class="row">
                <div class="col-md-2"><label for="">Nombre Instituto:</label></div>
                <div class="col-md-4"><input type="text" maxlength="50" placeholder="Nombre de la Institución" name="Nombre" id="Nombre" class="form-control" 
                                             value=""></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="Error col-md-4" id="Error1" ></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Telefono:</label></div>
                <div class="col-md-4"><input type="" maxlength="50" name="Telefono" id="Telefono" 
                                             class="form-control" value=""></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="Error col-md-4" id="Error2" ></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Correo Electronico:</label></div>
                <div class="col-md-4"><input type="text" maxlength="50" name="Correo" id="Correo" 
                                             class="form-control" value=""></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="Error col-md-4" id="Error4" ></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"><label for="">Dirección:</label></div>
                <div class="col-md-4"><input type="text" maxlength="50" name="Direccion" id="Direccion" 
                                             class="form-control" value=""></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="Error col-md-4" id="Error3" ></div>	
            </div>

            <br>
            <div class="row">
                <input type="hidden" name="antimg" id="antimg" value="">	
                <div class="col-md-2"><label for="">Imagen:</label></div>
                <div class="col-md-5"><img src="" alt="" width="150" height="150"></div>
            </div>
            <div class="row">
                <div class="col-md-1"><label for=""></label></div>
                <div class="col-md-5"> <input name="img" id="img" type="file" class="form-control"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="Error col-md-4" id="Error5" ></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="Mensaje col-md-4" id="Mensaje1" ></div>	
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>	
                <div class="col-md-4"><input  type="submit" id="guardar" class="btn btn-block pull-left btn-success" value="Ingresar Información"></div>
            </div>
            <br>
            <br>
            </div>
            </div>
        </form>
