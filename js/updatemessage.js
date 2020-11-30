(function(){
    $("#updatebutton").click(function(){ 
        var myData = $('#UpdateRegister').serialize();
        Swal.fire({
            title: 'El registro fue actualizado',
            icon: 'success',
            confirmButtonText: 'Ok',
            timer: 100000,
          }).then((result) => {
            if (result.isConfirmed) {
              //ajax
              $.ajax({
  
                type: 'ajax',
                method: 'post',
                data: myData,                                       
                success: function(){

                    window.location = "http://localhost:10080/CodeIgniter3-EduCare/Instructores/index";
                }
  
              });
  
            }
        });
        

    });
    
   
})();