(function(){
    $("#updatebutton").click(function(ev){ 
        ev.preventDefault();
        /*console.log(ev);*/
        var nombre = $('#updateUser').val();
        var id = $(this).attr('data-id');
        Swal.fire({
            title: 'El registro fue actualizado',
            icon: 'success',
            confirmButtonText: 'Ok!!',
            timer: 100000,
          }).then((result) => {
            if (result.isConfirmed) {
              //ajax
  
              $.ajax({
  
                type: 'ajax',
                method: 'post',
                url: 'http://localhost:10080/CodeIgniter3-EduCare/Usuarios/update/'+id+'',
                data: {'id': id},
                data: $('#updateUser').serialize(),
                success: function(){

                    window.location = "http://localhost:10080/CodeIgniter3-EduCare/Usuarios/index";
                }
  
              });
  
  
  
             
            }
        });
        

    });
    
   
})();