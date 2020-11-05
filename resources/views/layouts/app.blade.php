<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title></title>
  <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 053 css*/
        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.3;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
</head>
<body>
	<div class="container-fluid">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="padding: 1px;">
  <a href="#"><img  style="width: 100px;margin-left: 10px" src="/storage/product_images/M (26).png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="/" style="color: #000;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog" style="color: #000;">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: #000;">Our Vendors</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #000;">Our Services</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: #000;">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carts" tabindex="-1" aria-disabled="true" style="color: #000;"><i class="fa fa-cart-plus"></i>Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: #000;">FAQs</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
</div>
<br>
<div class="container-fluid" style="margin-top: 50px;">
	<div class="row">
	@include('inc.messages')
	@yield('content')
</div>
</div>
<div class="row" style="width: 100%;margin:10px auto;">
  <br>
</div>
</div>
<footer>
<div class="container-fluid footer" >
<div class="">
  <div class="row">
    <div class="col-md-3">
      <h6><b>Important Links</b></h6>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Yolo Home</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>About Yolo</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Our Services</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Our Vendors</p>
    </div>
    <div class="col-md-3">
      <h6><b>More</b></h6>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Our Delivery Services</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Our Location</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Return of Goods Policy</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>Terms of Service</p>
    </div>
    <div class="col-md-3">
      <h6><b>FAQs</b></h6>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>How To Sell on Yolo</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>How To Return of Goods</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>How To Advertise on Yolo</p>
      <hr>
      <p><i class="fa fa-caret-right footerfa"></i>How To Contact Us</p>
    </div>
    
    <div class="col-md-3">
      <h6><b>Contact Us</b></h6>
      <b><hr></b>
      <p><i class="fa fa-envelope otherfa"></i>Email us on:</p>
      <hr>
      <p><i class="fa fa-phone otherfa"></i>Call us on:</p>
      <hr>
      <p><i class="fa fa-envelope otherfa"></i>Facebook</p>
      <hr>
      <p> <i class="fa fa-envelope otherfa"></i>Instagram</p>
    </div>
    <hr style="width: 100%;margin: auto;">
     <p class="centerfooter">&copy; Yolo Theme-2020. All Rights Reserved</p>
  </div>
</div>
</div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/jssor.slider-28.0.0.min.js')}}"></script>
 <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1300;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
        $(document).ready(function(){
        
        
        function slide(x){
          var imagecount = 1;
          $.ajax({
         url: 'getUsers/',
         type: 'get',
         dataType: 'json',
         success: function(response){
           var len = 0;
           var total = 0;
           if(response['data'] != null){
              len = response['data'].length;
              var total = len;
           }
         }
         });
          if(len > 0){
             for(var i=0; i<len; i++){
               var id = response['data'][i].id;
               console.log(id);
          var Image = document.getElementByClassName('center');
          
        }
      }
    }
      });
    </script>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#add").click(function(){
          $(".add").append('<div class="form-group"><label>Products Quantity</label><input type="" name="rows[][productsquantity]" class="form-control"></div><div class="form-group"><label>Products Price</label><input type="" name="rows[][productsprice]" class="form-control"></div>');
        })
      });
    </script>
</body>
</html>







          