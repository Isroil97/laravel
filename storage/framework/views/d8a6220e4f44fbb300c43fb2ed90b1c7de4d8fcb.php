
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo e($photo->title); ?></h4>
                            </div>
                            <div class="mt-2">
                                 <img src="<?php echo e(asset('/storage/assets/images/' . $photo->images)); ?>" class="img-fluid w-100 mb-2"   alt="<?php echo e($photo->title); ?>" />
                            </div>
                            <div class="mt-2 p-2">
                                <h4><?php echo e($photo->info); ?></h4>
                            </div>
                            <div class="mt-2 p-2">
                              
                                <iframe src="<?php echo e($photo->maps); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="mt-2 d-flex justify-content-end align-items-center">
                                <a href="<?php echo e(route('edit_photo', ['id' => $photo->id])); ?>" class="btn btn-success m-1"><?php echo e(__('messages.edit')); ?></a>
                                <form action="<?php echo e(route('deletphoto', ['id'=>$photo->id])); ?>" method="post">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger"><?php echo e(__('messages.delet')); ?></button>
                                </form>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/admin/photos/showphoto.blade.php ENDPATH**/ ?>