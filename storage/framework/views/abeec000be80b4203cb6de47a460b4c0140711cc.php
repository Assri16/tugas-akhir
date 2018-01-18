<html>
    <head>
        <meta charset="utf-8">
        <title>..:: UJIAN ONLINE SMA NEGERI AMBULU ::..</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
        <div class="container">
            <h2>Penambahan Data Siswa</h2><br/>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br />
            <?php endif; ?>
            <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e(\Session::get('success')); ?></p>
            </div><br />
            <?php endif; ?>
            <form method="post" action="<?php echo e(url('siswa')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nis">NIS:</label>
                        <input type="text" class="form-control" name="nis">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nama_siswa">Nama:</label>
                        <input type="text" class="form-control" name="nama_siswa">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="kelas">Kelas:</label>
                        <select name="id_kelas" id="" class="form-control">
                            <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($klas->id); ?>"> <?php echo e($klas->nama_kelas); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="jekel">Jenis Kelamin:</label>
                        <input type="text" class="form-control" name="jekel">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="kemampuan">Kemampuan:</label>
                        <input type="text" class="form-control" name="kemampuan">
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>