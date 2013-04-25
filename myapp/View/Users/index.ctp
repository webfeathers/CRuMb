<!-- app/View/Users/index.ctp -->
<div class="users form">

<ul>
<?php
	foreach($users as $user){
?>
<li><?php echo $user['User']['username']; ?></li>
<?php } ?>
</ul>
</div>