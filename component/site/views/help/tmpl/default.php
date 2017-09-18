Нужно время работы касс на следующих станциях:<br>
<strong>Курское направление:</strong><br>
<ul>
	<?php
	foreach ($this->items as $item) {
		$name = (!empty($item->popularName)) ? $item->popularName : $item->name;
		if ($item->did == '6') echo "<li>{$name}</li>";
	}?>
</ul>
<br>
<strong>Павелецкое направление:</strong><br>
<ul>
<?php
foreach ($this->items as $item) {
    $name = (!empty($item->popularName)) ? $item->popularName : $item->name;
    if ($item->did == '8') echo "<li>{$name}</li>";
}?>
</ul>