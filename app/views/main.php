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
          <link href="<?= BASE_URL_ASSETS ?>css/style.css" rel="stylesheet" type="text/css">
          <link href="<?= BASE_URL_ASSETS ?>css/contact.css" rel="stylesheet" type="text/css">
          
      <script src="https://kit.fontawesome.com/bb762585be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 


    <!-- page specific js -->
    <script src="<?= BASE_URL_ASSETS ?>js/global.js"></script>

    <?= $head ?? null ?>
</head>
<body>
{{content}}
</body>
</html>
