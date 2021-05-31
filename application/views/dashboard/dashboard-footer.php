</div>
        </div>
            
        <!-- jquery -->
            <script 
                src="https://code.jquery.com/jquery-3.6.0.js" 
                integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"> 
            </script>
        <!-- jquery -->

        <!-- boostrap-min-js -->
            <script 
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
            </script>
        <!-- boostrap-min-js -->

        <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#sidebar").toggleClass("nav-active");
                    $("#pages").toggleClass("active-pages");
                    $("h2").toggleClass("try");
                });

                $( "#profile-toggle" ).on( "click", function() {
                    $("#profile-menu").toggleClass("menu-active");
                });

               
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src=" <?php echo base_url('assets/js/product.js')?> "></script>

       
    </body>
</html>