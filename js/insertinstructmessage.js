/*(function(){
    $("#createbutton").click(function(){ 
        console.log(ev);
        var self = this;
        var id = $(this).attr('data-id');
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    })
    
   

})();*/
(function(){
    $("#createbutton").click(function(){ 
        //ev.preventDefault();
        /*console.log(ev);*/
        var primer_nombre = $('#p_nombre').val();
        var segundo_nombre = $('#s_nombre').val();
        var primer_apellido = $('#p_apellido').val();
        var segundo_apellido = $('#s_apellido').val();
        var IdAsignatura = $('#asignatura').val();
        Swal.fire({
            title: 'El registro fue insertado',
            icon: 'success',
            confirmButtonText: 'Ok!!',
            timer: 100000,
          }).then((result) => {
            if (result.isConfirmed) {
              //ajax
  
              $.ajax({
  
                type: 'ajax',
                method: 'post',
                url: 'http://localhost:10080/CodeIgniter3-EduCare/Instructores/create',
                data: $('#formInstruct').serialize(),
                

                
                success: function(){

                
                }
  
              });
  
  
  
             
            }
        });
        

    });
    
   
})();
