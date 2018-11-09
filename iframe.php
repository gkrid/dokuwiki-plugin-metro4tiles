<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">

    <base target="_parent">
</head>
<body>

<?php
    $inc = realpath(__DIR__.'/../../..');
    $name = str_replace('/', '', $_GET['name']);
    include "$inc/data/meta/metro4tiles/cache/$name.html";
?>

<!-- jQuery first, then Metro UI JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>