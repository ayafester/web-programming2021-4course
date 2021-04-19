<?
$host = 'localhost';
$user = 'mestnikova';
$pass = 'ZnjUe6Lx';
$db_name = 'mestnikova';
$link = mysqli_connect($host, $user, $pass, $db_name);

echo "<meta charset=\"utf8\">";
header('Content-Type: text/html; charset = utf-8');
mysqli_query($link, 'SET NAMES utf8');

if (!$link) {
  echo 'Can not connect with DB. : code of mistake' . mysqli_connect_errno() . ', mistake: ' . mysqli_connect_error();
  exit;
}


if (isset($_POST["name"])) {

  if (isset($_GET['red'])) {
    $sql = mysqli_query($link, "UPDATE `Table` SET `name` = '{$_POST['name']}',`surname` = '{$_POST['surname']}',`age` = '{$_POST['age']}' WHERE `id`={$_GET['red']}");
  } else {

    $sql = mysqli_query($link, "INSERT INTO `Table` (`name`, `surname`,`age` ) VALUES ('{$_POST['name']}', '{$_POST['surname']}','{$_POST['age']}')");
  }


  if ($sql) {
    echo '<p>Успешно!</p>';
  } else {
    echo '<p> Ошибка: ' . mysqli_error($link) . '</p>';
  }
}


if (isset($_GET['del'])) {
  $sql = mysqli_query($link, "DELETE FROM `Table` WHERE `id` = {$_GET['del']}");
  if ($sql) {
    echo "<p>Не существует</p>";
  } else {
    echo '<p>Ошибка: ' . mysqli_error($link) . '</p>';
  }
}


if (isset($_GET['red'])) {
  $sql = mysqli_query($link, "SELECT `id`, `name`, `surname`, `age` FROM `Table` WHERE `id`={$_GET['red']}");
  $product = mysqli_fetch_array($sql);
}

$sql = mysqli_query($link, 'SELECT `id`, `name`, `surname`,`age` FROM `Table`');
include './template.php';
?>
