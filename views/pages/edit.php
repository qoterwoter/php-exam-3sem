<?php if ($poll->status) : ?>

	<h3>Просмотр сессии</h3>
	
	<?php
		include 'session.php'; 
	?>

<?php else: ?>
	
	<h3>Изменение сессии</h3>
	
	<?php include 'form.php'; ?>

	<script>
		function ready() {
			<?php foreach($questions as $question) : ?>
				addField(<?= json_encode($question); ?>);
			<?php endforeach; ?>
		};
	</script>

<?php endif; ?>

<hr>

<div class="create-link">
	<form method="POST" action="./?page=create_link&poll_id=<?= $poll_id ?>">
		<input type="text" required="required" name="title" placeholder="Имя репондента">
		<input type="submit" value="Получить ссылку">
	</form>
</div>

<?php if ($poll_status) : ?>

	<hr>

	<h4>Список ссылок</h4>

	<table>
		<?php foreach ($results as $result) : ?>
			<tr>
				<?php if (empty($result->results)) : ?>
					<td><a target="_blank" href="./?page=poll&link=<?= $result->link ?>"><?= $result->title ?></a></td>
					<td>не заполнена</td>
				<?php else: ?>
					<td><a target="_blank" href="./?page=view&link=<?= $result->link ?>"><?= $result->title ?></a></td>
					<td>заполнена</td>
				<?php endif; ?>
			</tr>
		<?php endforeach; ?>
	</table>
	
<?php endif; ?>