
<?php
$xmldata = simplexml_load_file("author.xml") or die("Failed to load");
/*echo $xmldata->employee[0]->firstname . "<\n>";
echo $xmldata->employee[1]->firstname; */
foreach($xmldata->AUTHOR as $author){
	echo 'Hallo:' . $author->NAME;
}
?>