
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="row">
                <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo e(asset('/storage/assets/user_img/' . $workers->images)); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($workers->name); ?></h5>
                            <p class="card-text"><?php echo e($workers->info); ?></p>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="<?php echo e(route('exit_workers', ['id' => $workers->id])); ?>" class="btn btn-primary mx-2"><?php echo e(__('messages.edit')); ?></a>
                               <form action="<?php echo e(route('delete_workers', ['id' => $workers->id])); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger"><?php echo e(__('messages.delet')); ?></button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/admin/workers/index.blade.php ENDPATH**/ ?>