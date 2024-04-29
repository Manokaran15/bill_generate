<?php $__env->startSection('title', 'Product Lists'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="container">
    <div class="text-center">
        <h3>Product Lists</h3>
    </div>
    <div class="text-end">
        <button class="btn btn-warning"><a href="/add-product" class="text-decoration-none text-dark">Add Product</a></button>
    </div>
    <div class="table table-responsive fixTableHead first_content">
        <table id="example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Product ID</th>
                    <th class="ps-3 pe-0 align-middle">Product Name</th>
                    <th class="ps-0 pe-0 align-middle">Available Stocks</th>
                    <th class="ps-0 pe-0 align-middle">Price</th>
                    <th class="ps-0 pe-0 align-middle">Tax</th>
                    <th class="ps-0 pe-0 align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($results)): ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['product_id']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['product_name']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['available_stocks']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['product_price']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['tax_percentage']); ?></td>
                        <td class="ps-3 pe-0 align-middle">
                            <div>
                                <a href="/edit-product/<?php echo e($result['id']); ?>" class="btn btn-primary">Edit</a>
                                <a href="/delete-product/<?php echo e($result['id']); ?>" class="btn btn-danger">Delete</a>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_purchase\resources\views/product_list.blade.php ENDPATH**/ ?>