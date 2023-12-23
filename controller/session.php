<?php
session_start();

if (isset($_SESSION['id'])) {
    $title = $_SESSION['nombre'];
}
?>