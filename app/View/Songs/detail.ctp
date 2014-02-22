<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Song Detail</h1>
        </div>
        
        <?php /* ?>
        <pre>
            <?php print_r($song);?>
        </pre>
        <?php */ ?>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h1 class="song-title"><?php echo $song['Song']['title'] ?></h1>
        <h2 class="no-margin no-padding"><?php echo $song['Song']['subtitle'] ?></h2>
        
        <p>&nbsp;</p>
        
        <div class="row">
            <div class="col-md-6">
                <h4 class="song-detail-header">Category</h4>
                <p class="no-margin no-padding"><a href="#"><?php echo $song['SongCategory']['name'] ?></a></p>
                <p class="no-margin no-padding">&nbsp;</p>
                
                <h4 class="song-detail-header">Key Signature</h4>
                <?php foreach ($song['keys'] as $key): ?>
                <?php echo $this->Html->image('key_signatures/' . $key['KeySignature']['id_key_signature'] . '.png', array(
                    'style' => 'width: 80px;', 'class' => 'img-thumbnail'
                )); ?>
                <?php endforeach; ?>
                
                <p class="no-margin no-padding">&nbsp;</p>
                <h4 class="song-detail-header">Tempo</h4>
                <p class="no-margin no-padding"><?php echo $song['Song']['tempo'] ?></p>
                
                <p class="no-margin no-padding">&nbsp;</p>
                <h4 class="song-detail-header">Composer</h4>
                <p class="no-margin no-padding"><?php echo $song['Song']['composer'] ?></p>

                <p class="no-margin no-padding">&nbsp;</p>
                <h4 class="song-detail-header">Arranger</h4>
                <p class="no-margin no-padding"><?php echo $song['Song']['arranger'] ?></p>
                
                <p class="no-margin no-padding">&nbsp;</p>
                <h4 class="song-detail-header">Description</h4>
                <p class="no-margin no-padding"><?php echo $song['Song']['description'] ?></p>
            </div>
            <div class="col-md-6">
                <h4 class="song-detail-header"><span class="glyphicon glyphicon-link"></span> Musical Sheet</h4>
                
                <div class="file-item">
                    <div style="float: left;">
                        <p style="font-size: 50px; margin-right: 10px;"><span class="glyphicon glyphicon-file"></span></p>
                    </div>
                    <p class="no-margin no-padding"><strong><a href="#"><span class="glyphicon glyphicon-save"></span> A Sheet File (PDF)</a></strong></p>
                    <p class="no-margin no-padding">A sheet file information (voice type and/or musical accompaniment)</p>
                </div>
                
                <div class="file-item">
                    <div style="float: left;">
                        <p style="font-size: 50px; margin-right: 10px;"><span class="glyphicon glyphicon-file"></span></p>
                    </div>
                    <p class="no-margin no-padding"><strong><a href="#"><span class="glyphicon glyphicon-save"></span> A Sheet File (PDF)</a></strong></p>
                    <p class="no-margin no-padding">A sheet file information (voice type and/or musical accompaniment)</p>
                </div>
                
                <p>&nbsp;</p>
                
                <h4 class="song-detail-header"><span class="glyphicon glyphicon-headphones"></span> Midi</h4>
                
                <div class="file-item">
                    <div style="float: left;">
                        <p style="font-size: 50px; margin-right: 10px;"><span class="glyphicon glyphicon-volume-up"></span></p>
                    </div>
                    <p class="no-margin no-padding"><strong><a href="#"><span class="glyphicon glyphicon-save"></span> A Midi File (MP3)</a></strong></p>
                    <p class="no-margin no-padding">A midi file information (voice type and/or musical accompaniment)</p>
                </div>
                
                <div class="file-item">
                    <div style="float: left;">
                        <p style="font-size: 50px; margin-right: 10px;"><span class="glyphicon glyphicon-volume-up"></span></p>
                    </div>
                    <p class="no-margin no-padding"><strong><a href="#"><span class="glyphicon glyphicon-save"></span> A Midi File (MP3)</a></strong></p>
                    <p class="no-margin no-padding">A midi file information (voice type and/or musical accompaniment)</p>
                </div>
                
                <div class="file-item">
                    <div style="float: left;">
                        <p style="font-size: 50px; margin-right: 10px;"><span class="glyphicon glyphicon-volume-up"></span></p>
                    </div>
                    <p class="no-margin no-padding"><strong><a href="#"><span class="glyphicon glyphicon-save"></span> A Midi File (MP3)</a></strong></p>
                    <p class="no-margin no-padding">A midi file information (voice type and/or musical accompaniment)</p>
                </div>
                
                <div class="file-item">
                    <div style="float: left;">
                        <p style="font-size: 50px; margin-right: 10px;"><span class="glyphicon glyphicon-volume-up"></span></p>
                    </div>
                    <p class="no-margin no-padding"><strong><a href="#"><span class="glyphicon glyphicon-save"></span> A Midi File (MP3)</a></strong></p>
                    <p class="no-margin no-padding">A midi file information (voice type and/or musical accompaniment)</p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <h4 class="song-detail-header"><span class="glyphicon glyphicon-film"></span> Video</h4>
        <?php foreach ($song['Video'] as $video): ?>
        <iframe style="width: 100%" height="350" src="<?php echo $video['url'] ?>" frameborder="0" allowfullscreen></iframe>
        <?php endforeach ?>
    </div>
</div>