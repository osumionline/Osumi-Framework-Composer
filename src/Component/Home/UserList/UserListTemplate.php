<?php if (count($list) > 0): ?>
	<ul class="users">
<?php foreach ($list as $user): ?>
		<li>
			<a href="/user/<?php echo $user->get('id') ?>"><?php echo $user->get('user') ?></a>
		</li>
<?php endforeach ?>
	</ul>
<?php else: ?>
	There are no users, yet.
<?php endif ?>