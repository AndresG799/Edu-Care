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
        <a href="" class = "navbar-brand">CRUD APPLICATION</a>

    </div>

</div>

<div class="container" style="padding:s 10px">
    <h3>View Users</h3>
    <a href="<?php echo base_url('Usuarios/create');?>"  class="btn btn-primary createbutton" style="margin-bottom: 10px; "> <img src="<?php echo base_url('/icons/guardar.png'); ?>" class="trashbutton" width="15px" alt=""> Create</a>
    
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>

 
        
                    </tr>
                    <?php if(!empty($users))  {  foreach($users as $user){?>
                   
                        
                        <tr>
                            
                            <td> <?php echo $user['id'] ?> </td>
                            <td> <?php echo $user['nombre'] ?> </td>
                            
                                <td>
                                    
                                        <a href="<?php echo base_url('Usuarios/update/').$user['id'] ?>" data-id="<?php echo $user['id'];?>" class= "btn btn-primary"> <img src="<?php echo base_url('/icons/editar.png'); ?>" class="editbutton" width="18px" alt=""> Edit</a>
                                        <a href="#" class= "btn btn-danger " data-id="<?php echo $user['id'];?>" id="delete" role="button" ><img src="<?php echo base_url('/icons/eliminar.png'); ?>" class="deletebutton" width="18px" alt="">Delete</a>
                                   
                                </td>
                            

                        </tr>
                        
                        
                     
                    <?php } }  ?>
                        

                    
                   
                    
                </thead>
            
            </table>

            

        </div>

    </div>
</div>
    <script src="<?php echo base_url('/js/jquery-3.5.1.min.js');?>"></script>
    <script src="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.js');?>"></script>
    <script src="<?php echo base_url('/libs/sweetalert/dist/sweetalert2.min.js');?>"></script>
    <script src="<?php echo base_url('/js/myalertmessage.js');?>"></script>
    
    
</body>
</html>