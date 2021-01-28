<h3>Список сессии</h3>

<?php if ( ! $polls) : ?>
	<p>список сессий пуст</p>
<?php endif; ?>

<table>
	<?php foreach ($polls as $poll) : ?>
		<tr>
			<td><a href="./?controller=polls&action=edit&poll_id=<?= $poll->id ?>"><?= $poll->name ?></a></td>
			<td><a href="./?controller=polls&action=remove&poll_id=<?= $poll->id ?>" class="remove" title="удалить...">✖</a>
			<b3><? $name ?></b3>
		</tr>
	<?php endforeach; ?>
</table>