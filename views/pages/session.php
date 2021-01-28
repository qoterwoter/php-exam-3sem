<?php
	$types = [
		'',
		'Число',
		'Положительное число',
		'Строка',
		'Текст',
		'Множественный выбор (radio)',
		'Множественный выбор (чекбоксы)',
	];
?>
<p>
	<span>Название экспертной сессии:</span>
	<b><?= $poll->name ?></b>
	<hr>


	<?php foreach($questions as $question) : ?>
		<?php 
			$options = [];
			foreach ($question->options as $key => $option)
			{
				if (empty($key)) continue;
				$options[] = "$key -> $option";
			}
		?>
		<p>
			<span><?= $question->name ?></span>
			<strong><?= $types[$question->type] ?></strong>
			<?php if ( ! empty($options)) { ?>[ <?= print_r(join(' | ', $options), true) ?> ]<?php } ?>
		</p>
	<?php endforeach; ?>	
</p>
