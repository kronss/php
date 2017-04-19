#!/usr/bin/php
<?php

	if ($argc != 2)
		exit ;

	$html = file_get_contents($argv[1]);
	$dom = new DOMDocument();
	$dom->loadHTML($html, LIBXML_HTML_NODEFDTD);
	$elements = $dom->getElementsByTagName('*');
	
	foreach($elements as $node)
	{
		if ($node->hasAttribute('title'))
		{
			$atr = $node->getAttribute('title');
			$atr = strtoupper($atr);
			$node->setAttribute('title', $atr);
		}
		if ($node->nodeName == 'a')
		{
			$node->firstChild->nodeValue = strtoupper($node->firstChild->nodeValue);
		}
	}
	echo $dom->saveHTML();
?>
