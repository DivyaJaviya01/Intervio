<?php
// Form Section Component for Intervio
// Usage: $title='Section Title'; $id='progressBarId'; include 'components/form-section.php';

if (!isset($title) || !isset($id)) {
    trigger_error('form-section component requires $title and $id variables', E_USER_WARNING);
    return;
}
?>

<h5><?php echo htmlspecialchars($title); ?></h5>
<?php 
$progress_id = $id;
include __DIR__ . '/progress-bar.php';
unset($progress_id);
?>
