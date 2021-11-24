<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content ="<?php echo e(csrf_token()); ?>">
        <title>Форма</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo e(asset("css/form.css")); ?>">
    </head>
<body> 
<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
	
<form name="login-form" class="login-form" action="" method="post" action="<?php echo e(route('user.registration')); ?>">
    <?php echo csrf_field(); ?>

    <div class="header">
		<h1>Регистрация</h1>
		<span>Введите ваши регистрационные данные для входа в ваш личный кабинет. </span>
    </div>

    <div class="content">
		 <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
           <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <div class="alert alert-danger"><?php echo e($message); ?></div>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		 <input class="form-control" id="password" name="password" type="text" value="" placeholder="password">
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="footer">
		<input type="submit" name="submit" value="Регистрация" class="button" />
</form>
		 
    </div>


</form>

</body>

</html><?php /**PATH C:\OpenServer\domains\turnir\resources\views/registration.blade.php ENDPATH**/ ?>