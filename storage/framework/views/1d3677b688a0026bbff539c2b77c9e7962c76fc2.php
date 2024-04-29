<?php $__env->startSection('title', 'Edit Product Details'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="create">
    <div class="create_content">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
                    <h2>Edit Product</h2>
                    <a href="/" class="btn btn-warning rounded">Goto Home</a>
                </div>
            </div>
            <hr class="my-2">
            <div class="row my-3">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-info">
                        <h3 class="text-dark text-center fw-bold">Edit Product</h3>
                    </div>
                    <div class="card-body p-4">
                        <?php if(isset($edit_products)): ?>
                        <?php $__currentLoopData = $edit_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edit_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form method="post" action="/update-product/<?php echo e($edit_product['id']); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="product_id">Product ID:</label>
                                    <input type="text" name="product_id" id="product_id" class="form-control <?php $__errorArgs = ['product_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Product ID" value="<?php echo e($edit_product['product_id']); ?>">
                                    <?php $__errorArgs = ['product_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="product_name">Product Name:</label>
                                    <input type="text" name="product_name" id="product_name" class="form-control <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Product Name" value="<?php echo e($edit_product['product_name']); ?>">
                                    <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="available_stocks">Available Stocks:</label>
                                    <input type="text" name="available_stocks" id="available_stocks" class="form-control <?php $__errorArgs = ['available_stocks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Available Stocks" value="<?php echo e($edit_product['available_stocks']); ?>">
                                    <?php $__errorArgs = ['available_stocks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="product_price">Price:</label>
                                    <input type="text" name="product_price" id="product_price" class="form-control <?php $__errorArgs = ['product_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Price" value="<?php echo e($edit_product['product_price']); ?>">
                                    <?php $__errorArgs = ['product_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="tax_percentage">Tax Percentage:</label>
                                    <input type="text" name="tax_percentage" id="tax_percentage" class="form-control <?php $__errorArgs = ['tax_percentage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tax Percentage" value="<?php echo e($edit_product['tax_percentage']); ?>">
                                    <?php $__errorArgs = ['tax_percentage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="my-2 text-center">
                                <input type="submit" value="Update Product" class="btn btn-primary">
                            </div>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_purchase\resources\views/product_edit.blade.php ENDPATH**/ ?>