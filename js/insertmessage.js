
(function(){
    $("#createbutton").click(function(){ 

        var myData = $('#UserRegister').serialize();
        Swal.fire({
            title: 'El registro fue insertado :J',
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
                data: myData,
                success: function(){

                    window.location = "http://localhost:10080/CodeIgniter3-EduCare/Instructores/index";
                }
  
              });

            }
        });
        

    });
    
   
})();
