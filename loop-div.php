<?php
$array = []; // the array to iterate over
//declare the variables
$languages = '';
$tools = ''
foreach ($array as $item) {
    //store the data
    $language = $item['language'];
    $tool = $item['tool'];

    //format the data
    $formatted_language .= "<div class="language">{$language}</div>";
    $formatted_content =  "<div class="item">{$tool}</div>";

    $languages .= $formatted_language;
    $tools .= $formatted_tools;
}
// display the collated data
echo '<section id="languages">' . $languages . '</section>';
echo '<section id="tools">' . $tools . '</section>';
