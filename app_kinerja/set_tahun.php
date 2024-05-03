<?php
session_start();
$_SESSION['tahun'] = $_GET['tahun'];
header('Location: ' . $_SERVER['HTTP_REFERER']);
