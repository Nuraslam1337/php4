<?php
function drawMenu($menu, $vertical = true)
{
	if(!$vertical)
	{$style = 'display:inline-block;';}

    foreach($menu as $item )
	{
		echo "<ul style='{$style}'>";
		echo "<li>";
		echo "<a href = '{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
		echo "</ul>";
	}
}
?>