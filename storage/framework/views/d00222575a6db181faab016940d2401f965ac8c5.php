<?php $__env->startSection('title', 'Purchase Lists'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="container">
    <div class="text-center">
        <h3>Purchase Lists</h3>
    </div>
    <div class="text-end">
        <a href="/purchase-list" class="btn btn-warning rounded">Go Back</a>
    </div>

    <div class="table table-responsive fixTableHead first_content">
        <table id="purchase_view_example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Product ID</th>
                    <th class="ps-3 pe-0 align-middle">Quantity</th>
                    <th class="ps-0 pe-0 align-middle">Unit Price</th>
                    <th class="ps-0 pe-0 align-middle">Purchase Price</th>
                    <th class="ps-0 pe-0 align-middle">Unit Tax</th>
                    <th class="ps-0 pe-0 align-middle">Payable Tax</th>
                    <th class="ps-0 pe-0 align-middle">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($results)): ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->product_id); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->quantity); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->unit_price); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->purchase_price); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->unit_tax); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->payable_tax); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result->total_price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_purchase\resources\views/purchase/purchase_view.blade.php ENDPATH**/ ?>