
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tournaments</title>

    <!-- ! google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo e(asset("css/style.css")); ?>">
</head>
<body>



<div class="main-container">

    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow p-3 mb-5 bg-body rounded">
            <div class="container-fluid header-indent">
                <a class="navbar-brand title text-uppercase logo-indent-mr" href="<?php echo e(route('main')); ?>">snowmatch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('tournament')); ?>">Турниры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Рейтинг</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Помощь</a>
                    </li>              
                    </ul>
                    <a href="<?php echo e(route('profile')); ?>">   
                     <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M19.5673 0.576935C8.91574 0.576935 0.25 9.24268 0.25 19.8942C0.25 24.5594 1.91258 28.8433 4.67624 32.1852C4.68332 32.1949 4.68396 32.2071 4.69169 32.2161C6.68717 34.6224 9.19327 36.4672 11.9859 37.6591C12.0181 37.6726 12.0497 37.6874 12.0818 37.7009C12.3079 37.7962 12.5364 37.8844 12.7657 37.9707C12.8558 38.0049 12.946 38.0396 13.0374 38.0725C13.2351 38.1433 13.4341 38.2103 13.6343 38.2747C13.7625 38.3159 13.8906 38.3564 14.02 38.3951C14.1971 38.4479 14.3748 38.4987 14.5538 38.547C14.7109 38.5895 14.8693 38.6288 15.0277 38.6668C15.1881 38.7054 15.349 38.7441 15.5107 38.7782C15.691 38.8168 15.8732 38.851 16.0561 38.8844C16.2029 38.9115 16.349 38.9398 16.4971 38.9636C16.7 38.9965 16.9041 39.0222 17.1089 39.0486C17.2409 39.0654 17.3722 39.0847 17.5049 39.0989C17.7367 39.1233 17.9704 39.1407 18.2048 39.1568C18.3136 39.1645 18.4218 39.1761 18.5313 39.1819C18.8732 39.2012 19.2189 39.2115 19.5673 39.2115C19.9157 39.2115 20.2614 39.2012 20.6046 39.1832C20.7141 39.1774 20.8223 39.1658 20.9311 39.1581C21.1655 39.1414 21.3992 39.1246 21.631 39.1001C21.7637 39.086 21.895 39.0667 22.027 39.0499C22.2318 39.0235 22.4359 38.9978 22.6388 38.9649C22.7862 38.9411 22.933 38.9128 23.0798 38.8857C23.2621 38.8522 23.4443 38.8181 23.6252 38.7795C23.7868 38.7447 23.9472 38.7067 24.1082 38.6681C24.2666 38.6294 24.425 38.5902 24.5821 38.5483C24.7611 38.5007 24.9388 38.4492 25.1159 38.3964C25.2453 38.3577 25.3734 38.3172 25.5016 38.2759C25.7018 38.2115 25.9008 38.1446 26.0985 38.0738C26.1893 38.0409 26.2794 38.0061 26.3702 37.972C26.6001 37.8857 26.828 37.7969 27.054 37.7022C27.0862 37.6887 27.1178 37.6739 27.15 37.6604C29.942 36.4685 32.4487 34.6237 34.4442 32.2174C34.4519 32.2084 34.4526 32.1955 34.4597 32.1865C37.222 28.8433 38.8846 24.5594 38.8846 19.8942C38.8846 9.24268 30.2189 0.576935 19.5673 0.576935ZM27.3953 36.1337C27.3857 36.1382 27.3766 36.1433 27.367 36.1478C27.1371 36.2586 26.9034 36.3629 26.6677 36.4646C26.6143 36.4872 26.5615 36.5103 26.508 36.5329C26.302 36.6192 26.0933 36.7009 25.8834 36.7795C25.7958 36.8123 25.7083 36.8445 25.6201 36.8754C25.434 36.9418 25.2472 37.0055 25.0586 37.066C24.9414 37.1034 24.8235 37.1388 24.7057 37.1736C24.5383 37.2238 24.3702 37.2721 24.2002 37.3172C24.0573 37.3551 23.9131 37.3899 23.7688 37.424C23.6175 37.4601 23.4668 37.4968 23.3142 37.529C23.1474 37.5644 22.9794 37.5947 22.812 37.6249C22.6761 37.6501 22.5409 37.6765 22.4037 37.6984C22.2151 37.728 22.0245 37.7518 21.8345 37.7756C21.7141 37.7911 21.5943 37.8091 21.4726 37.822C21.2556 37.8452 21.0367 37.86 20.8184 37.8754C20.7212 37.8819 20.6246 37.8928 20.5261 37.898C20.2073 37.9147 19.888 37.9237 19.5673 37.9237C19.2466 37.9237 18.9273 37.9147 18.6092 37.898C18.5113 37.8928 18.4147 37.8825 18.3168 37.8754C18.0979 37.8606 17.8796 37.8452 17.6626 37.822C17.5409 37.8091 17.4212 37.7911 17.3007 37.7756C17.1108 37.7518 16.9202 37.728 16.7315 37.6984C16.5944 37.6765 16.4591 37.6501 16.3233 37.6249C16.1552 37.5947 15.9872 37.5638 15.821 37.529C15.6684 37.4968 15.5171 37.4601 15.3664 37.424C15.2222 37.3893 15.078 37.3551 14.935 37.3172C14.7657 37.2721 14.597 37.2231 14.4295 37.1736C14.3117 37.1388 14.1939 37.1034 14.0767 37.066C13.888 37.0055 13.7006 36.9418 13.5152 36.8754C13.427 36.8439 13.3394 36.8117 13.2518 36.7795C13.0419 36.7009 12.8333 36.6192 12.6272 36.5329C12.5738 36.511 12.5216 36.4878 12.4682 36.4653C12.2325 36.3642 11.9988 36.2592 11.7683 36.1485C11.7586 36.144 11.7496 36.1394 11.7399 36.1343C9.49333 35.0474 7.5088 33.5046 5.89838 31.6308C7.14306 27.0474 10.6665 23.3527 15.1997 21.8826C15.2892 21.9374 15.3825 21.9863 15.4746 22.0378C15.5287 22.0681 15.5821 22.1003 15.6369 22.1293C15.8288 22.231 16.0232 22.3263 16.2222 22.4119C16.3748 22.4789 16.5326 22.5356 16.6897 22.5935C16.7206 22.6045 16.7515 22.6167 16.7824 22.6276C17.6555 22.9367 18.5898 23.1138 19.5673 23.1138C20.5448 23.1138 21.4791 22.9367 22.3516 22.6276C22.3825 22.6167 22.4134 22.6045 22.4443 22.5935C22.6014 22.5356 22.7592 22.4789 22.9118 22.4119C23.1107 22.3263 23.3052 22.231 23.4971 22.1293C23.5518 22.0996 23.6053 22.0681 23.6594 22.0378C23.7514 21.9863 23.8454 21.9374 23.9356 21.882C28.4687 23.3527 31.9915 27.0474 33.2369 31.6301C31.6265 33.5033 29.6419 35.0461 27.3953 36.1337ZM12.4843 14.743C12.4843 10.8376 15.662 7.65995 19.5673 7.65995C23.4726 7.65995 26.6503 10.8376 26.6503 14.743C26.6503 17.2272 25.3619 19.4132 23.4205 20.6779C23.1668 20.8427 22.9028 20.9902 22.6317 21.119C22.5995 21.1344 22.5679 21.1505 22.5357 21.1653C20.671 22.0133 18.4636 22.0133 16.5989 21.1653C16.5667 21.1505 16.5345 21.1344 16.5029 21.119C16.2312 20.9902 15.9678 20.8427 15.7141 20.6779C13.7728 19.4132 12.4843 17.2272 12.4843 14.743ZM34.2027 30.4048C32.743 26.0944 29.4127 22.6109 25.1577 20.956C26.8596 19.4229 27.9381 17.2091 27.9381 14.743C27.9381 10.1274 24.1829 6.37213 19.5673 6.37213C14.9518 6.37213 11.1965 10.1274 11.1965 14.743C11.1965 17.2091 12.275 19.4229 13.9775 20.956C9.72256 22.6115 6.39226 26.0944 4.93251 30.4048C2.79924 27.4434 1.53782 23.8144 1.53782 19.8942C1.53782 9.95291 9.62597 1.86476 19.5673 1.86476C29.5086 1.86476 37.5968 9.95291 37.5968 19.8942C37.5968 23.8144 36.3354 27.4434 34.2027 30.4048Z" fill="black"/>
                     </svg>
                   </a>

                </div>
            </div>
        </nav>       
    </header>
      <?php echo $__env->yieldContent('content'); ?><?php /**PATH C:\OpenServer\domains\turnir\resources\views/layout.blade.php ENDPATH**/ ?>