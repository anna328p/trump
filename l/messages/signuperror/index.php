<?php
 $ignorelogin = 'yes';
 require '../../../resource/head.php' ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <title>404 error page</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="text-wrapper">
    <div class="title" data-content="404">
        <?php echo $_GET["title"] ?>
    </div>

    <div class="subtitle">
        <?php echo $_GET["subtitle"] ?>
    </div>

    <div class="buttons">
        <a class="button" href="../../login/signup.php">Try again</a>
    </div>
</div>


</body>
