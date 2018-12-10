<!DOCTYPE html>
<html>

<!-- Mirrored from mobirise.com/bootstrap-4-theme/gallery-template.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 17:03:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../../img/mmarthouse-icon.png">
  <meta name="description" content="HTML5 Gallery Template - Free Download">
  <title>Free HTML Bootstrap 4 Gallery Template</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/shopping-cart/minicart-theme.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<script>var shopcartSettings = {"shopcart_top_offset":120,"side_offset":20,"site_width":1150,"shopcart_icon_color":"#FFFFFF","shopcart_back_color":"#2969b0","shopcart_icon_size":48,"sc_count_color":"#FFFFFF","sc_count_back_color":"#fc26ae","sc_count_size":12,"checkout_button":"Check Out with"};</script>

<section class="mbr-gallery mbr-slider-carousel cid-qv1kAi2cqe" id="gallery2-u" data-rv-view="4287" style="padding:10px;">

    <div class="container">
        <div>
            <!-- Filter -->
            <div class="mbr-gallery-filter container gallery-filter-active" style="padding:0;">
                <ul buttons="0">
                    <li class="mbr-gallery-filter-all">
                        <a class="btn btn-md btn-primary-outline active display-4" href="#">All</a>
                    </li>
                </ul>
            </div>

            <!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>

            <!-- Uploads Gallery -->
            <?php						
                $uploads = "Uploads";
                $directory = "../../../$uploads";
                $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);
                $count = 0;
                $liClass = '"one_quarter first"';
                foreach($images as $image)
                {
                    echo '<div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="'.$uploads.'">';
                    echo '  <div href="#lb-gallery2-u" data-slide-to="'.$count.'" data-toggle="modal">';
                    echo '    <img src="'.$image.'" alt="">';
                    echo '    <span class="icon-focus"></span>';
                    echo '  </div>';
                    echo '</div>';
                    $count += 1;
                }
            ?>
            <!-- Exhibitions Gallery -->
            <?php						
                $exhibition = "Exhibition_Nov18";
                $directory = "../../../$exhibition";
                $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);
                //$count = 1;
                $liClass = '"one_quarter first"';
                foreach($images as $image)
                {
                    echo '<div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="'.$exhibition.'">';
                    echo '  <div href="#lb-gallery2-u" data-slide-to="'.$count.'" data-toggle="modal">';
                    echo '    <img src="'.$image.'" alt="">';
                    echo '    <span class="icon-focus"></span>';
                    echo '  </div>';
                    echo '</div>';
                    $count += 1;
                }
            ?>
                        
                        </div>
                    </div>
				<div class="clearfix"></div>
			</div>
		</div>
        <!-- Lightbox -->
        <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-u">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel-inner">

            <!-- Upload Gallery -->
            <?php						
                $uploads = "Uploads";
                $directory = "../../../$uploads";
                $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);
                $count = 1;
                $liClass = '"one_quarter first"';
                foreach($images as $image)
                {
                    $cls = $count == 1 ? "carousel-item active" : "carousel-item";
                    echo '<div class="'.$cls.'"><img src="'.$image.'" alt=""></div>';
                    $count += 1;
                }
            ?>

            <!-- Exhibition Gallery -->
            <?php						
                $exhibition = "Exhibition_Nov18";
                $directory = "../../../$exhibition";
                $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);
                //$count = 1;
                $liClass = '"one_quarter first"';
                foreach($images as $image)
                {
                    $cls = "carousel-item";
                    echo '<div class="'.$cls.'"><img src="'.$image.'" alt=""></div>';
                    $count += 1;
                }
            ?>

                        </div>
                        <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-u">
                            <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-u">
                            <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <a class="close" href="#" role="button" data-dismiss="modal">
                            <span class="sr-only">Close</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>




  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/shopping-cart/minicart.js"></script>
  <script src="assets/shopping-cart/jquery.easing.min.js"></script>
  <script src="assets/shopping-cart/minicart-customizer.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  
</body>

<!-- Mirrored from mobirise.com/bootstrap-4-theme/gallery-template.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Nov 2018 17:04:39 GMT -->
</html>