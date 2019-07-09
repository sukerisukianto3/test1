<?php 
$xml = '<?xml version="1.0" encoding="UTF-8" ?> 
<rss> 
    <channel> 
        <item> 
            <title><![CDATA[Tom & Jerry]]></title> 
        </item> 
    </channel> 
	    <channel> 
        <item> 
            <title><![CDATA[Tom1 & Jerry2]]></title> 
        </item> 
    </channel> 
</rss>'; 

$xml = simplexml_load_string('test.xml'); 
var_dump($xml);

// echo does the casting for you 
echo $xml->channel[1]->item->title; 

// but vardump (or print_r) not! 
//var_dump($xml->channel->item->title); 

// so cast the SimpleXML Element to 'string' solve this issue 
//var_dump((string) $xml->channel->item->title); 
?> 