<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Administration <small>Organization Name</small></h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 menu-container">
        <?php echo $this->Element('administration_menu') ?>
    </div>
    <div class="col-md-9">
    	<p align="center" id="loading" style="display:none">
    		Please wait while fetching content... <br/>
    		<?php echo $this->Html->image('loading.gif') ?>
    	</p>
    	<div id="content" style="display:none"></div>
    </div>
</div>
