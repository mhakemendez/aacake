$(document).ready(function(){
 
    $('#form-product').on('submit',function(e){
        
        e.preventDefault();

        $.ajax({
                
                url: "http://localhost/aacake/product/add",
                type:"POST",
                data: new FormData(this),
                dataType: "JSON",
                processData:false,
                contentType:false,
                success: function(data){

                    if (data.response == 'success') {

                        $('#exampleModal').modal('hide');
                        $('#form-product')[0].reset();

                        toastr["success"](data.message)

                        toastr.options = {
                            
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        
                    }else{

                        if (data.product_name != "" ) {
                            
                            $('.error-name').html(data.product_name);
                        
                        }   else   {
                            
                                $('.error-name').html("");
                            }
                        
                        if (data.product_price != "" ) {
                            
                            $('.error-price').html(data.product_price);
                        
                        }   else    {
                            
                                $('.error-price').html("");
                            }
                        
                        if (data.product_desc != "" ) {
                            
                            $('.error-desc').html(data.product_desc);
                        }
                            else    {
                            
                                $('.error-desc').html("");
                            }

                      

                       

                        

                        toastr["error"](data.message)

                        toastr.options = {
                            
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }

                    $('#form-close').on('click',function(){
                        $('#form-product')[0].reset();
                        $('.error-name').html("");
                        $('.error-price').html("");
                        $('.error-desc').html("");

                    })

                }
                     
        });

    });

    
     
});
          
