
<!DOCTYPE html>
<html>
<head>
    <title>华中科技大学计算机协会</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keyword" content="华中科技大学计算机协会"/>
	<meta name="description" content="HUSTCA 华科计算机 协会 社团 华中科技大学计算机协会 华科社团 hust" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>

    <!--响应式  -->


    <link rel="stylesheet" type="text/css" href="../css/custom.css"/>

    <!--menu-->
    <link type="text/css" rel="stylesheet"  media="screen and (max-width:640px)" href="../css/demo.css" />
    <link type="text/css" rel="stylesheet" media="screen and (max-width:640px)" href="../css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mmenu.min.all.js"></script>
    <script type="text/javascript">
        $(function() {
            $('nav#menu').mmenu({
                extensions	: [ 'effect-slide-menu', 'pageshadow' ],
                searchfield	: true,
                counters	: true,
                navbars		: [
                    {
                        position	: 'top'
                    }, {
                        position	: 'bottom',
                        content		: [ '<a href="http://www.hustca.com">华中科技大学计算机协会</a>' ]
                    }
                ]
            });
        });
    </script>
    <!--menu-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".flip").mouseover(function(){
                $(this).next("div").slideDown(500);
            });
            $(".content").mouseleave(function(){
                $(this).children("div").slideUp(500);
            });
        });
    </script>

    <style type="text/css">
        div.panel,p.flip
        {

            margin:0px;
            padding:5px;
            text-align:center;
            border: hidden 0px #000000;
        }
        div.panel
        {

            height:auto;
            display:none;
        }
        .px a{
        	color:blue;
        	text-decoration:none;
        }
        li {list-style-type:none;}
    </style>
</head>

<body>

<!--  Navigation Bar -->
<?php  include_once(dirname(__FILE__) . './navigation.php'); ?>


<!--mobile menu-->
<?php  include_once(dirname(__FILE__) . './menu-mobile.php'); ?>

<!-- Banner -->
<div class="banner">
    <div class="banner-images">
        <img src="../images/px-banner.jpg" class="img-responsive">
    </div>
</div>


<!-- Main Page -->
<div class="container-fluid px">
      <div class="col-md-12" id="study">
      	<?php
      	 require( dirname( __FILE__ ) . '/../news/wp-load.php' );
         ?>

        <h3>学习小组</h3>
        <div class="col-md-4"  >
            <h4>PS学习小组</h4>
                 <h5> <?php wp_list_bookmarks('orderby=id&categorize=0&category=21&title_li='); ?> </h5>
        </div>

          <div class="col-md-4"  >
            <h4>C学习小组</h4>
               <h5> <?php wp_list_bookmarks('orderby=id&categorize=0&category=24&title_li='); ?> </h5>
        </div>

          <div class="col-md-4"  >
            <h4>Office学习小组</h4>
             <h5> <?php wp_list_bookmarks('orderby=id&categorize=0&category=25&title_li='); ?> </h5>
        </div>
    </div>

      <div class="col-md-12" id="it">
        <h3>技术部</h3>
         <div class="col-md-3">
            <h4>WEB组Meet Up</h4>
                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=22&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

        </div>

        <div class="col-md-3">
            <h4>安卓组Meet Up</h4>

                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=27&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

        </div>

        <div class="col-md-3">
            <h4>美工组Meet Up</h4>

                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=28&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

        </div>
          <div class="col-md-3">
              <h4>Design组Meet Up</h4>
                  <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=29&title_li='); ?>计协总部 &nbsp;<a href="lx/map-big.html" target="_blank" class="fa fa-map-marker"></a></h5>

          </div>

    </div>
      <div class="col-md-12" id="repair">
        <h3>义务维修队</h3>
            <div class="col-md-6">
                <h4>培训</h4>
                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=23&title_li='); ?></h5>
            </div>
            <div class="col-md-6">
                <h4>实战</h4>
                <h5><?php wp_list_bookmarks('orderby=id&categorize=0&category=26&title_li='); ?> </h5>
            </div>

    </div>

    <div class="col-md-12" id="ncre">
        <h3>计算机等级考试培训</h3>

                <h4><a href="../ncre/index.html" target="_blank">NCRE板块</a></h4>



    </div>



</div>












<!-- Footer -->
<?php  include_once(dirname(__FILE__) . './footer.php'); ?>

<!--up start-->
<script type="text/javascript" src="../js/scrolltopcontrol.js"></script>
<div style="height:10px;"></div>
<!--up end-->




<script src="../js/bootstrap.min.js"></script>
<script src="../js/myscript.js"></script>
</body>
</html>