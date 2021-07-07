<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị nhân viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="<?php ?>">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php require_once 'layouts/header.php'; ?>
        <?php require_once 'layouts/setting-ui.php'; ?>
        <div class="app-main">
            <?php require_once 'layouts/sidebar.php'; ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?php require_once 'components/total.php';  ?>
                    <?php require_once 'components/chart.php'; ?>
                    <?php require_once 'components/total-2.php';; ?>
                </div>
            </div>

        </div>
        <?php require_once 'layouts/footer.php'; ?>
    </div>
    <script type="text/javascript" src="public/js/script.js"></script>
</body>

</html>