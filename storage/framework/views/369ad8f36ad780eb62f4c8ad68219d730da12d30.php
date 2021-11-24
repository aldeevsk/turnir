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
	
<form name="login-form" class="login-form" method="post" action="<?php echo e(action('App\Http\Controllers\AdminPanelController@login')); ?>">
 <?php echo csrf_field(); ?>
    <div class="header">
		<h1>Админ</h1>
	
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
		<input type="submit" name="submit" value="ВОЙТИ" class="button" />
</form>
		 
    </div>
 <a name="sendMe" value="1" href="<?php echo e(route('user.registration')); ?>"><input type="submit" name="submit" value="Регистрация" class="register" /></a>
</div>

</body>

</html>

<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script><?php /**PATH C:\OpenServer\domains\turnir\resources\views/admin/login.blade.php ENDPATH**/ ?>