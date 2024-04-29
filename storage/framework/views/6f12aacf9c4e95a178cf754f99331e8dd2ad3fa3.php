<?php $__env->startSection('title', 'Purchase Product'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="container">
    <div class="text-center">
        <h3>Billing Page</h3>
    </div>
    <div class="card-body p-4 row">
        <div class="col-12">
            <form>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-10 my-2 pb-2">
                        <label class="fw-bold" for="email_id">Customer Email:</label>
                        <input type="text" name="email_id" id="email_id" class="form-control" placeholder="Email" value="<?php echo e(old('email_id')); ?>">
                        <span class='text-danger d-none email_span'>The email field is required.</span>
                    </div>
                    <div>
                        <p class="btn btn-secondary" id="add_bill">Add New</p>
                    </div>
                    <div class="new_bill_section col-10 my-2 pb-2 row">
                        <label class="fw-bold" for="bill_section">Bill Section:</label>
                        <div class="pb-2 col-6">
                            <input type="text" name="product_id" id="product_id" class="form-control" placeholder="Product ID" value="">
                            <span class='text-danger d-none product_span'>The product id field is required.</span>
                        </div>
                        <div class="pb-2 col-6">
                            <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity" value="">
                            <span class='text-danger d-none qty_span'>The quantity field is required.</span>
                        </div>
                    </div>
                    <hr>
                    <div class="col-6 my-2 pb-2">
                        <p class="pb-2 fw-bold">Denominations</p>
                        <div class="row d-flex justify-content-end">
                            <?php if(isset($denominations)): ?>
                            <p class="d-flex align-items-center col-8">500 <span class="ps-3"><input type="text" name="number_of_500" id="number_of_500" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_500); ?>"></span></p>
                            <p class="d-flex align-items-center col-8">50 <span class="ps-3"><input type="text" name="number_of_50" id="number_of_50" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_50); ?>"></span></p>
                            <p class="d-flex align-items-center col-8">20 <span class="ps-3"><input type="text" name="number_of_20" id="number_of_20" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_20); ?>"></span></p>
                            <p class="d-flex align-items-center col-8">10 <span class="ps-3"><input type="text" name="number_of_10" id="number_of_10" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_10); ?>"></span></p>
                            <p class="d-flex align-items-center col-8">5 <span class="ps-3"><input type="text" name="number_of_5" id="number_of_5" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_5); ?>"></span></p>
                            <p class="d-flex align-items-center col-8">2 <span class="ps-3"><input type="text" name="number_of_2" id="number_of_2" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_2); ?>"></span></p>
                            <p class="d-flex align-items-center col-8">1 <span class="ps-3"><input type="text" name="number_of_1" id="number_of_1" class="form-control" readonly placeholder="Count" value="<?php echo e($denominations[0]->number_of_1); ?>"></span></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-10 my-2 pb-2">
                        <label class="fw-bold" for="cash">Cash paid by customer:</label>
                        <input type="text" name="cash" id="cash" class="form-control" placeholder="Price" value="<?php echo e(old('cash')); ?>">
                        <span class='text-danger d-none price_span'>The price field is required.</span>
                    </div>
                </div>
                <div class="text-end pb-3">
                    <div>
                        <a href="/" class="btn btn-danger">Cancel</a>
                        <button class="btn btn-success bill_generate_btn">Generate Bill</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_purchase\resources\views/purchase/purchase_product.blade.php ENDPATH**/ ?>