<?php

// XML Example
print("<h3>XML Example</h3>");

$doc = new DOMDocument();
$doc->load("http://api.curthitch.biz/AJAX_CURT.aspx?action=GetYear&mount=Rear%20Mount&dataType=XML");

$years = $doc->getElementsByTagName("VehicleYear");
foreach($years as $year){
    print($year->nodeValue."<br />");
}

// JSON Example
print("<br /><br /><h3>JSON Example</h3>");

$yearsJSON = file_get_contents("http://api.curthitch.biz/AJAX_CURT.aspx?action=GetYear&mount=Rear%20Mount&dataType=JSON");
$yearsJSON_array = json_decode($yearsJSON);
foreach($yearsJSON_array as $jsonYear){
    print($jsonYear."<br />");
}

?>