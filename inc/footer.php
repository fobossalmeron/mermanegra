    <!-- footer: Scripts -->
    <?php if ($pagetitle == 'Retail Spots' || $pagetitle == 'Puntos de Venta'): ?>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGF1CRo8rW8_5z_vKU1nlHDjMRu8KUBFo&callback=initMap"
      type="text/javascript"></script>
        <script src="<?php echo BASE_URL;?>scripts/easyzoom.js"></script>
    <?php endif; ?>
    <script src="<?php echo BASE_URL;?>scripts/main.js"></script>

    <!-- Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-65221041-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
