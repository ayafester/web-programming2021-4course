<?
header('Content-Type: application/json; charset=utf-8');
include "./connect.php";
if(isset($_POST['item_id']))
{
    $sql = mysql_query("SELECT * FROM new WHERE id = '{$_POST['item_id']}'", $link);
}

$item_html_data = "";
$item_id = null;

while($result = mysql_fetch_array($sql))#функция вывода таблицы
{   $item_id = $result['id'];
    $item_html_data = $item_html_data."<p>
     id = {$result['id']}</p>
     <p>name = {$result['name']}</p>
     <p>description = {$result['description']}</p>
    ";
}

mysql_free_result($sql);
// echo $item_data
$item_json_data = [
    "id" => $item_id,
    "html" => $item_html_data
];

echo json_encode($item_json_data);
?>
