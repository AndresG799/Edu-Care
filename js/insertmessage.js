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
        var nombre = $('#nombre').val();
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
                url: 'http://localhost:10080/CodeIgniter3-EduCare/Usuarios/create',
                //data: {'nombre': nombre},
                data: $('#nombre').serialize(),
                success: function(){

                    window.location = "http://localhost:10080/CodeIgniter3-EduCare/Usuarios/index";
                }
  
              });
  
  
  
             
            }
        });
        

    });
    
   
})();
