 <?php echo $this->load->view('auth/style') ?>
<?php $this->load->module('auth'); ?>
<section>
    
    <div class="container">
        <div class="row">
            <?php if ($this->auth->isloggedin()):?>
            <div class="row alert alert-info"> 
                Go back to Products to add more products or fill the datails to Save your order 
            </div>
            <?php else: ?>
            <div class="row alert alert-info"> 
                To help us serve you better please click here to create an account and login 
          
            <a href="<?php echo site_url('auth/create_user'); ?>">
            <button class="btn btn-warning"> Create account</button>
            </a>
                  </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-3">
                 <?php echo $this->load->view('template/components/sidebarmenu_1'); ?>
            </div> 
            
            <div class="col-md-5"> 
           <?php if ($this->cart->total_items()!= 0) :
                 echo $this->load->view('cart/cart_v2') ;
               else:
                   Echo '<p> Your Cart Is Empty! Please Add Items </p>';
               endif;
?>
                <a href="<?php echo site_url('products'); ?>">
                <button class="btn btn-warning">Add More Items</button>
    </a>
            </div>
            
            <div class="col-md-4"> 
               
                <div class="panel panel-default" id="overwritepanel" style="margin-bottom:3%;">
                    <div class="panel-heading">
                        <h3> Your Details</h3>
                    </div>
                    
                    <div class="panel-body">
                        <p>furnish Us With Your Details</p>
                        <div class="text-center" id="loginValidationErrors">
                           <?php echo validation_errors(); ?> 
                        </div>

                        <?php echo form_open("" , 'class="form-horizontal"'); ?>

                        <div class="form-group row">                          
                            <div class="col-md-4 control-label">
                              Names
                            </div>  
                            <div class="col-md-8 ">
                                <?php echo form_input('customer_name', set_value('customer_name',$orders->customer_name)); ?>
                            </div>
                        </div>

                        <div class="form-group row">                           
                            <div class="col-md-4 control-label">
                               Email
                            </div>                           
                            <div class="col-md-8 ">
                                  <?php echo form_input('email', set_value('email',$orders->email)); ?>
                            </div>
                        </div>

                        <div class="form-group row">                          
                            <div class="col-md-4 control-label">
                               Mobile Phone Number
                            </div>                  
                            <div class="col-md-8 ">
                                <?php echo form_input('telephone', set_value('telephone',$orders->telephone)); ?>
                            </div>
                        </div>

                        <div class="form-group row">                       
                            <div class="col-md-12 control-label">
                               Comment
                            </div>                     
                            <div class="col-md-12 ">
                                 <?php echo form_textarea('comment', set_value('comment',$orders->comment),'class="form-control"'); ?>
                            </div>
                        </div>

                        <div class="form-group row">                       
                            <div class="col-md-8 control-label">
                            </div>
                            <div class="col-md-4 control-label">
                                <?php echo form_submit('submit','Save Order','class="btn btn-info"'); ?>
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