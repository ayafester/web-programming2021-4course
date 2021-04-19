<!DOCTYPE html>
<html lang="ru">
 <head>
		<title>FileReader</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>
	 <h1 class="display-4 text-center mt-5 mb-5">Фильмы</h1>
	 <?php
   header('Content-type: text/html; charset=utf-8');
    $file_name = "list.txt";
    $data = file( $file_name );
	 ?>
	 <div class="container">
		 <table class="table table-bordered">
       <tr>
           <th>Название</th>
           <th>Год</th>
           <th>Жанр</th>
       </tr>
	 <?php
    foreach( $data as $value ):
      $value = explode( "::", $value );
		?>
    <tr>
        <td><?=$value[0]?></td>
        <td><?=$value[1]?></td>
        <td><?=$value[2]?></td>
    </tr>
    <?php
    endforeach;
		?>
		</table>
	</div>
  <h1 class="display-4 text-center mt-5 mb-5">Добавить новый фильм в список list.txt</h1>
  <div class="container">
    <form action="action.php" method="post">
      <p>Название: <input type="text" name="name" /></p>
      <p>Год: <input type="text" name="age" /></p>
      <p>Жанр: <input type="text" name="jenre" /></p>
      <p><input type="submit" value="Добавить"/></p>
    </form>
  </div>
 </body>
</html>
