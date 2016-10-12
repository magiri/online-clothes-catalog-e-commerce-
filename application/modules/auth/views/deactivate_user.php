<?php echo $this->load->view('components/adminheaderfile'); ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"> 
            </div>
            <div class="col-md-5"> 
                <?php// echo $this->load->view('style') ?>
                <div class="panel panel-default" id="overwritepanel" style="margin-bottom:3%;">
                    <div class="panel-heading">
                        <h3><?php echo lang('deactivate_heading'); ?></h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo sprintf(lang('deactivate_subheading'), $user->username); ?></p>


                        <?php echo form_open("auth/deactivate/" . $user->id); ?>

                        <p>
                            <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
                            <input type="radio" name="confirm" value="yes" checked="checked" />
                            <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
                            <input type="radio" name="confirm" value="no" />
                        </p>

                        <?php echo form_hidden($csrf); ?>
                        <?php echo form_hidden(array('id' => $user->id)); ?>

                        <p class=""><?php echo form_submit('submit', lang('deactivate_submit_btn'),'class="btn btn-danger"'); ?>
                            <a href="<?php echo site_url('auth'); ?>"><button class="btn btn-success">Cancel</button></a>
                        </p>

                        <?php echo form_close(); ?>
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