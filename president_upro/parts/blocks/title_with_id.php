<?php if ($field = get_field('title')): ?>
	<h2<?php if(get_field('id')) echo ' id="section-' . get_field('id') . '"' ?>><?= $field ?></h2>
<?php endif ?>