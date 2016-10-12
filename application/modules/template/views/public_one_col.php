

<?php echo $this->load->view('components/headerfile'); ?>

<!----------------------------------------------------------------------------first column------------------------------------------------------------------------>
<div id="contentArea">
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
        
    }
    ?>
</div>

<?php
echo $this->load->view('components/footerfile');
