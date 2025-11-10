<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div class="max-w-3xl mx-auto p-4">
  <h2 class="text-xl font-bold">Leaderboard: <?php echo e($game->name); ?></h2>
  <table class="min-w-full mt-4 border text-sm">
    <thead><tr>
      <th class="p-2 border">#</th>
      <th class="p-2 border">User</th>
      <th class="p-2 border">Score</th>
      <th class="p-2 border">Time (s)</th>
      <th class="p-2 border">Date</th>
    </tr></thead>
    <tbody>
    <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td class="p-2 border"><?php echo e($i+1); ?></td>
        <td class="p-2 border"><?php echo e($p->user->name); ?></td>
        <td class="p-2 border font-bold"><?php echo e($p->score); ?></td>
        <td class="p-2 border"><?php echo e($p->duration_sec); ?></td>
        <td class="p-2 border"><?php echo e($p->created_at->format('Y-m-d H:i')); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Adam\Documents\Kuliah\semester 7\capstone\englishedu\resources\views/leaderboard/index.blade.php ENDPATH**/ ?>