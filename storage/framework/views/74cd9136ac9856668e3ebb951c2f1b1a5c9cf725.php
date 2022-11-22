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
            <h1 class="mt-4">Manage Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
            <?php if(session('msg')): ?>
                <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                <label for="">Category Name </label>
                <input type="text" class="form-control" name="CategoryName" placeholder="tên thể loại...">
                </div>
                <div class="mb-3">
                    <label for="">Category Description</label>
                    <input type="text" class="form-control" name="CategoryDescription" placeholder="mô tả..." >
                </div>
                <button type="submit" class="btn btn-info"> Add </button>
                <a href="<?php echo e(route('admin.indextablecategory')); ?>" class="btn btn-warning">back</a>

            </form>
        </div>
    </main>
</div>

</div>

<!-- footer -->
<?php echo $__env->make('Back_end.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- js -->
<?php echo $__env->make('Back_end.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\AllLaravel\HDL-LEGO_Project\resources\views/Back_end/content/createCategory.blade.php ENDPATH**/ ?>