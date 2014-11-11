<?php

ini_set("auto_detect_line_endings", true);

function jj_readcsv($filename, $header = true) {
    $handle = fopen($filename, "r");
    echo '<table class="tablesorter">';
    //display header row if true
    if ($header) {
        $csvcontents = fgetcsv($handle);
        echo '<thead><tr>';
        foreach ($csvcontents as $headercolumn) {
            echo "<th>$headercolumn</th>";
        }
        echo '</tr></thead><tbody>';
    }
    // displaying contents
    while ($csvcontents = fgetcsv($handle)) {
        echo '<tr>';
        foreach ($csvcontents as $column) {
            echo "<td>$column</td>";
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
    fclose($handle);
}

?>