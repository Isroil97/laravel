
<?php $__env->startSection('content'); ?>
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('/images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8 mt-5" data-aos="fade-up">
                    <h1>Hoziroq Joyingizni Band Qiling!</h1>
                    <p class="text-white text-center">
                        September 20, 2019 by <a href="#">Admin</a>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content">
                    <h2 class="heading-92913 text-black "><?php echo e($photo->title); ?></h2>
                    <img src="<?php echo e(asset('/storage/assets/images/' . $photo->images)); ?>" alt="P<?php echo e($photo->title); ?>"
                        class="img-fluid">
                    <p class="my-3"><?php echo e($photo->info); ?></p>


                    <iframe src="<?php echo e($photo->maps); ?>" width="100%" height="400" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-searchbox">
                            <h3 class="heading-92913 text-black">Turni Sotib Oling</h3>
                            <br>
                            <form class="my-3" action="<?php echo e(route('payment')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="input-box">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input type="text" name="name" class="form-control" placeholder="Ism">
                                    </div>
                                </div>
                                <br>
                                <div class="input-box">
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="form-group">

                                        <span class="la la-phone form-icon"></span>
                                        <input type="text" class="form-control" name="phone"
                                            placeholder="Telefon Raqam">
                                    </div>
                                </div>
                                <br>
                                <div class="input-box">
                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="form-group">
                                        <span class="la la-money form-icon"></span>
                                        <input type="text" class="form-control" name="price" placeholder="Summa">
                                    </div>
                                </div>
                                <br>
                                <input type="hidden" name="photo_id" value="<?php echo e($photo->id); ?>">
                                <div class="btn-box">
                                    <button type="submit" class="btn btn-danger"><img
                                            src="https://www.pearltour.uz/front/payme.png" width="50px" height="40px">
                                        To'lov Qilish</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/front/showblog.blade.php ENDPATH**/ ?>