#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$oldtab = $tab;
	sort($tab);
	return($oldtab == $tab);
}
?>
