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
                        <h3><?php echo lang('edit_user_heading'); ?></h3>
                    </div>
                    <div class="panel-body">
                        <p><?php echo lang('edit_user_subheading'); ?></p>
                        <div class="text-center" id="loginValidationErrors"><?php echo $message; ?></div>


                        <?php echo form_open(uri_string()); ?>
                        <div class="form-group row">
                            <div class="col-md-4 control-label">
                                <?php echo lang('edit_user_fname_label', 'first_name'); ?> 
                            </div>
                            <div class="col-md-8 ">
                                <?php echo form_input($first_name, 'class="form-control"'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 control-label">
                                <?php echo lang('edit_user_lname_label', 'last_name'); ?> 
                            </div>
                            <div class="col-md-8 ">
                                <?php echo form_input($last_name); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 control-label">
                                <?php echo lang('edit_user_company_label', 'company'); ?> 
                            </div>
                            <div class="col-md-8 ">
                                <?php echo form_input($company); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 control-label">
                                <?php echo lang('edit_user_phone_label', 'phone'); ?> 
                            </div>
                            <div class="col-md-8 ">
                                <?php echo form_input($phone); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5 control-label">
                                <?php echo lang('edit_user_password_label', 'password'); ?> 
                            </div>
                            <div class="col-md-7 ">
                                <?php echo form_input($password); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5 control-label">
                                <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?>
                            </div>
                            <div class="col-md-7 ">
                                <?php echo form_input($password_confirm); ?>
                            </div>
                        </div>

                        <?php if ($this->ion_auth->is_admin()): ?>
                            <div class="row form-group ">
                                <h3><?php echo lang('edit_user_groups_heading'); ?></h3>

                                <?php foreach ($groups as $group): ?>

                                    <label class="checkbox">
                                        <?php
                                        $gID = $group['id'];
                                        $checked = null;
                                        $item = null;
                                        foreach ($currentGroups as $grp) {
                                            if ($gID == $grp->id) {
                                                $checked = ' checked="checked"';
                                                break;
                                            }
                                        }
                                        ?>
                                        <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                                        <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </label>

                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                        <?php echo form_hidden('id', $user->id); ?>
                        <?php echo form_hidden($csrf); ?>

                        <div class="col-md-4">
                            <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class=" btn btn-primary"'); ?>
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

