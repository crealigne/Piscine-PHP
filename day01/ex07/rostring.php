#!/usr/bin/php
<?php
function ft_split_no($s1)
{
	$tab = explode(" ", $s1);
	return($tab);
}
	$elem = trim($argv[1]);
	$tab = str_ireplace("  ", " ", $elem);
	while (strstr($tab, "  "))
	{
		$tab =str_ireplace("  ", " ", $tab);
	}
	$my_tab = explode(" ", $tab);
	$first = array_shift($my_tab);
	foreach($my_tab as $elem)
	{
		echo $elem;
		echo " ";
	}
	echo $first;
	if ($argc > 1)
		echo "\n";
?>
