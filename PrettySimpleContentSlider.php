
<?php include_once './body/header.php'; ?>

<!-- CSS -->
<style type="text/css" media="screen">
    #slider {
        width: 410px; /* important to be same as image width */
        height: 300px; /* important to be same as image height */
        position: relative; /* important */
        overflow: hidden; /* important */
    }
    #sliderContent {
        width: 410px; /* important to be same as image width or wider */
        position: absolute;
        top: 0;
        margin-left: 0;
    }
    .sliderImage {
        float: left;
        position: relative;
        display: none;
    }
    .sliderImage span {
        position: absolute;
        font: 10px/15px Arial, Helvetica, sans-serif;
        padding: 10px 13px;
        width: 384px;
        background-color: #000;
        filter: alpha(opacity=70);
        -moz-opacity: 0.7;
        -khtml-opacity: 0.7;
        opacity: 0.7;
        color: #fff;
        display: none;
    }
    .clear {
        clear: both;
    }
    .sliderImage span strong {
        font-size: 14px;
    }
    .top {
        top: 0;
        left: 0;
    }
    .bottom {
        bottom: 0;
        left: 0;
    }
    ul { list-style-type: none;}
</style>


<h2>Example 1</h2>
<p>This show the layer appears from top or bottom.</p>
<div id="slider">
    <ul id="sliderContent">
        <li class="sliderImage">
            <a href=""><img src="example_images/410/1.jpg" alt="1" /></a>
            <span class="top"><strong>Title text 1</strong><br />Content text...</span>
        </li>
        <li class="sliderImage">
            <a href=""><img src="example_images/410/2.jpg" alt="2" /></a>
            <span class="top"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...</span>
        </li>
        <li class="sliderImage">
            <img src="example_images/410/3.jpg" alt="3" />
            <span class="bottom"><strong>Title text 2</strong><br />Content text...</span>
        </li>
        <li class="sliderImage">
            <img src="example_images/410/4.jpg" alt="4" />
            <span class="bottom"><strong>Title text 2</strong><br />Content text...</span>
        </li>
        <li class="sliderImage">
            <img src="example_images/410/5.jpg" alt="5" />
            <span class="top"><strong>Title text 2</strong><br />Content text...</span>
        </li>
        <div class="clear sliderImage"></div>
    </ul>
</div>
<!-- // slider -->
<?php include_once './body/footer.php'; ?>