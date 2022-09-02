
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('messages.payment_table')); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Price</th>
                                    <th>Davlat Nomi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?php echo e($payment->name); ?></td>
                                        <td><?php echo e($payment->phone); ?></td>
                                        <td><?php echo e($payment->price); ?></td>
                                        <td><?php echo e($payment->photo->title); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('deletpayment', ['id' => $payment->id])); ?>" method="post">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-danger"><?php echo e(__('messages.delet')); ?></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/admin/payment/index.blade.php ENDPATH**/ ?>