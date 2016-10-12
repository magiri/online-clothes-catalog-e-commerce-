

<?php echo $this->load->view('components/headerfile'); ?>
<div class="container">
    <div class="row-fluid">


        <div class="col-md-9" id="maincontent">

            <?php
            if (!isset($subview)) {
                $subview = "";
            }
            if (!isset($module)) {
                $module = $this->uri->segment(1);
            }

            if ($module != "" && $subview != "") {
                /* loads a module together with the subview accompanying it */
                $this->load->view($module . '/' . $subview);
            } else {
                /* loads pages from the cms */
                //echo $page->page_content;
            }
            ?>
        </div>
        
        <div class="col-md-3" id="right_sidebar">
             <?php //$this->load->view('components/rightSidebar')?>
        </div>


    </div>
</div>

<?php echo $this->load->view('components/footerfile'); ?>
