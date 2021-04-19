<!DOCTYPE html>
<html lang="ru">
 <head>
		<title>FileReader</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
   <div class="container">
     <?php
     header('Content-type: text/html; charset=utf-8');

     $name = $_POST['name'];
     $age = $_POST['age'];
     $jenre = $_POST['jenre'];
     $array = array($name, $age, $jenre."\r\n");
     $comma_separated = implode("::", $array);

     //file_put_contents("list.txt", $comma_separated, FILE_APPEND);
     $fd = fopen("list.txt", 'a+') or die("не удалось создать файл");
     fwrite($fd, $comma_separated);
     fclose($fd);
     ?>
     <h1 class="display-4 text-center mt-5 mb-5">Фильм добавлен в list.txt</h1>
     <p class='display-4 text-center mt-5 mb-5'><a href="index.php">Перейти к предыдущей странице</a></p>

   </div>
 </body>
</html>
