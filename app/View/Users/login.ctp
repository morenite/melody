<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="page-header">
            <h1>Sign In</h1>
        </div>
        
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('User.username', array('div' => 'form-group', 'class' => 'form-control')) ?>
        <?php echo $this->Form->input('User.password', array('div' => 'form-group', 'class' => 'form-control')) ?>
        
        <input type="submit" value="Sign In" class="btn btn-success btn-block" style="margin: 20px 0;"/>
        
        <?php echo $this->Form->end(); ?>
    </div>
</div>