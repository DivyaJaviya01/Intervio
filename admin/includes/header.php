<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Admin Panel'; ?> - Intervio Admin</title>
    <link href="../../assets/css/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/admin_common.css" rel="stylesheet">
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body>
<?php include 'includes/sidebar.php'; ?>

<!-- Mobile Toggle -->
<button class="mobile-toggle" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</button>

<!-- Main Content -->
<div class="main-content">