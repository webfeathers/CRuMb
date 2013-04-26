<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php // echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
		: CRuMb the simplest CRM money can't buy
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.sql');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->element('header'); ?>
	
	<div class="container">
	
	
		<div class="row">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
				
		</div>
		<?php echo $this->element('footer'); ?>
	
	</div>
	
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<?php  echo $this->element('sql_dump'); ?>
			</div>
		</div>
	</div>

	<?php
	
		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('bootstrap');
	?>
</body>
</html>
