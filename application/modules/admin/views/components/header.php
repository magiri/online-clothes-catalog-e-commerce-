<!DOCTYPE html>
<html lang="en">
    <head lang="en">
        <?php ?>
        <link rel="stylesheet" type="text/css" href="<?PHP echo site_url('assets/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/admin/adminmenu.css') ?>">
        <link href="<?php echo site_url("assets/admin/admin.css"); ?>" rel="stylesheet">


        <script src="<?php echo site_url('assets/genjs/jquery-1.11.1.min.js') ?>"></script>
        <?php if (!isset($title)) {
            $title = "Admin";
        } ?>
        <title><?php echo meta_title($title); ?></title>
        <script>
            var jsConfig = {
                base: "<?php echo site_url() ?>"
            }
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">

                <nav class="navbar navbar-static-top navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>   
                            <span class="icon-bar"></span>
                        </button>

                        <a href="<?php echo site_url('admin'); ?>" class="navbar-brand">FK Admin</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a class="color2"  aria-expanded="false" role="button" href="<?php echo site_url('admin'); ?>">Dashboard</a>
                            </li>
                            <li class="dropdown">

                                <a aria-expanded="false" role="button" href="<?php echo site_url('products/admin'); ?>" class="dropdown-toggle color4" data-toggle="dropdown"> Products<span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('products/admin/edit/0'); ?>">
                                            Add New Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('products/admin/viewall'); ?>">View All Products</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle color1" data-toggle="dropdown">Categories<span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo site_url('category/admin/edit/0'); ?>">Add New Category</a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo site_url('category/admin/viewall'); ?>">View All</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('services/admin/'); ?>">Services</a>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('price_list/admin/'); ?>">Prices</a>
                            </li>
                           
                            <li class="dropdown">

                                <a aria-expanded="false" role="button" href="<?php echo site_url('admin'); ?>" class="dropdown-toggle color4" data-toggle="dropdown"> Images<span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li class="">
                                        <a href="<?php echo site_url('admin/slidecont'); ?>">Slider Images</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('images'); ?>">Product Images</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('auth/all_users'); ?>">Users</a>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('contacts/admin'); ?>">Contacts</a>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Others<span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <!--<li><a href="#">Menu item</a></li>-->
                                    <li><a href="<?php echo site_url('admin/'); ?>"> Website Data</a></li>

                                </ul>
                            </li>
                            <li style="float: right;">
                                <a href="<?php echo site_url(''); ?>" target="blank">
                                    <i class="fa fa-sign-out"></i> Back to Site
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?php echo site_url('auth/logout'); ?>">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid">