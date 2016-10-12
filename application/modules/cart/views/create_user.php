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
                        <h3><?php echo lang('create_user_heading'); ?></h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo lang('create_user_subheading'); ?></p>
                        <div class="text-center" id="loginValidationErrors"><?php echo $message; ?>
                        </div>

                        <?php echo form_open("auth/create_user"); ?>

                        <div class="form-group row">                          
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_fname_label', 'first_name'); ?> 
                            </div>  
                            <div class="col-md-8 ">
                                <?php echo form_input($first_name); ?>
                            </div>
                        </div>

                        <div class="form-group row">                           
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_lname_label', 'last_name'); ?> 
                            </div>                           
                            <div class="col-md-8 ">
                                <?php echo form_input($last_name); ?>
                            </div>
                        </div>

                        <div class="form-group row">                          
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_company_label', 'company'); ?> 
                            </div>                  
                            <div class="col-md-8 ">
                                <?php echo form_input($company); ?>
                            </div>
                        </div>

                        <div class="form-group row">                       
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_email_label', 'email'); ?> 
                            </div>                     
                            <div class="col-md-8 ">
                                <?php echo form_input($email); ?>
                            </div>
                        </div>

                        <div class="form-group row">                           
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_phone_label', 'phone'); ?>
                            </div>                        
                            <div class="col-md-8 ">
                                <?php echo form_input($phone); ?>
                            </div>
                        </div>

                        <div class="form-group row">                          
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_password_label', 'password'); ?> 
                            </div>                     
                            <div class="col-md-8 ">
                                <?php echo form_input($password); ?>
                            </div>
                        </div>

                        <div class="form-group row">                            
                            <div class="col-md-4 control-label">
                                <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> 
                            </div>                         
                            <div class="col-md-8 ">
                                <?php echo form_input($password_confirm); ?>
                            </div>
                        </div>


                        <div class="form-group row">                       
                            <div class="col-md-8 control-label">
                            </div>
                            <div class="col-md-4 control-label">
                                <?php echo form_submit('submit', lang('create_user_submit_btn'),'class="btn btn-info"'); ?>
                            </div>
                        </div>

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

