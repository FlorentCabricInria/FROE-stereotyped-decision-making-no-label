<div class="row">
  <div class="col">
    <h2>Gender</h2>
    <div id="scroll-warning_4" class="alert alert-warning alert-dismissible" hidden>
      <span>Some content may be off-screen. Please scroll down to see the rest of the content.</span>
    </div>
<!--    <div id="scroll-warning2" class="alert alert-warning alert-dismissible" hidden>-->
<!--      <span>Some content may be off-screen. Please scroll down to see the rest of the content.</span>-->
<!--    </div>-->
      Finally, in the visualization you will see, the gender of each employee will be represented using colors.
      <ul>
    <?php
          $extension = array(".csv");
          $subs   = array("");
          $cond = str_replace($extension,$subs,$condition);
          $mod = $cond % 4;
          switch ($mod){
            case 0: case 1:?>
<!--    <li style=" margin:0px"> <span style="font-weight: bold; color: #ff33c9;" > Women </span>are represented in <span style="font-weight: bold; color: #ff33c9;">Pink </span> </li>-->
<!--    <li style=" margin:0px"> <span style="font-weight: bold; color: #3a33ff; " > Men </span>are represented in <span style="font-weight: bold; color: #3a33ff;">Blue</span>  </li>-->
    <?php
    break;
    case 2: case 3:
    ?>
<!--    <li style=" margin:0px"> <span style="font-weight: bold; color: #AA9000;" > Women </span>are represented in <span style="font-weight: bold; color: #AA9000;"> Brown </span> </li>-->
<!--    <li style=" margin:0px"> <span style="font-weight: bold; color: #00AA5A;" > Men </span>are represented in <span style="font-weight: bold; color: #00AA5A;"> Green </span> </li>-->
    <?php
    break;
    }
    ?>
  </ul>

      <?php
          $extension = array(".csv");
          $subs   = array("");
          $cond = str_replace($extension,$subs,$condition);
          $mod = $cond % 4;
          switch ($mod){
            case 0:
              ?> <span> </span>  <svg id="chartStereotypedMenLower">  </svg> <?php
              break;
            case 1:
            ?>
            <span></span><svg id="chartStereotypedWomenLower"> </svg> <?php
              break;
            case 2:
            ?>
            <span> </span> <svg id="chartNotStereotypedMenLower" > </svg> <?php
              break;
            case 3:
              ?> <span> </span>  <svg id="chartNotStereotypedWomenLower" > </svg>  <?php
              break;
          }

      ?>
  </div>

    <script type="text/javascript" src="./html/js/visualizations/visualizationGenderTest.js"></script>
  <script type="text/javascript">
    $('body').on('next', function (e, type) {
// The if clause below ensures that this specific instance of a next button press is only triggered when the id of the element corresponds to the one being defined above.
      if (type === '<?php echo $id;?>'){
        document.getElementById("currentpage").value = parseInt(document.getElementById("currentpage").value) +1

      }

    })
    if ('save_trial_log' in config) {
      var webpageData = {};
      $('#experiment-info').children().each(function() {
        webpageData[$(this).attr('id')] = $(this).val();
      });
      webpageData["timestamp_4"] = Date.now();
      webpageData["pageNumber"] =4
      if (config.save_trial_log) {
        if (!excluded) {
          $.ajax({
            url: 'html/ajax/log_next_event.php',
            type: 'POST',
            data: JSON.stringify(webpageData),
            contentType: 'application/json',
            success: function (data) {
              console.log('welcome save.')
              // console.log(measurements['condition'])
              // $(':button').hide()
              // window.onbeforeunload = null
            }
          })
        }
      }
    }
  </script>
</div>


