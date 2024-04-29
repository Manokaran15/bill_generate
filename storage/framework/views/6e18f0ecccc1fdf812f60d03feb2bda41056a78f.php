<?php $__env->startSection('title', 'Purchase Lists'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="container">
    <div class="text-center">
        <h3>Purchase Lists</h3>
    </div>
    <div class="text-end">
        <a href="/" class="btn btn-warning rounded">Goto Home</a>
    </div>

    <div class="table table-responsive fixTableHead first_content">
        <table id="purchase_example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Email</th>
                    <th class="ps-3 pe-0 align-middle">Without Tax Amount</th>
                    <th class="ps-0 pe-0 align-middle">Tax Amount</th>
                    <th class="ps-0 pe-0 align-middle">Total Amount</th>
                    <th class="ps-0 pe-0 align-middle">Customer Paid Amount</th>
                    <th class="ps-0 pe-0 align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($results)): ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['email']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['without_tax_amount']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['tax_amount']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['total_purchase_amount']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['customer_paid_amount']); ?></td>
                        <td class="ps-3 pe-0 align-middle">
                            <div>
                                <a href="/view-purchase/<?php echo e($result['id']); ?>" class="btn btn-primary">View</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_purchase\resources\views/purchase/purchase_list.blade.php ENDPATH**/ ?>