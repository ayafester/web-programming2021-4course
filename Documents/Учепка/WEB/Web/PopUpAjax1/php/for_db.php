<?
    header("Content-Type: text/html; charset=utf8");
    include "./connect.php";

    if(isset($_POST))
    {
        if( isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description']) && $_POST['type'] == "edit" )
        {
            mysql_query("UPDATE new SET name = '{$_POST['name']}', description = '{$_POST['description']}' WHERE id='{$_POST['id']}'", $link);
        }

        if( (isset($_POST['name'])) && (isset($_POST['description']))  && $_POST['type'] == "add" )
        {
            mysql_query("INSERT INTO `new` (`name`, `description`) VALUES ('{$_POST['name']}', '{$_POST['description']}')", $link);
        }

        if(isset($_POST['del_id']))
        {
            mysql_query("DELETE FROM new WHERE id = '{$_POST['del_id']}'", $link);
        }


    }


#Вывод таблицы из БД
    $sql = mysql_query("SELECT * FROM new", $link);

    $table_data = "
    <thead>
        <tr>
        <th scope=\"col\">Номер</th>
        <th scope=\"col\">Имя</th>
        <th scope=\"col\">Описание</th>
        <th scope=\"col\">Удалить</th>
        <th scope=\"col\">Изменить</th>
        <th scope=\"col\">Подробнее</th>
        </tr>
    </thead>
    <tbody id='db_table'>";

    while($result = mysql_fetch_array($sql)) #функция вывода таблицы
    {
        $table_data = $table_data."<tr>
        <td> {$result['id']} </td>
        <td> {$result['name']} </td>
        <td> {$result['description']}</td>
        <td> <button class='delItem btn btn-dark' id='{$result['id']}'> Удалить</button></td>
        <td><button class='editItem btn btn-dark' id='{$result['id']}'> Редактировать</button></td>
        <td><button type='button' class='moreButton btn btn-dark' id='{$result['id']}' data-bs-toggle='modal' data-bs-target='#exampleModal'>Подробнее</button></td>
        </tr>";
    }

    $table_data = $table_data."</tbody>";
    mysql_free_result($sql);
    echo $table_data

?>
