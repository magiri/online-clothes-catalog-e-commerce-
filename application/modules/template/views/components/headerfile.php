<?php if (isset($products)) ?>
<!doctype html>
<html>
    <head lang="en">
        <meta property="og:url"           content="<?php echo site_url(); ?>" />
        <meta property="og:type"          content="Kenya Local Business" />
        <meta property="og:title"         content="FaithKnits" />
        <meta property="og:description"   content="One stop shop For sweaters" />
        <meta property="og:image"         content="<?php echo site_url("assets/genimages/logo/logo.png") ?>" />
        <base href="<?php echo site_url(); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?PHP echo site_url('assets/bootstrap/css/bootstrap.min.css') ?>">

        <link rel="icon" href="<?php echo site_url('assets/genimages/icons/logo.png') ?>" type="image/x-icon"/>

   
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/gencss/b/style.css') ?>">

        <script src="<?php echo site_url('assets/genjs/jquery-1.11.1.min.js') ?>"></script>
       
        <script src="<?php echo site_url('assets/genjs/menu_jquery.js') ?>"></script>
        <script src="<?php echo site_url('assets/megamenu/megamenu.js') ?>"></script>
        <link href="<?php echo site_url('assets/megamenu/megamenu.css') ?>" media="screen" rel="stylesheet" type="text/css" />
        <script>$(document).ready(function () {
                $(".megamenu").megamenu();
            });</script>

        <?php
        if (!isset($title)) {
            $title = "FaithKnits";
        }
        ?>
        <title><?php echo meta_title($title); ?></title>
        <script>
            var jsConfig = {
                base: "<?php echo site_url() ?>"
            }
        </script>
       <script src="<?php echo site_url('assets/genjs/ajax_front.js') ?>"></script>
    </head>

    <body >
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=918942961487522";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

        <div class="container-fluid">
            <div class="row"> 

                <!----------------------------------------------------------header starts here------------------------------------------------------------------------------------------>

                <!-- header_top -->
<!--                <div class="top_bg">
                    <div class="container-fluid">
                        <div class="header_top" style="width:100%">
                            <div class="top_left">
                                <h2><a href="#">New Staff Coming your way</a> Welcome to Faithnits Website </h2>
                            </div>
                            <div class="top_right">
                            
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>-->
                <!-- header -->
                <div class="header_bg">
                    <div class="container-fluid">
                        <div class="header">
                            <div class="logo">
                                <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url("assets/genimages/logo/logo.png") ?>" alt="FaithKnits"/> </a>
                            </div>
                            <!-- start header_right --> 
                            <div class="header_right">
                                <?php if ($this->auth->isadmin()): ?>
                                    <div class="create_btn">
                                        <a class="arrow"  href="<?php echo site_url('admin'); ?>">Admin Panel  </a>
                                    </div>
                                <?php endif; ?>
                                <?php
                                if ($this->auth->isloggedin()):
                                    $user = $this->auth->_one_user();

                                    $btntext = $user->username;
                                    $editorcreate = 'edit_user/' . $user->id;
                                else:
                                    $editorcreate = 'create_user';
                                    $btntext = 'Log In';
                                    ?>
                                <?php endif; ?>
<!--                                <div class="create_btn">
                                    <a class="arrow"  href="<?php echo site_url('auth/' . 'login'); ?>"> <?php echo $btntext; ?> </a>
                                </div>-->

<!--
                                <div class="search">
                                    <form>
                                        <input type="text" value="" placeholder="search...">
                                        <input type="submit" value="">
                                    </form>
                                </div>-->
                                <div class="clearfix"> </div>
                            </div>
                            <!-- start header menu -->
                            <ul class="megamenu skyblue">
                                <li class="active"><a class="color1" href="<?php echo site_url() ?>">Home</a></li>
                                <!--<li><a class="color1" href="index.html">New Arrivals</a></li>-->
                                <li ><a class="color2" href="<?php echo site_url('products/new_arrivals'); ?>">New Arrivals</a>

                                </li>
                                <li ><a class="color2" href="<?php echo site_url('products'); ?>">Products</a>

                                </li>
                                <li ><a class="color2" href="<?php echo site_url('products/trends'); ?>">Trends</a>

                                </li>
                                <li><a class="color4" href="<?php echo site_url('services'); ?>">Services</a>

                                </li>				





                                <li><a class="color10" href="<?php echo site_url('contacts'); ?>">Contact</a>

                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

        <!-----------------------------------------------------------------header starts header here----------------------------------------------------------------------------------->



        <!-----------------------------------------------header ends here----------------------------------------------------------------------------------------------------->


