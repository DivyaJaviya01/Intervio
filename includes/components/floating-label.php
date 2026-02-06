<?php
// Floating Label Component for Intervio
// Usage: $id='fieldName'; $name='fieldName'; $label='Field Label'; $type='text'; include 'components/floating-label.php';

if (!isset($id) || !isset($name) || !isset($label)) {
    trigger_error('floating-label component requires $id, $name, and $label variables', E_USER_WARNING);
    return;
}
$type = isset($type) ? $type : 'text';
?>

<div class="col-md-6 floating-label">
    <input class="form-control" id="<?php echo htmlspecialchars($id); ?>" placeholder=" " name="<?php echo htmlspecialchars($name); ?>" type="<?php echo htmlspecialchars($type); ?>">
    <label for="<?php echo htmlspecialchars($id); ?>"><?php echo htmlspecialchars($label); ?></label>
</div>
