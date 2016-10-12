
<section>


<div class="text-center">
    <?php
    echo validation_errors('<p class="text-danger"><b>', '</b></p>');

    ?>    
</div> 
    <?php
    if (strlen($contacts->full_name) > 0) {
        $headingtext = 'Update Contact';
        $btntext = 'Update Contact';
    } else {
        $headingtext = 'Add New Contact';
        $btntext = 'Add Contact';
    }
    ?>
   <h2 class="page-header text-center"><?php echo $headingtext ?></h2>
   
   <div class="row">
<?php echo form_open('','class="form-horizontal" role="form"')?>
       
       <div class="form-group">
           <label class="col-md-2 control-label">&nbsp;</label>
    <div class="col-md-10">
       <b><?php echo $contacts->full_name; ?></b>
    </div>
    </div>
       
<?php if($contacts->id !=1):?>
       
       <div class="form-group">
    <label class="col-md-2 control-label">First Email:</label>
    <div class="col-md-10">
       <?php echo form_input('first_email', set_value('first_email', $contacts->first_email), 'class="form-control"') ?>
    </div>
    </div>
       
       <div class="form-group">
    <label class="col-md-2 control-label">Second Email:</label>
    <div class="col-md-10">
       <?php echo form_input('second_email', set_value('second_email', $contacts->second_email), 'class="form-control"') ?>
    </div>
    </div>
       
<?php endif;?>

<div class="form-group">
    <label class="col-md-2 control-label">Phone Number(s):</label>
    <div class="col-md-10">
       <?php echo form_input('phone_numbers', set_value('phone_numbers', $contacts->phone_number), 'class="form-control"') ?>
    </div>
    </div>
<div class="form-group">
    <label class="col-md-2 control-label">Phone Number(s):</label>
    <div class="col-md-10">
       <?php echo form_input('phone_numbers', set_value('phone_numbers', $contacts->other_phones), 'class="form-control"') ?>
    </div>
    </div>
    

<?php if($contacts->id !=1):?>
       <div class="form-group">
    <label class="col-md-2 control-label">Location:</label>
    <div class="col-md-10">
       <?php echo form_input('location', set_value('location', $contacts->location), 'class="form-control"') ?>
    </div>
    </div>
<?php endif;?>

       <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo form_submit('submit', $btntext, 'class="btn btn-primary"') ?>
        </div>
    </div>  
       
<?php echo form_close() ?>
   </div>
    

</section>