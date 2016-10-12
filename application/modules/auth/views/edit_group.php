<?php echo $this->load->view('components/adminheaderfile'); ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"> 
            </div>
            <div class="col-md-5"> 
                <?php echo $this->load->view('style') ?>
                <div class="panel panel-default" id="overwritepanel" style="margin-bottom:3%;">
                    <div class="panel-heading">
                        <h3><?php echo lang('edit_group_heading'); ?></h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo lang('edit_group_subheading'); ?></p>

                        <div class="text-center" id="loginValidationErrors"><?php echo $message; ?></div>


<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p class="col-md-4"><?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-info"');?></p>
         <a href="<?php echo site_url('auth'); ?>"><button class="btn btn-success">Cancel</button></a>

<?php echo form_close();?>
  </div>
                    <div class="panel-footer">

                        <p>
                            <i class="glyphicon glyphicon-copyright-mark"></i> 
                            <?php echo $this->config->item('site_name'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<?php echo $this->load->view('components/adminfooterfile'); ?>