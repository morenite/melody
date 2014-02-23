<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
        /* CSSes */
		echo $this->Html->css('bootstrap');
        echo $this->Html->css('app');
        
        /* Google Fonts */
        echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,800');
	?>
</head>
<body>
    <?php echo $this->Element('navigation') ?>
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
    </div>
	<?php // echo $this->element('sql_dump'); ?>
    
    <?php 
        /* Scripts */
    ?>
</body>
</html>
