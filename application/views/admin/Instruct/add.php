

<div class="content-wrapper">
    <section class="content-header">
            <h1 id="maintitle">
            Agregar Instructores
            </h1>
            
    </section>

    <hr>
    <div class="container">
        <form method="post" name="registerForm" id="UserRegister">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Primer Nombre</label>
                        <input type="text" name = "primer_nombre" class = "form-control">
                        <?php/* echo form_error('primer_nombre'); */?>
                    </div>

                    <div class="form-group">
                        <label>Segundo Nombre</label>
                        <input type="text" name = "segundo_nombre" class = "form-control">
                        <?php/* echo form_error('segundo_nombre'); */?>
                    </div>
                    
                    <div class="form-group">
                        <label>Primer Apellido</label>
                        <input type="text" name = "primer_apellido"  class = "form-control">
                        <?php/* echo form_error('primer_apelliido'); */?>
                    </div>
                    <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input type="text" name = "segundo_apellido" class = "form-control">
                        <?php/* echo form_error('segundo_apellido'); */?>
                    </div>
                    <div class="form-group">
                        <label>Asignatura</label>
                        <input type="text" name = "nom_asignatura" class = "form-control">
                        <?php /*echo form_error('nom_asignatura');*/ ?>
                    </div>

                    <div class="form-group">
                        <button type="button" id="createbutton" class = "btn btn-primary" >Agregar</button>
                        
                        <a href="<?php echo base_url('Instructores') ?>" id="ty" class = "btn btn-primary">Cancel</a>

                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
    

