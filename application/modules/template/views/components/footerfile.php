
  



<!--<div class="scroll-top-wrapper"> </div>-->
</div> 
<div class="footer top_bg">
    <div class="container-fluid">
        <div class="footer-grid col-md-3 ">
            <?php $contactdetails = modules::run('contacts/get', 1, true); ?>
            <h3>Contacts</h3>
            <div class="address">
                <ul>
                    <li><?php echo $contactdetails->location; ?></li>
                    <li><?php echo $contactdetails->first_email; ?></li>
                    <li><span>Telephone :</span> <?php echo $contactdetails->phone_number; ?></li>

                </ul>
            </div>
        </div>
        <!--        <div class="footer-grid col-md-3">
                    <h3>About Faithknits</h3>
                    <p><label>@Faithknits</label> 
                        Faithknits is a production company concentrated on sweaters of all Kind
                    </p>
        
                </div>-->
        <div class="footer-grid center-grid col-md-3">
            <h3>Services</h3>
            <ul>
                <li><a href="<?php echo site_url('services/data-solutions'); ?>"></a></li>
                <li><a href="<?php echo site_url('services/network-solutions'); ?>"></a></li>
                <li><a href="<?php echo site_url('services'); ?>">All Services </a></li>



            </ul>
        </div>	
        <div class="footer-grid col-md-3">
            <h3>Quick Links</h3>
            <ul>
                <!--                <li><a href="#">Featured products</a></li>
                                <li><a href="#">Jobs</a></li>-->

                <li><a href="<?php echo site_url('contacts') ?>">Customer Feedback</a></li>


            </ul>

        </div>

        <div class="clear"> </div>
    </div>

</div>
<div class="copy-right">
    <p>Powered by <a href="http://www.jemslab.com/" target="_blank"> JEMSLAB</a></p>
</div>


<style type="text/css">
    .callme{
        position:fixed;
        top:70%;

    }

</style>
<!--        <div class="callme">
            <a href="tel:071" class="btn btn-default btn-warning btn-lg"><span class="glyphicon glyphicon glyphicon-earphone"></span> 0717436112</a>
        
        </div>-->

</body>

<!-- SCRIPTS -->
<script src="<?php echo site_url('assets/genjs/jquery_v1.11.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('assets/genjs/headerAndFooter.js') ?>"></script>


</html>

