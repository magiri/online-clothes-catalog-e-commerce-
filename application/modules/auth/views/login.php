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
                        <h3><?php echo lang('login_heading'); ?></h3>
                    </div>
                    <div class="panel-body">


                        <div class="text-center" id="loginValidationErrors"><?php echo $message; ?></div>

                        <?php echo form_open("auth/login", 'class="form-horizontal" role="form"'); ?>
                        <div class="form-group">
                            <label for="identity" class="col-md-3 control-label">
                                Username/Email
                            </label>
                            <div class="col-md-9">
                                <?php echo form_input($identity, null, 'class="form-control" id="loginMail" placeholder="Email/Username"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">
                                Password
                            </label>
                            <div class="col-md-9">
                                <?php echo form_input($password, NULL, 'class="form-control" id="loginPassword" placeholder="Password"'); ?>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-3"></div>
                            <div class="checkbox col-md-9">
                                <div class="col-md-1">
                                    <?php echo form_checkbox('remember', '1', FALSE); ?> 

                                </div>
                                <label for="remember" class="col-md-4">
                                    Remember Me
                                </label>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="submit" class="col-md-3 control-label">

                            </label>
                            <div class="col-md-9">
                                <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary"'); ?>
                            </div>
                        </div>
                        <?php echo form_close(); ?>

                    </div>
                    <div class="panel-footer">
                        <p><i class="glyphicon glyphicon-copyright-mark"></i> <?php echo $this->config->item('site_name'); ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>
<?php echo $this->load->view('components/adminfooterfile'); ?>