<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    <?php include ('./styles.php'); ?>
    </style>
</head>
<body>
    <div id="wrapper" class="modernmuse grid alula-grid-wrapper height-full nimbuscloud_font ">
        <header class="header flex height-twelvevh calypsocoral_bg ">
            <?php include('./header.php'); ?>
        </header>
        <div class="sidebar calypsocoral_bg">
            <?php include('./sidebar.php'); ?>
        </div>
        <div id="main" class="main">
            <?php include('./main.php'); ?>
        </div>
    </div>
    <script>
    <?php include('./js.php'); ?>
    </script>
</body>
</html>