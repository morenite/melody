<div class="row">
    <div class="col-md-12">
        <table class="table">
           <thead>
            <th>
                
            </th>
            </thead>
            <tbody>
                <?php foreach ($announcements as $announcement): ?>
                <tr>
                    <td><?php echo $announcement['Announcement']['id_announcement'] ?></td>
                    <td><?php echo $announcement['Announcement']['subject'] ?></td>
                    <td><?php echo $announcement['Announcement']['body'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>