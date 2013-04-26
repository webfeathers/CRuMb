<h1>Employees page</h1>

<div class="span12">
	<p>View a specific employee's information</p>
</div>


<div class="span12">
	<span class="span1"><?php print_r($user['username']); ?></span>
	<span class="span1"><a href="/admin/editEmployee/<?php print_r($user['id']); ?>">edit</a></span>
</div>