<div class="row" >
    <div class="col-md-4">
        <?php
    echo $this->Form->create("Event");
    echo $this->Form->input("name", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    echo $this->Form->input("event_type_id", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    echo $this->Form->input("date", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    
    echo $this->Form->input("start_time", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    echo $this->Form->input("end_time", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    echo $this->Form->input("location", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    echo $this->Form->input("organizer", array(
        "div" => array (
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    
    
    echo $this->Form->end("add");
    
?>
        
    </div>
    <div class="col-md-8">
        
        
    </div>
</div>