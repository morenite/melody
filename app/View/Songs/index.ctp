<div class="row">
    <div class="col-md-12 songs">
        
        <div class="row">
            <div class="col-md-4 song">
                <h1>Sepasang Mata Bola</h1>
                <p class="no-margin no-padding">Composed by <strong>[composer name]</strong></p>
                <p>Arranged by <strong>[arranger name]</strong></p>
            </div>
            
            <div class="col-md-4 song">
                <h1>Melati di Tapal Batas Bekasi</h1>
                <p class="no-margin no-padding">Composed by <strong>[composer name]</strong></p>
                <p>Arranged by <strong>[arranger name]</strong></p>
            </div>
            
            <div class="col-md-4 song">
                <h1>Gugur Bunga</h1>
                <p class="no-margin no-padding">Composed by <strong>[composer name]</strong></p>
                <p>Arranged by <strong>[arranger name]</strong></p>
            </div>
        </div>
        
        <table>
            <thead>
                <th>Title</th>
                <th>Composer</th>
                <th>Arranger</th>
                <th><em>Actions</em></th>
            </thead>
            <tbody>
                <?php foreach ($songs as $song): ?>
                <tr>
                    <td><?php echo $song['Song']['title'] ?></td>
                    <td><?php echo $song['Song']['composer'] ?></td>
                    <td><?php echo $song['Song']['arranger'] ?></td>
                    <td>
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </td>	
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

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