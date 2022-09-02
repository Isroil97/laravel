
<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo e(__('messages.photos')); ?></h4>
                            </div>
                            <div class="filter-container  row">
                                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="filtr-item col-sm-2 mt-2 mb-2 " data-category="1" data-sort="white sample">
                                        <a href="<?php echo e(route('showphoto', ['id' => $photo->id])); ?>">
                                            <img src="<?php echo e(asset('/storage/assets/images/' . $photo->images)); ?>"
                                                class="img-fluid mb-2" style="height:100%; cursor: pointer;"
                                                alt="<?php echo e($photo->title); ?>" />
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/admin/photos/index.blade.php ENDPATH**/ ?>