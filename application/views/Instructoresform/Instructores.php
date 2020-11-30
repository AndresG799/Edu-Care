<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/mystyle.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.min.css');?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">

    <div class="container">
        <a href="#" class = "navbar-brand">Instruct Register</a>

    </div>

</div>
<div class="container">
    <form method="post" name="registerForm" id="formInstruct">
    <div class="row">
        <div class="col-md-12">

            <div class="form-group w-25">
                <div class="col-xs-3">
                    <label>Primer Nombre</label>
                    <input type="text" name = "primer_nombre" id="p_nombre"  value="<?php /*echo set_value('p_nombre');*/?>" class = "form-control">
                    <?php echo form_error('name'); ?>
                </div>
            </div>

            <div class="form-group w-25">
                <label>Segundo Nombre</label>
                <input type="text" name = "segundo_nombre" id="s_nombre" value="<?php /*echo set_value('s_nombre');*/?>" class = "form-control">
                <?php echo form_error('segundo_nombre'); ?>
            </div>

            <div class="form-group w-25">
                <label>Primer Apellido</label>
                <input type="text" name = "primer_apellido" id="p_apellido" value="<?php /*echo set_value('p_apellido');*/?>" class = "form-control">
                <?php echo form_error('primer_apellido'); ?>
            </div>

            <div class="form-group w-25">
                <label>Segundo Apellido</label>
                <input type="text" name = "segundo_apellido" id="s_apellido" value="<?php /*echo set_value('s_apellido');*/?>" class = "form-control">
                <?php echo form_error('segundo_apellido'); ?>
            </div>

            <div class="form-group w-25">
                <label>Asignatura</label>
                <input type="text" name = "nom_asignatura" id="asignatura"  value="<?php /*echo set_value('asignatura');*/?>" class = "form-control">
                <?php echo form_error('nom_asignatura'); ?>
            </div>
            


            <div class="form-group">
                <button type="button" id="createbutton" class = "btn btn-primary" >Create</button>
                <!--<input type="button" id="createbutton" name = "name" id="nombre" value = "Create" >!-->
                
                <a href="#" id="ty" class = "btn btn-primary">Cancel</a>

            </div>
        </div>

    </div>
    </form>
</div>
    <script src="<?php echo base_url('/js/jquery-3.5.1.min.js');?>"></script>
    <script src="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.js');?>"></script>
    <script src="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.min.js');?>"></script>
    <script src="<?php echo base_url('/js/insertinstructmessage.js');?>"></script>
    
    
</body>
</html>