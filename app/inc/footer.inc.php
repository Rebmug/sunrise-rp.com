                <!--Footer-->
                <div class="footer">
                    <div class="col-lg-13">
                        <div class="row">
                            Will be updated once we update our forum footer.
                        </div>
                    </div>
                </div>
            </div>
           
        </div>           
    </div>
    <!--Preloader-->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!--jQuery, Popper.js, Bootstrap.min.js and FontAwesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bddcd25dfb.js"></script>
    <!--Custom <script> for this template-->
    <script>
        // Preloader 
        $(window).on('load', function() { 
            $('#status').fadeOut(); 
            $('#preloader').delay(350).fadeOut('slow'); 
            $('body').delay(350).css({'overflow':'visible'});
        })
        // Navbar 
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>
</html>