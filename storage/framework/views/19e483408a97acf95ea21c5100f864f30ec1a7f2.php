<!-- head --> 
<?php echo $__env->make('Back_end.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- nav --> 
<?php echo $__env->make('Back_end.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="layoutSidenav">

<!-- sidebar -->
<?php echo $__env->make('Back_end.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Users</li>
            </ol>
            <?php if(session('msg')): ?>
                <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for=""> Name </label>
                    <input type="text" class="form-control" name="uName" value ="<?php echo e($cate->uName); ?>" placeholder="tên của bạn...">
                </div>
                <div class="mb-3">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="uUsername" value ="<?php echo e($cate->uUsername); ?>" placeholder="user name của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Password </label>
                    <input type="text" class="form-control" name="uPassword" value ="<?php echo e($cate->uPassword); ?>" placeholder="password của bạn...">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="uEmail" value ="<?php echo e($cate->uEmail); ?>" placeholder="Email của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Phone Number  </label>
                    <input type="text" class="form-control" name="uPhoneNumber" value ="<?php echo e($cate->uPhoneNumber); ?>" placeholder="số đt...">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="Address" value ="<?php echo e($cate->Address); ?>" placeholder="địa chỉ ..." >
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="<?php echo e(route('admin.manageusers')); ?>" class="btn btn-warning">back</a>

            </form>
        </div>
    </main>
</div>

</div>

<!-- footer -->
<?php echo $__env->make('Back_end.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- js -->
<?php echo $__env->make('Back_end.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\AllLaravel\HDL-LEGO_Project\resources\views/Back_end/content/editUsers.blade.php ENDPATH**/ ?>