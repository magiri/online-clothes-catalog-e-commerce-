


<div class="w_sidebar">

    <section  class="w_nav1">
        <h4>Selected Items</h4>
        <div class="table-responsive">

            <table class="table table-hover table-bordered table-striped">

                <tr>
                    <th>QTY</th>
                    <th>Item Description</th>

                </tr>
                <?php echo form_open('cart/product'); ?>

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
              
                    <td class="right"><strong>Total</strong></td>
                    <td class="right">Ksh. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                </tr>

            </table>


            <p><?php echo form_submit('', 'Update your Cart', 'class="btn btn-info"'); ?>
                <?php echo form_close(); ?>
            <a href="<?php echo site_url('cart/save_order'); ?>">
                <button class="btn btn-success">Save Order</button>
            </a>
                </p>
                
        </div>

    </section>
</div>
