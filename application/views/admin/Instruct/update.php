<div class="content-wrapper">
    <div class="navbar navbar-dark bg-dark">

    <section class="content-header">
        <h1 id="maintitle">
        Actualizar Instructores
        </h1>
        
    </section>  
    <hr>
    </div>
    <div class="container">
        <form method="post" name="updateForm" id="UpdateRegister" >
            <div class="row">
                
                    <div class="form-group">
                        <label>Primer Nombre</label>
                        <input type="text" data-id="<?php echo $users['IdInstructor'];?>" name = "primer_nombre"  value = "<?php echo $users['primer_nombre'];?>" class = "form-control">
                        <?php //echo form_error('name'); ?>
                    </div>

                    <div class="form-group">
                        <label>Segundo Nombre</label>
                        <input type="text" data-id="<?php echo $users['IdInstructor'];?>" name = "segundo_nombre"  value = "<?php echo $users['segundo_nombre'];?>" class = "form-control">
                        <?php //echo form_error('name'); ?>
                    </div>

                    <div class="form-group">
                        <label>Primer Apellido</label>
                        <input type="text" data-id="<?php echo $users['IdInstructor'];?>" name = "primer_apellido" value = "<?php echo $users['primer_apellido'];?>" class = "form-control">
                        <?php //echo form_error('name'); ?>
                    </div>
                    <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input type="text" data-id="<?php echo $users['IdInstructor'];?>" name = "segundo_apellido"  value = "<?php echo $users['segundo_apellido'];?>" class = "form-control">
                        <?php //echo form_error('name'); ?>
                    </div>

                    
                    <div class="form-group">
                        
                        <label>Asignatura</label>
                        <select name="IdAsignatura" id="Asignatura">
                            <option value disabled selected>Select an Option</option>
                            <?php foreach ($dropdowns as $dropdown):?>

                            <option value="programacion">
                                <?php echo $dropdown->descripcion?>
                            </option>

                            <?php endforeach;?>
                        </select>
                        <?php //echo form_error('name'); ?>
                    </div>
                    
                    <div class="form-group">
                        <button type="button" id="updatebutton"  data-id="<?php echo $users['IdInstructor'];?>" class = "btn btn-primary">Update</button>
                        <a href="<?php echo base_url('Instructores') ?>" class = "btn-secondary btn">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
        
