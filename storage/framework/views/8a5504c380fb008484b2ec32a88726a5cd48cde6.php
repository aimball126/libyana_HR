<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <title><?php echo e(config("global.name")); ?> - <?php echo $__env->yieldContent("title"); ?></title>
    <!-- Latest compiled and minified CSS -->

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link href="<?php echo e(asset('/assets/css/style-a4.css')); ?>" rel="stylesheet" type="text/css">
    <style>
           div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.col {
  text-align: right;
}
div.text-center {
  text-align: right;
}

div.c {
  text-align: justify;
}


        @page  {
            size: A4
        }
    </style>
    <?php if(request()->input('landscape')): ?>
    <style>
        @media  print {
            @page  {
                size: landscape
            }
        }

    </style>
    <?php endif; ?>



</head>

<body class="A4 <?php if(request('landscape')): ?> landscape <?php endif; ?>" >

    <section class="sheet padding-5mm" dir="rtl">
        <button class="btn btn-info  float-right mt-3 mr-2" id="print_Button" onclick="history.back()"> <i
            class="mdi mdi-printer ml-1"></i>رجوع</button>
        <?php if(!isset($without_logo)): ?>
        <div class="text-center">
            <!-- Latest compiled and minified CSS
            <img src="<?php echo e(asset('/assets/images/logo.png')); ?>" width="200" />
            -->
        </div>

        <?php endif; ?>
        <?php echo $__env->yieldContent("header"); ?>

        <hr>
        <?php echo $__env->yieldContent("content"); ?>

    </section>

</body>

</html>
<?php /**PATH D:\libyana\resources\views\layouts\a4.blade.php ENDPATH**/ ?>