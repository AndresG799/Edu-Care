
<div class="content-wrapper">

<section class="content-header">
        <h1 id="maintitle">
        Lista de Instructores
        </h1>
        
</section>

<hr>
<div class="container" style="padding:s 10px">
    <!--<a href="<?php /*echo base_url('Usuarios/create');*/?>"  class="btn btn-primary createbutton" style="margin-bottom: 10px; "> <img src="<?php echo base_url('/icons/guardar.png'); ?>" class="trashbutton" width="15px" alt=""> Create</a>!-->
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <a href="<?php echo base_url('Instructores/create') ?>" class= "btn btn-success " id="create" role="button" ><img src="<?php echo base_url('/icons/guardar.png'); ?>" width="18">Agregar</a>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Primer Nombre</th>
                        <th scope="col">Segundo Nombre</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Asignatura</th>
        
                    </tr>
                    <?php if(!empty($users))  {  foreach($users as $user){?>
                
                        
                        <tr>
                            
                            <td> <?php echo $user['IdInstructor'] ?> </td>
                            <td> <?php echo $user['primer_nombre'] ?> </td>
                            <td> <?php echo $user['segundo_nombre'] ?> </td>
                            <td> <?php echo $user['primer_apellido'] ?> </td>
                            <td> <?php echo $user['segundo_apellido'] ?> </td>
                            <td> <?php echo $user['IdAsignatura'] ?> </td>
                            
                            <td>
                                <a href="<?php echo base_url('Instructores/update/').$user['IdInstructor'] ?>" data-id="<?php echo $user['IdInstructor'];?>" class= "btn btn-primary"> <img src="<?php echo base_url('/icons/editar.png'); ?>" class="editbutton" width="18px" alt=""> Editar</a>
                                <a href="#" class= "btn btn-danger " data-id="<?php echo $user['IdInstructor'];?>" id="delete" role="button" ><img src="<?php echo base_url('/icons/eliminar.png'); ?>" class="deletebutton" width="18px" alt="">Eliminar</a>
                            </td>


                        </tr>
                        
                        
                    
                    <?php } }  ?>
                        

                    
                
                    
                </thead>
            
            </table>

            

        </div>

    </div>
</div>

      

</div>