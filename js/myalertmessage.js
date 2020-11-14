(function(){
    $("tr td #delete").click(function(ev){
        ev.preventDefault();
        console.log(ev);
        var self = this;
        var id = $(this).attr('data-id');
        Swal.fire({
          title: '¿Quieres eliminar este registro?',
          text: "No se revertiran los cambios!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
          if (result.value) {
            //ajax

            $.ajax({

                type: 'POST',
                url: 'http://localhost:10080/CodeIgniter3-EduCare/Usuarios/delete',
                data: {'id': id},
                success: function(){
                    $(self).parents('tr').remove();
                    Swal.fire(
                        'Eliminado!',
                        'El registro se ha eliminado.',
                        'success'
                        
                    )
                }

            });



           
          }
        });
    })
    
   

})();