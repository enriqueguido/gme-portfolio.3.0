<script src="../js/typewriter.js" type="text/javascript"></script>
<script src="../js/core/jquery.min.js" type="text/javascript"></script>
<script src="../js/core/popper.min.js" type="text/javascript"></script>
<script src="../js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<!-- <script src="../js/plugins/bootstrap-switch.js"></script> -->
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<!-- <script src="../js/plugins/nouislider.min.js" type="text/javascript"></script> -->
<!--  Plugin for the Carousel, full documentation here: http://kenwheeler.github.io/slick/ -->
<script src="../js/plugins/slick.js" type="text/javascript"></script>
<!--  Plugin for the blob animation -->
<script src="../js/plugins/anime.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<!-- <script src="../js/plugins/chartjs.min.js"></script> -->
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<!-- <script src="../js/plugins/moment.min.js"></script> -->
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<!-- <script src="../js/plugins/bootstrap-tagsinput.js"></script> -->
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../js/plugins/jasny-bootstrap.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3qD6RR7pzDmHR5jXZVK7JfdwjxTx7QP8&callback=initMap"></script>  -->
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="../js/cb-design.min.js?v=1.0.0" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    blackKit.initDatePicker();
    blackKit.initSliders();
  });

  function scrollToDownload() {

    if ($('.section-download').length != 0) {
      $("html, body").animate({
        scrollTop: $('.section-download').offset().top
      }, 1000);
    }
  }
</script>
