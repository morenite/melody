<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Index of Event</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-8">
        <?php foreach ($events as $event): ?>
        
        <div class="event-box">
            <div class="event">
                <div class="event-icon">
                    <p><span class="glyphicon glyphicon-calendar"></span></p>
                </div>
                <span class="label label-info"><?php echo $event["EventType"]["name"] ?></span>
                <h1 class="no-margin"><?php echo $event["Event"]["name"] ?></h1>
                <p><span class="glyphicon glyphicon-globe"></span> <strong><?php echo $event["Event"]["location"] ?></strong> by <strong><?php echo $event["Event"]["organizer"] ?></strong></p>
            </div>
            <div style="padding: 0 10px">
                <p><?php echo $event["Event"]["date"] ?></p>

                <p><?php echo $event["Event"]["start_time"] ?></p>
                <p><?php echo $event["Event"]["end_time"] ?></p>

                <p class="event-detail-header"><span class="glyphicon glyphicon-user"></span> Participants</p>
                <ul class="participants">
                    <?php $users = array(0 => 0, 1 => 1, 2 => 2); ?>
                    <?php foreach ($users as $user):?>
                    <li><a href="#" style="display: block; height: 40px; width: 40px; background-color: #ebebeb; margin: 0 3px 0 0; padding: 0;"></a></li>
                    <?php endforeach; ?>
                </ul>
                <p class="clear-fix" style="height: 15px;"></p>
                
                <p class="event-detail-header"><span class="glyphicon glyphicon-music"></span> Songs</p>
                <ul class="event-song">
                    <?php foreach ($event["EventSong"] as $song):?>
                    <li><a href="<?php echo Router::url(array('controller' => 'songs', 'action' => 'detail', $song["Song"]["id_song"])) ?>"><?php echo $song["Song"]["title"] ?></a></li>
                    <?php endforeach;?>
                </ul>
                <p class="clear-fix"></p>
                
                <a href="<?php echo Router::url(array('controller' => 'events', 'action' => 'detail', $event['Event']['id_event'])) ?>" class="btn btn-success btn-block" style="margin: 20px 0 10px 0;"><span class="glyphicon glyphicon-info-sign"></span> More Information</a>
            </div>
        </div>
        <br>
        <?php endforeach;?>        
    </div>
    
</div>
