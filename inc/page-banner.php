<script src="vendor/jssor/js/jssor.core.js"></script>
<script src="vendor/jssor/js/jssor.utils.js"></script>
<script src="vendor/jssor/js/jssor.slider.js"></script>
<script type="text/javascript">
  jssor_slider1_starter = function (containerId) {

    var options = {
      $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
      $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
      $AutoPlayInterval: 6000,
      $SlideshowOptions: { $Class: $JssorSlideshowRunner$, $Transitions: [{$Duration:700,$Opacity:2,$Brother:{$Duration:1000,$Opacity:2}}] },
      $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
        $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
        $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
        $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
        $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
        $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
        $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
        $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
      }
    };

    var jssor_slider1 = new $JssorSlider$(containerId, options);
  }
</script>
<div id="page-banner">
  <div class="container">
    <div id="main-slider" style="height: 390px; width: 1280px; position: relative; ">
      <div u="slides" style="width: 1280px; height: 390px;
            overflow: hidden;">
        <div><img src="/assets/images/slider/arches-bikes.png" alt=""/></div>
        <div><img src="/assets/images/slider/arches-climb.png" alt=""/></div>

      </div>
      <!-- Bullet Navigator Skin Begin -->
      <!-- bullet navigator container -->
      <div u="navigator" class="jssorb21" style="position: absolute; bottom: 16px; right: 55px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
      </div>
      <!-- Bullet Navigator Skin End -->

      <a style="display: none" href="http://www.jssor.com">slideshow</a>
      <!-- Trigger -->
      <script>
        jssor_slider1_starter('main-slider');
      </script>
    </div>
  </div>
</div>