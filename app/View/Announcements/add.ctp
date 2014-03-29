<div class="row" >
    <div class="col-md-4">
        <?php
    echo $this->Form->create("Announcement");
    echo $this->Form->input("subject", array(
        "div" => array(
            "class" => "form-group"
        ),
        "class" => "form-control"
    ));
    echo $this->Form->input("body", array(
        "div" => array(
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

<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>

