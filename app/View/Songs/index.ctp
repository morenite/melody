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
