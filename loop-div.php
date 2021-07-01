<?php
$subcounty_list = []; // the array to iterate over
//declare the variables
$subcounties = '';
$paybills = ''
foreach ($subcounties as $item) {
    //store the data
    $subcounty = $item['subcounty_name'];
    $paybill = $item['business_shortcode'];

    //format the data
    $subcounty_selected .= "<div class="subcounty">{$subcounty}</div>";
    $tab_content =  "<div class="item">{$paybill}</div>";

    $subcounties .= $subcounty_selected;
    $paybills .= $tab_content;
}
// display the collated data
echo '<section id="subcounties">' . $subcounties . '</section>';
echo '<section id="paybills">' . $paybills . '</section>';
