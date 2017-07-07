<?php

/**
 *
 */
?>
<h1>Members</h1>

<?php foreach ($members as $member) : ?>
	<ul>
		<li><?php echo $member->name;?></li>
		<li><?php echo $member->age;?></li>
		<li><?php echo $member->gender;?></li>
		<li><?php echo $member->save;?></li>
	</ul>
<?php endforeach; ?>
