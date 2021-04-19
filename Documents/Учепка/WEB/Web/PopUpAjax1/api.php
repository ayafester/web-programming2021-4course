<?
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');

    include "php/connect.php";
    $allUsers = mysql_query('SELECT * FROM new', $link);

    $result = [['номер', 'имя', 'описание']];

    while($row = mysql_fetch_array($allUsers)) {
        array_push($result, [$row['id'], $row['name'], $row['description']]);
    }

    mysql_free_result($allUsers);
    mysql_close($link);

    echo json_encode(array('data' => $result));
?>
