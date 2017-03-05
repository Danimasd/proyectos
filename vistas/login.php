<head>
    <title>Ingreso</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Escuela">
    <meta name="author" content="Lic. Daniel Antonio Alvarez Montalvan">
    <link rel="icon" type="image/png" href="..//img/icono_principal.png" />
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script type="text/javascript" src="../jquery/jquery.min.js"></script>
    <script src="../controladores/ctrl_login.js" type="text/javascript"></script>
    <script type="text/javascript" src="../jquery/bootstrap.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../jquery/bootstrap-datepicker.js"></script>
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="../css/Tablas.css">
    <link rel="stylesheet" type="text/css" href="../css/local.css" />
    <link rel="stylesheet" href="../css/iconos/css/font-awesome.min.css">
</head>

<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title text text-center">Iniciar Sesión</div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >
                    <form id="form" name>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="usuario" type="text" autocomplete="off" class="form-control" name="usuario" placeholder="Usuario">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="clave" type="password"  class="clave form-control" autocomplete="off" name="clave" placeholder="Contraseña">
                        </div>
                        <div id="mensaje"></div>
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <center>
                                    <button type="button" onclick="inicio()" class="btn btn-primary"> Iniciar Sesión</button>
                                </center>
                            </div>
                        </div>

                    </form>
                </div>                     
            </div>  
        </div>
    </div>




