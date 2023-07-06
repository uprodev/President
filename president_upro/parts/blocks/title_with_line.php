<?php if ($field = get_field('title')): ?>
	<<?= get_field('title_type') == 'h3' ? 'h3' : 'h2' ?> class="after"><?= $field ?></<?= get_field('title_type') == 'h3' ? 'h3' : 'h2' ?>>
	<?php endif ?>