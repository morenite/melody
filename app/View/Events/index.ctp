<div class="row">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-8">
        <?php foreach ($events as $event): ?>
        
        <div>
            <span><?php echo $event["EventType"]["name"] ?></span>
            <h1><?php echo $event["Event"]["name"] ?></h1>
            <p><?php echo $event["Event"]["date"] ?></p>
            <p><?php echo $event["Event"]["start_time"] ?></p>
            <p><?php echo $event["Event"]["end_time"] ?></p>
            <p><?php echo $event["Event"]["location"] ?></p>
            <p><?php echo $event["Event"]["organizer"] ?></p>
            <ul>
                <?php foreach ($event["EventSong"] as $song):?>
                <li>
                    <?php echo $song["Song"]["title"] ?>
                </li>
                <?php endforeach;?>
                
            </ul>
            
        </div>
        <br>
        <?php endforeach;?>        
    </div>
    
</div>
