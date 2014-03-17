<?php
include './body/header.php';
?>

<!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div class="row-fluid">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-lg-push-3">
        <div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
            <div class="carousel-inner">
                <div class="item active"><!-- class of active since it's the first item -->
                    <img src="assets/img/img_1.jpg" alt="" class="img-responsive"/>
                    <div class="carousel-caption">
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                    </div>
                </div>
                <?php for ($i = 0; $i <= 8; $i++) { ?>
                    <div class="item"><!-- class of active since it's the first item -->
                        <img src="assets/img/img_1.jpg" alt="" class="img-responsive"/>
                        <div class="carousel-caption">
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                        </div>
                    </div>
                <?php }
                ?>
            </div><!-- /.carousel-inner -->
            <!--  Next and Previous controls below
                  href values must reference the id for this carousel -->
            <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
        </div><!-- /.carousel -->

    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 col-lg-pull-6">
        <div class="panel-heading red-border">
            <h3 class="panel-title">
                <a href="category.html"><i class="fa icon red_bg fa-signal"></i> Latest News</a>
            </h3>
        </div>
        <div class="news-tab-list news-tab stripe content-scroll">
            <ul class="media-list">
                <?php for ($i = 0; $i <= 8; $i++) { ?>
                    <li class="media">
                        <a class="pull-left" href="single.html">
                            <img class="media-object" src="assets/img/news_thumb.jpg" />
                        </a>
                        <h3 class="small-heading"><a href="single.html">আর্জেন্টিনায় পিরানহার আক্রমণে আহত ৬০</a></h3>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>



    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="panel-heading red-border">
            <h3 class="panel-title">
                <a href="category.html"><i class="fa icon red_bg fa-signal"></i> Top News</a>
            </h3>
        </div>
        <div class="news-tab-list stripe content-scroll">
            <ul class="media-list">
                <?php for ($i = 0; $i <= 8; $i++) { ?>
                    <li class="media">
                        <a class="pull-left" href="single.html">
                            <img class="media-object" src="assets/img/news_thumb.jpg" />
                        </a>
                        <h3 class="small-heading"><a href="single.html">আর্জেন্টিনায় পিরানহার আক্রমণে আহত ৬০</a></h3>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php include_once './index_bottom.php'; ?>


<?php include './body/footer.php'; ?>