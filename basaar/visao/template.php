<html>
<head>
 <base href="<?= BASE_URL ?>">      

 <title>SNK web loja</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
 <meta name="description" content="" />
 <meta name="keywords" content="" />
 <link rel="stylesheet" href="publico/assets/css/main.css" />

 <link rel="stylesheet" href="publico/assets/css/font-awesome.min.css" />

</head>
<body class="container">
    <?php require "visao/cabecalho.php"; ?>

    <?php alertComponentRender(); ?>

    <main class="container">
        <?php require $viewFilePath; ?>
    </main>

</body>
<script src="publico/assets/js/jquery.min.js"></script>
<script src="publico/assets/js/browser.min.js"></script>
<script src="publico/assets/js/breakpoints.min.js"></script>
<script src="publico/assets/js/util.js"></script>
<script src="publico/assets/js/main.js"></script>

</html>
