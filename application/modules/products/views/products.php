

<link href="<?PHP echo site_url('assets/gencss/products.css') ?>" rel="stylesheet">
<div class="women_main">
    <div class="container-fluid">

        <div class="row">
            <!-- start sidebar -->
            <div class="col-md-3">

                <?php echo $this->load->view('template/components/sidebarmenu'); ?>
                
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- faithknits adverts -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7368951255305021"
                         data-ad-slot="6221068593"
                         data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                <div id="productsCart">
                  
                </div>
            </div>

            <!-- start content -->
            <div class="col-md-9">

                <div class="women">
                    <a href="#"><h4>Faithnitts Wear<span></span> </h4></a>
                    <!--                    <ul class="w_nav">
                                            <li>Sort : </li>
                                            <li><a class="active" href="#">popular</a></li> |
                                            <li><a href="#">new </a></li> |
                                            <li><a href="#">discount</a></li> |
                                            <li><a href="#">price: Low High </a></li> 
                                            <div class="clear"></div>	
                                        </ul>-->
                    <div class="clearfix"></div>	
                </div>

                <!-- start content -->
                <div class="container-fluid" id="productsdynamic" >
                    <?php echo $this->load->view('products/dynamic'); ?> 
                </div>	

                <!-- end content -->


            </div>
        </div>
    </div>
</div>

