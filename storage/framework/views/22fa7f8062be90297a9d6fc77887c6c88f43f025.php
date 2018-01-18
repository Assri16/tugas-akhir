<html>
    <head>
        <meta charset="utf-8">
        <title>..::Ujian Online SMA NEGERI AMBULU::..</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
        <div class="container">
            <br/>
            <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <p>
                <?php echo e(\Session::get('success')); ?>

                </p>
            </div><br/>
            <?php endif; ?>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Kemampuan</th>
                    <th colspan="2">Action</th>
                </tr>    
            </thead>
            <tbody>
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sswa['nis']); ?></td>
                    <td><?php echo e($sswa['nama_siswa']); ?></td>
                    <td><?php echo e($sswa['id_kelas']); ?></td>
                    <td><?php echo e($sswa['jekel']); ?></td>
                    <td><?php echo e($sswa['kemampuan']); ?></td>
                    <td>
                    <a href="<?php echo e(action('siswacontroller@edit', $sswa['nis'])); ?>" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                    <form method="post" action="<?php echo e(action('siswacontroller@destroy', $sswa['nis'])); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input name="_method" type="hidden" value="DELETE">
                    <button  class="btn btn-danger" type="submit">Hapus</button>
        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
        </div>
    </body>
</html>