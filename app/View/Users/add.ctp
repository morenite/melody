<div class="row">
    <div class="col-md-12">
        <h1 class="no-margin">Add New User</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo $this->Form->create('User'); ?>
        
        <div class="form-group">
            <?php echo $this->Form->input('User.username', array('class' => 'form-control')) ?>
        </div>
        
        <div class="form-group">
            <?php echo $this->Form->input('User.password', array('class' => 'form-control')) ?>
        </div>
        
        <div class="form-group">
            <?php echo $this->Form->input('User.confirm_password', array('class' => 'form-control', 'type' => 'password')) ?>
        </div>
        
        <div class="form-group">
            <?php echo $this->Form->input('User.email', array('class' => 'form-control')) ?>
        </div>
        
        <div class="form-group">
            <?php echo $this->Form->input('User.birthday', array('class' => 'form-control', 'minYear' => date('Y') - 100)) ?>
        </div>
        
        <div class="form-group">
            <?php echo $this->Form->input('User.join_date', array('class' => 'form-control', 'minYear' => date('Y') - 100)) ?>
        </div>
        
        <div style="text-align: right">
            <input type="submit" value="Add New User" class="btn btn-success"/>
        </div>
        
        <?php echo $this->Form->end(); ?>
    </div>
</div>