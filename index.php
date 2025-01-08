<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>

  <!-- Loads all styles -->
  <link rel="stylesheet" href="html/css/bootstrap.min.css">
  <link rel="stylesheet" href="html/css/main.css">

  <!-- Loads all libraries -->
  <script src="html/js/lib/jquery-3.3.1.min.js"></script>
  <script src="html/js/lib/bootstrap.min.js"></script>
  <script src="html/js/lib/bowser-2.4.0-es5.js"></script>
  <script type="module" src="html/js/lib/zoom.js"></script>
  <script type="module" src="html/js/tools/sizecheck.js"></script>
  <script type="text/javascript" src="html/js/tools/verifysize.js"></script>
  <script type="module" src="html/js/init-index.js"></script>
</head>
<body class="background">

  <!-- Modal -->
  <div class="modal fade" id="browser-warning" tabindex="-1" role="dialog" aria-labelledby="browser-warning-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="browser-warning-title">Your browser is not supported</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Ok. I will use another browser.">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <span id="browser-warning-message"></span>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" type="button" class="btn btn-primary">I understood</button>
        </div>
      </div>
    </div>
  </div>
  <script src="html/setup/min_browser_versions.js"></script>
  <script src='html/js/tools/browser-detection.js'></script>



  <div id="loader" class="justify-content-center">
    <p>Loading experiment...</p>
  </div>
  <div id="zoom-message" class="wrong-message">
    <br/><h1>This experiment requires at least a 100% zoom level</h1>
    <p id="zoom">Your current zoom is <span id=zoomValue></span>%.</p>
    <p>Please, zoom in the page until this message disappears.<br>
      You can also press Ctrl+0 (on Windows or Linux) or Cmd+0 (on MacOS) to reset the zoom.</p>
  </div>
  <div id="dimension-message" class="wrong-message">
    <br/><h1>Your browser window does not fit the study screen</h1>
    <canvas id="windowsize" width="350px" height="200px"></canvas>
    <p>This can happen in three situations. Try the following solutions, starting with the first:</p>
    <ol>
      <li><b>By default, the operating system has a scale greater than 100% (most common).</b> Set the scale level of your operating system to 100% (125% may work too). Click on your operating system to see a tutorial (link will open in a new tab):
      <a href="https://www.windowscentral.com/how-set-custom-display-scaling-setting-windows-10" target="_blank">Windows</a>,
        <a href="https://discussions.apple.com/thread/253989091?sortBy=rank" target="_blank">Mac</a>,
        <a href="https://help.ubuntu.com/stable/ubuntu-help/look-resolution.html.en" target="_blank">Linux (Ubuntu)</a>
      </li>
      <li><b>The page is zoomed in:</b> Zoom out the page to 100% (
        <a href="https://support.mozilla.org/en-US/kb/font-size-and-zoom-increase-size-of-web-pages#w_zoom-in-and-out-of-a-website" target="_blank">Firefox</a>,
        <a href="https://support.google.com/chrome/answer/96810?hl=en&co=GENIE.Platform%3DDesktop" target="_blank">Chrome</a>,
        <a href="https://www.microsoft.com/en-us/edge/learning-center/change-default-zoom-level?form=MA13I2" target="_blank">Edge</a>,
      <a href="https://support.apple.com/en-gb/HT207209" target="_blank">Safari</a>)
      </li>
      <li><b>Your browser window is too small:</b> Maximize your browser window (
        <a href="https://www.digitalcitizen.life/minimize-maximize-apps-windows/#ftoc-heading-2" target="_blank">Windows</a>,
        <a href="https://support.apple.com/en-gb/guide/mac-help/mchlp2469/mac#mchlp7b91593" target="_blank">MacOS</a>,
        <a href="https://help.ubuntu.com/stable/ubuntu-help/shell-windows-maximize.html.en" target="_blank">Linux (Ubuntu)</a>)
      </li>
    </ol>
    <p>If none of these solutions work that means your computer does not support this study. Therefore, I regret to say you will not be able to participate. Thank you for your time!</p>
  </div>
  <main class="container-fluid" id="content">
    <div class="row justify-content-center">
      <?php
      require_once "html/setup/functions.php";
      global $config;
      loadConfig();
 
      if ($config["use_fixed_frame"]){
        ?>
        <style type="text/css">
            .background {
              background-color: #E0E0E0;
            }
        </style>      
      <iframe id="experiment" src="content.php?<?php echo http_build_query($_GET);?>"></iframe>

      <?php 
      } else {
        ?>

        <?php

        include("content.php");

      }
      ?>
    </div>
  </main>
      <noscript>
        <h1>Your browser is blocking Javascript.</h1>
        <p>
          This page requires javascript to function properly, that is, to collect your answers and send them back to us. If you want to participate in this study, please allow scripts to be executed and then reload the page. <br>
          If you don't know how to do that, you can <a href="https://www.whatismybrowser.com/guides/how-to-enable-javascript/auto" target="_BLANK">learn how here</a>.
        </p>
      </noscript>

</body>
</html>
