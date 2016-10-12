<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Image</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('category/upload', 'class="form-horizontal"');
        echo form_upload('userfile');
                ?>
          
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" value="Upload" class="btn btn-primary">
           <?php echo form_close('', 'class="form-horizontal"') ?>
      </div>
    </div>
  </div>
</div>