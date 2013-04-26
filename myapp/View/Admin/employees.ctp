<h1>Employees page</h1>

<div class="span12">
	<p>Lists all employees of all types</p>
</div>

<?php foreach ($users as $user){ ?>
<div class="span12">
	<span class="span1"><?php print_r($user['User']['username']); ?></span>
	<span class="span1"><a href="viewEmployee/<?php print_r($user['User']['id']); ?>">view</a></span>
</div>
<?php } ?>