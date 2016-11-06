<!-- <script type="text/javascript" src="components/jquery/dist/jquery.js"></script> -->
<!-- <script type="text/javascript" src="js/app-test.js"></script> -->

<script type="text/javascript">
  function downloadJSAtOnload() {

    // modernizr
    // var modernizr = document.createElement("script");
    // modernizr.src = 'js/modernizr-custom.min.js';
    // document.body.appendChild(modernizr);

    // Custom Scripts
    var element = document.createElement("script");
    element.src = 'js/app-min.js';
    document.body.appendChild(element);

    // Recaptcha
    var recaptcha = document.createElement("script");
    recaptcha.src = 'https://www.google.com/recaptcha/api.js';
    document.body.appendChild(recaptcha);
  }

  // Load Javascript last
  if (window.addEventListener)
    window.addEventListener("load", downloadJSAtOnload, false);
  else if (window.attachEvent)
    window.attachEvent("onload", downloadJSAtOnload);
  else
    window.onload = downloadJSAtOnload;
</script>
