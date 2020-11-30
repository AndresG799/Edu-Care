<!DOCTYPE html>
<html>
<head>
 <title>Complete User Registration and Login System in Codeigniter</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
<div class="content-wrapper">
    <div class="container">
        <br/>
        <h3 align="center"><b>Inscribete y comienza a aprender.</b></h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Registrate!</div>
            <div class="panel-body">

            <?php 
            if($this->session->flashdata('message')){
                echo '<div class = "alert alert-sucess">  ' .$this->session->flashdata('message').'</div>';
            }
            ?>
                <form method="post" action="<?php echo base_url(); ?>register/validation">
                    <div class="form-group">
                        <label>Ingresa tu Nombre</label>
                        <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Ingresa tu correo electrónico</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Ingresa tu contraseña</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" value="Registrarme" class="btn btn-info" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>
