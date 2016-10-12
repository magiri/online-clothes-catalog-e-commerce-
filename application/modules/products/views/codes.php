 <div class="det_nav1">
                                    <h4>Select a size :</h4>
                                    <div class="">
                                        <?php if (isset($sizeandpice)): ?>
                                            <table  class="tabdle" id="example" >
                                                <thead>
                                                    <tr>

                                                        <th>Size</th>
                                                        <th>Price</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($sizeandpice as $price_list): ?>
                                                        <tr class="odd gradeX">
                                                            <td><?php echo $price_list->size ?></td>
                                                            <td><?php echo $price_list->price ?></td>
                                                            <td>
                                                                <div class="btn_form">
                                                                    <a href="<?php echo site_url('cart/add_to_cart/' . $product->id); ?>">
                                                                        Buy
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="btn_form">
                                    <a href="buy.html">buy</a>
                                </div>