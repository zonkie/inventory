<table>

	<? foreach ($this->items AS $item) { ?>
		<tr><td><?=$item['name']?></td><td><?=$item['description']?></td><td><?=$item['location']?></td></tr>
	<?}?>
	
</table>