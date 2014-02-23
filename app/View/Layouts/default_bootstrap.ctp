<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> - Melody
	</title>
	<?php
        /* CSSes */
		echo $this->Html->css('bootstrap');
        echo $this->Html->css('app');
        
        /* Google Fonts */
        echo $this->Html->css('http://fonts.googleapis.com/css?family=Lato:400,700,900');
        
        /* Scripts */
        echo $this->Html->script('jquery-1.11.0.min');
        echo $this->Html->script('bootstrap.min');
	?>
</head>
<body>
    <?php echo $this->Element('navigation') ?>
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
    </div>
    <?php echo $this->Element('footer') ?>
        
	<?php // echo $this->element('sql_dump'); ?>
    
    <?php 
        /* Scripts */
        echo $this->fetch('script');
    ?>
</body>
</html>
