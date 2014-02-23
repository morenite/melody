<div class="row">

    <?php /* ?>
    <pre>
        <?php print_r($songs);?>
    </pre>
    <?php */?>

    <div class="col-md-12 songs">
        
        <?php foreach ($songs as $song): ?>
            <div class="col-md-4">
                <div class="song">
                    <div class="row">
                        <div class="col-md-2 no-padding" style="background-color: black; height: 85px;">
                            <p align="center" class="no-margin no-padding" style="font-size: 50px; height: 85px; line-height: 85px; color: white;"><span class="glyphicon glyphicon-music"></span></p>
                        </div>
                        <div class="col-md-10">
                            <span class="label label-success"><?php echo $song['SongCategory']['name'] ?></span>
                            <h1><?php echo $song['Song']['title'] ?></h1>
                        </div>
                    </div>

                    <p class="no-margin no-padding">Composed by <strong><?php echo $song['Song']['composer'] ?></strong></p>
                    <p>Arranged by <strong><?php echo $song['Song']['arranger'] ?></strong></p>

                    <p align="right">
                        <a hre="#" class="btn btn-info"><span class="glyphicon glyphicon-info-sign"></span> Details</a>
                    </p>
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