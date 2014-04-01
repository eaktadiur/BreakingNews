<?php
include './body/header.php';
?>

<style>
    .contentHolder { position:relative; margin:0px auto; padding:0px; width: 600px; height: 400px; overflow: hidden; }
    .contentHolder .contentBody { width: 1280px; height: 720px; }
    .spacer { text-align:center }
</style>

<div class="news-tab-list news-tab stripe content-scroll contentHolder perfectScrollbar">
    <ul class="media-list contentBody">
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


<?php include_once './body/footer.php'; ?>