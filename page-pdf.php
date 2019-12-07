<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>amp-iframe</title>
</head>
<style>
    html,
    body {
        border: none;
        margin: 0;
        padding: 0;
        height: 100%;
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
        -webkit-font-smoothing: antialiased;
        word-break: break-word;
        word-wrap: break-word;
    }
</style>

<body>

    <?php $dir_path = get_template_directory_uri(); ?>
    <iframe width="100%" height="100%" src="<?php echo $dir_path; ?>/web/viewer.html" frameborder="0"></iframe>

</body>

</html>