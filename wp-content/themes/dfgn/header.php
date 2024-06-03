<?php
include 'library/Render/index.php';
?>

<?php session_start(); ?>

<?= MinifyHtml::startMinifyHTML() ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/assets/favicon.png'; ?>">
    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
    <title>DFGN</title>
    <script>
        theme_directory = "<?php echo get_template_directory_uri() ?>";
    </script>

</head>

<body>
    
<?php include 'shared/components/_header/index.php'; ?>