<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/login.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/solid.css');?>">
    <!--<link rel="stylesheet" href="<?php echo base_url('/css/index.css');?>">!-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    

   
    
</head>
<body>

<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" id="formlogin" action="" method="post">
                    <div class="form-group" id="user-group">
                   
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Nombre de usuario" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                    
                        <input type="password" name="password" class="form-control" id="password" placeholder="Contrasena" />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
               
		        </div>
            </div>
        </div>
    </div>
    
</body>
    <script src="<?php echo base_url('/js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo base_url('/js/sweetalert2.all.min.js');?>"></script>
    <script src="<?php echo base_url('/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('/js/all.js');?>"></script>
    <script src="<?php echo base_url('/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('/js/login.js');?>"></script>
</html>