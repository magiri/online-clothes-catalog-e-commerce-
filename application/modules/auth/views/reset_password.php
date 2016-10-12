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
                        <h3><?php echo lang('reset_password_heading'); ?></h3>
                    </div>
                    <div class="panel-body">


                        <div class="text-center" id="loginValidationErrors"><?php echo $message; ?></div>

                        <?php echo form_open('auth/reset_password/' . $code); ?>

                        <p>
                            <label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></label> <br />
                            <?php echo form_input($new_password); ?>
                        </p>

                        <p>
                            <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
                            <?php echo form_input($new_password_confirm); ?>
                        </p>

                        <?php echo form_input($user_id); ?>
                        <?php echo form_hidden($csrf); ?>

                        <p><?php echo form_submit('submit', lang('reset_password_submit_btn')); ?></p>

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