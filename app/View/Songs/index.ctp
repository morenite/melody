<div class="row">

    <div class="col-md-12">
        <div class="page-header">
            <h1>Song Index</h1>
        </div>
    </div>
    
    <?php /* ?>
    <pre>
        <?php print_r($songs);?>
    </pre>
    <?php */ ?>

    <div class="col-md-12 songs">        
        <?php foreach ($songs as $song): ?>
            <div class="col-md-4">
                <div class="song-box">
                    <div class="song">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="song-icon">
                                    <p align="center" class="no-margin no-padding"><span class="glyphicon glyphicon-music"></span></p>
                                </div>
                                <span class="label label-warning"><?php echo $song['SongCategory']['name'] ?></span>
                                <h1><a href="#"><?php echo $song['Song']['title'] ?></a></h1>
                                <p class="no-margin no-padding">Acapela, SSATB</p>
                            </div>
                        </div>
                    </div>    
                    <div style="padding: 10px 10px 0 10px;">
                        <p class="song-detail-header">Key Signature</p>
                        <?php foreach ($song['keys'] as $key): ?>
                        <span class="label label-default"><?php echo $key['KeySignature']['name'] ?></span>
                        <?php endforeach; ?>
                        
                        <p class="no-margin no-padding">&nbsp;</p>
                        <p class="song-detail-header">Composer</p>
                        <p class="no-margin no-padding"><?php echo $song['Song']['composer'] ?></p>
                        
                        <p class="no-margin no-padding">&nbsp;</p>
                        <p class="song-detail-header">Arranger</p>
                        <p class="no-margin no-padding"><?php echo $song['Song']['arranger'] ?></p>
                    </div>
                </div>
            </div>
         <?php endforeach; ?>
        
        <p>
            <?php 
                echo $this->Paginator->numbers(array(
                    'first' => '|<',
                    'last' => '>|'
                )); 
            ?>
        </p>        
    </div>
</div>