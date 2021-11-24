

<?php $__env->startSection('content'); ?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Телефон</th>
      <th scope="col">ФИО</th>
      <th scope="col">Почта</th>
      <th scope="col">Город</th>
      <th scope="col">Статус</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <td scope="row"><?php echo e($user->id); ?></td>
      <td><?php echo e($user->phone); ?></td>
      <td><?php echo e($user->fio); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td><?php echo e($user->city); ?></td>
      <td>
        <?php if($user->verification=='verified'): ?> 
            Верифицирован
         <?php else: ?> Не верифицирован   
        <?php endif; ?>
      </td>
      <td><a  href="/admin_panel/users_card/<?php echo e($user->id); ?>" class="btn btn-primary">Просмотр</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\turnir\resources\views/admin/home/users.blade.php ENDPATH**/ ?>