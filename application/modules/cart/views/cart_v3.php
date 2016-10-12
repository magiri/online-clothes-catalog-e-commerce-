<?php echo form_open('cart/update_cart', 'class="form-horizontal"'); ?>
<div class="panel panel-success">
    <div class="panel-heading">
        Edit Your Cart
    </div>
    <div class="panel-body table-responsive">
        <table class="table table-hover table-bordered table-fluid table-striped">

            <tr>
                <th>QTY</th>
                <th>Item Description</th>
                
            </tr>

            <?php $i = 1; ?>

            <?php foreach ($this->cart->contents() as $items): ?>

                <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                <tr>
                    <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                    <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                            <p>
                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                <?php endforeach; ?>
                            </p>

                        <?php endif; ?>

                    </td>
                   
                   
                </tr>

                <?php $i++; ?>

            <?php endforeach; ?>

            <tr>
                <td colspan="2"> </td>
                <td class="right"><strong>Total</strong></td>
                <td class="right">Ksh.<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>

        </table>


        <p><?php echo form_submit('', 'Update your Cart','class="btn btn-info"'); ?></p>
    </div>
</div>