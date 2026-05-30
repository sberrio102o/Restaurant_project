<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superbuildings</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/app.css">
    <!-- DataTables  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>
</head>

<body>
    <header class="header">
        <div class="container nav">
            <div class="logo">superbuildings</div>
            <nav>
                <a href="<?php echo BASE_URL; ?>index.php">Home</a>
                <a href="<?php echo BASE_URL; ?>index.php#menu">Menu</a>
                <a href="<?php echo BASE_URL; ?>index.php#gallery">Gallery</a>
                <a href="<?php echo BASE_URL; ?>contatcto.php">Contact</a>
                <?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<?php if (!empty($_SESSION['login'])): ?>

<!-- 🔐 Usuario logueado -->
<span class="nav-user">👤 <?= $_SESSION['usuario']; ?></span>

<a href="<?= BASE_URL; ?>admin/logout.php" class="btn-salir">
🚪 Salir
</a>

<?php else: ?>

<!-- 🔓 Usuario no logueado -->
<a href="<?= BASE_URL; ?>admin/login.php">
Iniciar sesión
</a>

<?php endif; ?>
            </nav>
        </div>
        </div>
    </header>
</body>

