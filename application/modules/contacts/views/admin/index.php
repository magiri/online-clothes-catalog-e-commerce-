<section>
    
    <?Php
    $noofcontactsprefix = 's';
    if(!empty($contacts))
    {        
        $noofcontactsprefix = ($noOfcontacts < 1 || $noOfcontacts > 1)? 's' : '';
    }
    ?>
    
    <h1 class="page-header"><?php echo $noOfcontacts?> Contact<?php echo $noofcontactsprefix?></h1>
    
    <!-----------pagination start here-------------->
    <?php 
            if(strlen($pagination) > 0){
            echo $data_info_string =  count($contacts)==1? ($offset_data + 1).' OF '.$noOfcontacts:
            ($offset_data + 1).' TO '.($offset_data + count($contacts)).' OF '.$noOfcontacts;
            }else{
             //echo $noOfcontacts;
            }
            
             ?><br/>
        <?php if(strlen($pagination) > 0):?>
          <?php echo $pagination?>
      <?php endif;?>
    <!----------------pagination ends here------------------------->
    
    <!--contacts table-->

    <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>First Email</th>
                <th> Main Phone Number(s)</th>
                <th> Other Phone Number(s)</th>
                <th>location</th>
                <th>Edit</th>
            </tr>  
        </thead>
        
        <tbody>
         <?php if(count($contacts)): foreach ($contacts as $contact):?> 
            <tr>
                <td><?php echo anchor('contacts/admin/edit/'.$contact->id,$contact->full_name);//$contact->title?></td>
                <td><?php echo $contact->first_email?></td>
                <td><?php echo $contact->phone_number?></td>
                <td><?php echo $contact->other_phones?></td>
                <td><?php echo $contact->location?></td>
                <td><?php echo btnedit('contacts/admin/edit/'.$contact->id,'Edit')?></td>
                
            </tr>
            <?php endforeach; else:?>
            <tr>
                <td colspan="4">No contacts found</td>
            </tr>
            <?php endif;?>
        </tbody>
    </table>
    </div>
</section>