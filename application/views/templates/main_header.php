<!DOCTYPE html>
<html class="no-js">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="format-detection">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="CGV, Cinema, Movie, Ticketing" />
<!-- favicon -->
<link rel="shortcut icon" href="<?= base_url('assets/favicon/cgv.ico'); ?>">
<link rel="icon" sizes="16x16 32x32 64x64" href="favicon/cgv.ico">
<link rel="icon" type="image/png" sizes="196x196" href="<?= base_url('assets/favicon/cgv-192.png'); ?>">
<link rel="icon" type="image/png" sizes="160x160" href="<?= base_url('assets/favicon/cgv-160.png'); ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/cgv-96.png'); ?>">
<link rel="icon" type="image/png" sizes="64x64" href="<?= base_url('assets/favicon/cgv-64.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/cgv-32.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/cgv-16.png'); ?>">
<link rel="apple-touch-icon" href="<?= base_url('assets/favicon/cgv-57.png'); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/favicon/cgv-114.png'); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/favicon/cgv-72.png'); ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/favicon/cgv-144.png'); ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/favicon/cgv-60.png'); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/favicon/cgv-120.png'); ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/favicon/cgv-76.png'); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/favicon/cgv-152.png'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/cgv-180.png'); ?>">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="<?= base_url('assets/favicon/cgv-144.png'); ?>">
<meta name="msapplication-config" content="<?= base_url('assets/favicon/browserconfig.xml'); ?>">
<!-- favicon[end] -->
<!-- atf -->
<?php 
    $atf_min_path = base_url('assets/css/atf-min.css');
?>
<style type="text/css">
<?php include($atf_min_path); ?>
</style>
<title>CGV Cinema</title>
</head>

<?php
    $id = isset($body_class) ? $body_class : 'home';
?>

<body id="<?= $id ?>">
