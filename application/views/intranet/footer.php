    <!-- Bootstrap Core JavaScript --> 
    <script src="<?= base_url(); ?>bootstrap/js/bootstrap-slider.js"></script>
    <script>
        $( document ).ready(function() {
            $("#ex6").slider();
            $("#ex6").on("slide", function(slideEvt) {
                $("#ex6SliderVal").text(slideEvt.value);
            });
            $("#ex7").slider({tooltip_position:'bottom'});
            $("#ex7").on("slide", function(slideEvt) {
                $("#ex7SliderVal").text(slideEvt.value);
            });
            $("#ex8").slider({tooltip_position:'bottom'});
            $("#ex8").on("slide", function(slideEvt) {
                $("#ex8SliderVal").text(slideEvt.value);
            });
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            });
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/579abadad2d8e3987f8b842c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->
</body>

</html>