

<?php echo $this->load->view('components/headerfile'); ?>

<div class="container">
    <div class="row">
<!----------------------------------------------------------------------------first column------------------------------------------------------------------------>
        <div class="col-md-2 sidebar" id="left_sidebar">

        </div>
<!----------------------------------------------------------------------------second column------------------------------------------------------------------------>
        <div class="col-md-7" id="maincontent">

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
<!---------------------------------------------------third column------------------------------------------------------------------------------------------------->
        <div class="col-md-3">
            <?php //$this->load->view('components/rightSidebar')?>
        </div>

<!-----------------------------------------------------end of third column----------------------------------------------------------------------------------------------->
    </div>
</div>
<?php echo $this->load->view('components/footerfile'); ?>
