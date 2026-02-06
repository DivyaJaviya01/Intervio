<?php
// Progress Bar Component for Intervio
// Usage: $id='progressBarId'; include 'components/progress-bar.php';

if (!isset($id)) {
    trigger_error('progress-bar component requires $id variable', E_USER_WARNING);
    return;
}
?>

<div class="section-progress">
    <div class="progress-bar" id="<?php echo htmlspecialchars($id); ?>"></div>
</div>
