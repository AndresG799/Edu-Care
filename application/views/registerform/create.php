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
        <a href="#" class = "navbar-brand">CRUD APPLICATION</a>

    </div>

</div>
<div class="container">
    <h3>Register User</h3>
    <form method="post" name="registerForm">
    <div class="row">
        <div class="col-md-12">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name = "name" id="nombre" value = "<?php /*echo set_value('nombre');*/?>" class = "form-control">
                <?php echo form_error('name'); ?>
            </div>

            <!--<div class="form-group">
                <label>Email</label>
                <input type="text" name = "email" value = "<?php echo set_value('email');?>" class = "form-control">
                <?php echo form_error('email'); ?>
            </div>
            !-->
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
    <script src="<?php echo base_url('/js/insertmessage.js');?>"></script>
    
</body>
</html>