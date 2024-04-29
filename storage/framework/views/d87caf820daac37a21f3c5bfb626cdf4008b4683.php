<?php $__env->startSection('title', 'Purchase Product'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="container">
    <div class="text-center">
        <h3>Billing Page</h3>
    </div>
    <div class="card-body p-4 row">
        <div class="col-12">
            <div class="row">
                <div class="col-10 my-2 pb-2">
                    <p class="customer_email"><span class="pe-2 fw-bold">Customer Email:</span><?php echo e($value->email); ?></p>
                </div>
                <div class="table table-responsive fixTableHead first_content">
                    <p class="bill_section fw-bold">Bill Section:</p>
                    <table id="bill_example" class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="ps-3 pe-0 align-middle">Product ID</th>
                                <th class="ps-3 pe-0 align-middle">Unit Price</th>
                                <th class="ps-0 pe-0 align-middle">Quantity</th>
                                <th class="ps-0 pe-0 align-middle">Purchase Price</th>
                                <th class="ps-0 pe-0 align-middle">Tax % for Item</th>
                                <th class="ps-0 pe-0 align-middle">Tax Payable for Item</th>
                                <th class="ps-0 pe-0 align-middle">Total Price of The Item</th>
                            </tr>
                        </thead>
                        <tbody class="bill_table_body">
                            <?php if(isset($responses)): ?>
                            <?php $__currentLoopData = $responses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $response): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->product_id); ?></td>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->unit_price); ?></td>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->quantity); ?></td>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->purchase_price); ?></td>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->unit_tax); ?></td>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->payable_tax); ?></td>
                                <td class="ps-3 pe-0 align-middle"><?php echo e($response->total_price); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-end my-2 pb-2">
                    <p class="pe-2 fw-bold">Total price without tax: <?php echo e($value->without_tax_amount); ?></p>
                    <p class="pe-2 fw-bold">Total tax payable: <?php echo e($value->tax_amount); ?></p>
                    <p class="pe-2 fw-bold">Net price of the purchased item: <?php echo e($value->total_purchase_amount); ?></p>
                    <p class="pe-2 fw-bold">Rounded down value of the purchased items net price: <?php echo e(round($value->total_purchase_amount)); ?></p>
                    <p class="pe-2 fw-bold">Balance payable to the customer: <?php echo e(round($value->balance_paid_amount)); ?></p>
                </div>
                <hr>
                <div class="text-end">
                    <p>Balance Denomination</p>
                    <div class="balance_denomination">
                        <?php if(isset($results)): ?>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($key); ?>: <?php echo e($result); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_purchase\resources\views/purchase/purchase_bill.blade.php ENDPATH**/ ?>