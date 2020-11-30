/*$('#formlogin').submit(function(e){
    e.preventDefault();
    var username = $.trim($("#username").val());
    var password = $.trim($("#password").val());



    if(username.length == "" || password == ""){
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y/o contraseña'

        });
    }
    else
    {
        Swal.fire({
            type: 'error',
            title: 'Prueba'

        });
    }
 });*/   

       
    $('#formlogin').submit(function(e){
        e.preventDefault();
        var usuario = $.trim($("#usuario").val());    
        var password =$.trim($("#password").val());    
         
        if(usuario.length == "" || password == ""){
           Swal.fire({
               type:'error',
               title:'Debe ingresar un usuario y/o password',
           });
           return false; 
         }else{
                $.ajax({
                    url:"http://localhost:10080/CodeIgniter3-EduCare/Home/login",
                    type:"POST",
                    datatype: "json",
                    data: {usuario:usuario, password:password}, 
                    success:function(data){               
                        if(data == "null"){
                            Swal.fire({
                                type:'error',
                                title:'Usuario y/o password incorrecta',
                            });
                        }else{
                            Swal.fire({
                                type:'success',
                                title:'¡Conexión exitosa!',
                                confirmButtonColor:'#3085d6',
                                confirmButtonText:'Ingresar'
                            }).then((result) => {
                                if(result.value){
                                    window.location.href = "http://localhost:10080/CodeIgniter3-EduCare/Home/welcomelogin";
                                }
                            })
                            
                        }
                    }    
                });
            }     
    });


