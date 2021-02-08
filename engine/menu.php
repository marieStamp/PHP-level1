<?php
//include ENGINE_DIR . "filesystem.php";
 include ENGINE_DIR . "db.php";

function getMenu(): array
{
   /* $menu = [];
    $data = readCsv(DB_DIR . 'menu.csv');
    foreach ($data as $row) {
        $menu[] = [
            'title' => $row[0],
            'link' => $row[1]
        ];
    }
    return $menu; */

    return query( "SELECT * FROM menu WHERE access = 1");
}
?>