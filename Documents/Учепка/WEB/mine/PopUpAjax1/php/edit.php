<?

    header("Content-Type: text/html; charset=utf8");
    include "connect.php";

    if(isset($_POST['edit_id']))
    {
        $query = mysql_query("SELECT id, name, description  FROM new WHERE id='{$_POST['edit_id']}'", $link);
        $data = mysql_fetch_array($query);
        $htmlForm = "
        <form>
            <p>
                <label>Имя</label>
                <input type='text' id='edit_nameField' value='{$data['name']}' required>
            </p>
            <p>
                <label>Описание</label>
                <input type='text' id='edit_descriptionField' value='{$data['description']}' required>
                <input type='text' id='input_with_id' name='id' value='{$data['id']}' hidden required>
            </p>
            <button class='btn btn-dark' id='edit_button' >Изменить</button>
            <button class='btn btn-dark' id='edit_cancel' >Отменить</button>
        </form>
        ";
        mysql_free_result($query);
        echo $htmlForm;
    }
?>
