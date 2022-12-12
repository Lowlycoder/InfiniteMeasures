<!DOCTYPE html>
<html lang="fr">
<head>
    <script>console.log("<?= BASE_URL_ASSETS ?>")</script>
    <title><?= $this->escapeHtml($title) ?></title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>


    <link rel="shortcut icon" href="<?= BASE_URL_ASSETS ?>images/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">

    <!-- page specific css -->
    <link href="<?= BASE_URL_ASSETS ?>css/global.css" rel="stylesheet" type="text/css">
    <link href="<?= BASE_URL_ASSETS ?>css/pc.css" media="screen and (min-width: 1400px)"
          rel="stylesheet" type="text/css">
    <link href="<?= BASE_URL_ASSETS ?>css/mobile.css" media="screen and (max-width: 1400px)"
          rel="stylesheet" type="text/css">

    <!-- page specific js -->
    <script src="<?= BASE_URL_ASSETS ?>js/global.js"></script>
</head>
<body>
{{content}}
</body>
</html>
