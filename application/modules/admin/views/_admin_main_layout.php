

<?php $this->load->view('components/header');?>

<div class="container-fluid">
    
   <?php // $this->load->view($subview);?>
     <?php if (!isset($subview)) {
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
    if (isset($subviewstring)){
        echo $subviewstring;
    }
    ?>
</div>


<?php $this->load->view('components/footer');?>
		