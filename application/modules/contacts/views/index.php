
<link href="<?php echo site_url("assets/gencss/contacts.css"); ?>" rel="stylesheet">


<div class="row" style="margin-left:3%;margin-right:3%;padding-right:0.5%;">
<!-----------------------------------------------------------first row----------------------------------------------------------------------------------------->
<div class="row-fluid" id="contactMap">
    <hr>
    <p>FIND US</p>
    
        <!---map body begins here--->
    <body onload="load()">
        <div id="map" style="width:100%; height: 401px"></div>
    </body>
    <!---map body ends here--->
    
    <!--image incase map fails to load--> <!---<img src="<?php echo site_url("assets/genimages/contactUs/contactsMap.png") ?>" alt="Location image">-->
</div>



<!------------------------------------------------second row---------------------------------------------------------------------------------------------------->
<div class="row-fluid" id="contactsInfoPanel" style="margin-top:1%;margin-bottom:1%;">
    <div class="col-md-1">&nbsp;</div>
    <div class="col-md-10">
    <div class="row">
    <!---------------------------------------------first column------------------------------------------------------------------------------------------------------->
    <div class="col-md-3" id="contactsinfo">
        <?php $contactdetails = modules::run('contacts/get',1,true);?>
        <div id="phonedetails">
            <h5>PHONE</h5>
            <P>
            <contdata><?php echo $contactdetails->phone_number;?></contdata> ,
            <contdata><?php echo $contactdetails->other_phones;?></contdata>
            </P>
        </div>

        <div id="faxdetails">
            <h5>Location</h5>
            <P>
            <contdata><?php echo $contactdetails->location;?></contdata>
            </P>
        </div>

        <div id="emaildetails">
            <h5>EMAIL</h5>
            <P>
            <contdata><?php echo $contactdetails->first_email;?></contdata>,
            </P>
            <P>
            <contdata><?php echo $contactdetails->second_email;?></contdata> 
            </P>
        </div>
    </div>
    <!-----------------------------------------------second column----------------------------------------------------------------------------------------------------->
    <div class="col-md-9" id="secondColumnPanel">

        <div class="panel panel-default" id="contactspanel">
            <div class="panel-heading">
                SEND US SOME ELECTRONIC MAIL
            </div>
            <div class="panel-body">
                <?php echo form_open('contacts/contactsmail'); ?>
                <?php echo validation_errors('<p class="text-danger text-center validationerrors"><b>', '</b></p>');?>
                <table class="table">
                    <tr>
                        <td class="contactLabel">Your Name<b>:</b></td>
                        <td><?php echo form_input('formName', set_value('formName'), 'class="form-control"') ?></td>
                    </tr>
                    <tr>
                        <td class="contactLabel">Email Address<b>:</b></td>
                        <td><?php echo form_input('formEmail', set_value('formEmail'), 'class="form-control"') ?></td>
                    </tr>
                    <tr>
                        <td class="contactLabel">Phone Number<b>:</b></td>
                        <td><?php echo form_input('formPhoneNumber', set_value('formPhoneNumber'), 'class="form-control"') ?></td>
                    </tr>
                    <tr>
                        <td class="contactLabel">Company Name<b>:</b></td>
                        <td><?php echo form_input('formCompanyName', set_value('formCompanyName'), 'class="form-control"') ?></td>
                    </tr>
                    <tr>
                        <td class="contactLabel">Location<b>:</b></td>
                        <td><?php echo form_input('formLocation', set_value('formLocation'), 'class="form-control"') ?></td>
                    </tr>
                    <tr>
                        <td class="contactLabel">Message<b>:</b></td>
                        <td><?php echo form_textarea('formMessage', set_value('formMessage'), 'class="form-control"') ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo form_submit('submit', 'SEND', 'class="btn btn-sm" id="contactsendbutton"') ?></td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>

    </div>

<!----------------------------------------------------end of second row------------------------------------------------------------------------------------------------>
</div>
</div>
<div class="col-md-1">&nbsp;</div> 
</div>

</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?php echo site_url("assets/genjs/maps/maps.js") ?>"  type="text/javascript"></script>