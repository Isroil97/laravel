
<?php $__env->startSection('content'); ?>
    <div class="intro-section" style="background-image: url('images/asd.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                    <h1><?php echo e(__('messages.blog')); ?></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed
                        quisquam voluptate facilis non.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary"><?php echo e(__('messages.f2')); ?></span>
                    <h3 class="heading-92913 text-black text-center"><?php echo e(__('messages.f2')); ?></h3>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-39381">
                            <a href="<?php echo e(route('showblog', ['id' => $photo->id])); ?>">
                                <img src="<?php echo e(asset('/storage/assets/images/' . $photo->images)); ?>" alt="<?php echo e($photo->title); ?>" class="img-fluid">
                            </a>
                            <div class="p-4">
                                <h3><a href="#"><span class="icon-room mr-1 text-primary"></span><?php echo e($photo->title); ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/front/blog.blade.php ENDPATH**/ ?>