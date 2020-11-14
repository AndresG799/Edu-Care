<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php echo form_open('');?>

    <div class="container">
        <div class="form-group">
            <?php 

                echo form_label('Nombre', 'nombre');
                $input = array(
                    'name' => 'nombre',
                    'value' => '',
                    'class' => 'form-control input-lg'
                );
                echo form_input($input);
            ?>
        </div>

        <?php
            echo form_submit('mysubmit', 'Enviar', "class= 'btn btn-primary'");
        ?>
        
        <?php echo form_close();?>
    </div>

</html>