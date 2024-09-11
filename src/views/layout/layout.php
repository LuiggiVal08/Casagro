<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/logos3.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $_ENV['PATH_BASE'] ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo $_ENV['PATH_BASE'] ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $_ENV['PATH_BASE'] ?>/css/tailwind.css">
    <link rel="stylesheet" href="<?php echo $_ENV['PATH_BASE'] ?>/css/variables.css">
    <link rel="stylesheet" href="<?php echo $_ENV['PATH_BASE'] ?>/fonts/Montserrat/Montserrat.css" />
    <link rel="stylesheet" href="<?php echo $_ENV['PATH_BASE'] ?>/fonts/google-icons/index.css" />
    <title><?php echo isset($title) ? $title . ' | ' . $_ENV['TITLE_APP'] : $_ENV['TITLE_APP']; ?></title>
    <script src="<?php echo $_ENV['PATH_BASE'] ?>/js/libraries/alpinejs.min.js" defer></script>
</head>

<body>
    <div id="root" class="relative">
        <?= $header ?>

        <main class="bg-secondary bg-[linear-gradient(to_right,#00000040,#00595440),linear-gradient(93deg,#00595440,#00595440),url(/images/fondo.png)] bg-no-repeat bg-fixed bg-center bg-cover ">

            <div class="w-full h-full  ">

                <?= $content ?>
            </div>

        </main>

        <?= $footer ?>

        <!-- Enlaza con el archivo JS principal -->
    </div>
    <script async type="module" src="<?php echo $_ENV['PATH_BASE'] ?>/js/main.js">

    </script>
</body>

</html>
