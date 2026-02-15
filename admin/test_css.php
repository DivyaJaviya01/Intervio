<?php
$pageTitle = 'CSS Test';
include 'includes/header.php';
?>

<div style="background: red; color: white; padding: 20px; margin: 20px;">
    <h1>Inline CSS Test - This should be visible with red background</h1>
</div>

<div class="sidebar">
    <h3>Sidebar Test</h3>
</div>

<div style="margin-left: 270px; padding: 20px;">
    <h1>External CSS Test</h1>
    <p>If this text has the Inter font and light gray background, admin_common.css is working</p>
    <button class="btn btn-primary">Bootstrap Button Test</button>
</div>

<?php include 'includes/footer.php'; ?>
