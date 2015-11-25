<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]> <html class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_home() ) { ?><? bloginfo('name'); ?>&nbsp;&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;Search: <?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<? bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<? bloginfo('name'); ?><?php } ?>
<?php if ( is_category() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/styles.css" />
<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/print.css" />
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/bxslider/bxslider.js"></script>
<script src="<?php bloginfo('template_url');?>/js/quickpager.jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/calculator.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.placeholder.js"></script>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php 
if(is_home()){
    ?><style type="text/css">
        li.alwaysactive{
                 background: url(/wp-content/themes/doc/images/green_selected.png) bottom center no-repeat;
                 display: block;
                 float: left;
                 position: relative;
                 color: transparent;
        }
    </style>
<?php } ?>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
    		$('[placeholder]').placeholder({
  		overlabelClass: 'placeholder' 
		});
		$('[placeholder]').placeholder('Full name');
		$('[placeholder]').placeholder('example@email.com');
		$('[placeholder]').placeholder('Subject');
		$('[placeholder]').placeholder('Message');
	});

</script>
<script type="text/javascript">
	jQuery(document).ready(function($){
	 $('ul.sub-menu').prepend('<span class="top_sub_arrow"></span>');
	 $('.parent > a').removeAttr( 'href' );
	 $('.it_parent > a').removeAttr( 'href' );
	
	 $(".contacts").click(function () {
	        var id = $(this).find(".contacts a").attr("href");
	        $('html,body').animate({
	            scrollTop: $(id).offset().top - 20
	        }, 'slow');
	    });

	    $(".contacts a").click(function (e) {
	        e.preventDefault();
	        var id = $(this).attr("href");
	        $('html,body').animate({
	            scrollTop: $(id).offset().top - 20
	        }, 'slow');
	    });
	});
</script>
<script type="text/javascript">
 jQuery(document).ready(function(){
                if ($.browser.msie && $.browser.version == 10) {
                       $("html").addClass("ie10");
                }
                if ($.browser.msie && $.browser.version == 9) {
                       $("html").addClass("ie9");
                }
                if ($.browser.msie && $.browser.version == 8) {
                       $("html").addClass("ie8");
                }
                if ($.browser.msie && $.browser.version == 7) {
                       $("html").addClass("ie7");
                }
              
         });
</script>
<script>
                 if (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject) {
                         jQuery('html').addClass('ie11');
                 }
</script>
<style type="text/css">
		@-moz-document url-prefix() {
			#menu-item-163 .sub-menu {
   				 min-height: 64px;
    			 	 margin-left: -33px;
			}
			#menu-item-163 .sub-menu li{
   				height: 39px !important;
				padding-left: 2px;
			}
			.more_btn_wrapper  {
				margin-top: 19px;
		        }
                        .more_button a {
			   padding-top:1px;
			}
                        .more_training_button a {
                           padding-top:1px;
			}
                        .lang_sel_list ul li:hover a{
				color:transparent;
			}
                        #menu-main_top_left_menu-russian li ul.sub-menu{
				 padding-bottom:23px;
                        }
                        #menu-main_top_left_menu-armenian li ul li{
				height: 39px !important;
				padding-left: 2px;
			}
                        .menu_left_wrapper ul li a{
   				font-weight:500;
			}
                        .menu_right_wrapper ul li a{
  				 font-weight:500;
			}
</style>
<?php wp_head(); ?>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56291204-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="header_container">
	<div class="green_line"></div> 
	<div class="header_main_bg">
	      <div class="header_main_wrapper">
	          <div class="header_top_wrapper">
		      		<div class="language_wrapper"><?php do_action('icl_language_selector'); ?></div> 
		      		<div class="like_us"><a target="_blank" href="https://www.facebook.com/pages/Q-Group/145796095523453">Like us</a></div>
                    <div class="link"><a href="http://q-group.am/">Yerevan</a></div>
                    <div class="logo_wrapper_small">
                      <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url') ;?>/images/small_logo.png" alt="Q group"></a>
                    </div>
	      	  </div>
	      	  <div class="header_bottom_wrapper">
	      	  		<div class="menu_left_wrapper">
	      	  			 <?php wp_nav_menu(array('menu' => 'main_top_left_menu', 'menu_class' => 'main_top_left_menu')); ?> 
	      	  			<div class="menu_left_wrapper_border"></div>
	      	  		</div>
                    <div class="logo_wrapper">
                        <a href="http://q-group.am"><img src="http://q-group.am/wp-content/themes/doc/images/top_center_logo.png" alt="Q group"></a>
                    </div>
	      	  		<div class="menu_right_wrapper">
	      	  			<?php wp_nav_menu(array('menu' => 'main_right_top_menu', 'menu_class' => 'main_right_top_menu')); ?> 
	      	  			<div class="menu_right_wrapper_border"></div>
	      	  		</div>
	      	  </div>
	    <div class="content">
	