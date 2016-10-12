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
                        <h3><?php echo lang('forgot_password_heading'); ?></h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

                         <div class="text-center" id="loginValidationErrors"><?php echo $message; ?></div>
                        <?php echo form_open("auth/forgot_password"); ?>
                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label">
                                Email
                            </label>
                            <div class="col-md-9">
                                <?php echo form_input($email, null, 'class="form-control" id="loginMail" placeholder="Email/Username"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="submit" class="col-md-3 control-label">

                            </label>
                            <div class="col-md-9">
                                <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary"'); ?>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="panel-footer">
                        <p><i class="glyphicon glyphicon-copyright-mark"></i> <?php echo $this->config->item('site_name'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<?php echo $this->load->view('components/adminfooterfile'); ?>




