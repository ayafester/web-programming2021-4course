<html xmlns="//www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
  <title>{$title}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <h1 class="display-4 text-center mt-5 mb-5">Данные</h1>
  <div class="container">
    <table class="table table-bordered">
      <tr>
    	 <th>Имя</th>
    	 <th>Фамилия</th>
    	 <th>Возраст</th>
    	 <th></th>
    	 <th></th>
     </tr>
       {foreach key=cid item=con from=$result}
        <tr>
         <td>{$con.name}</td>
         <td>{$con.surname}</td>
         <td>{$con.age}</td>
         {foreachelse}
           Ничего не найдено
         </tr>
      {/foreach}
    </table>
  </div>
  <p class='display-4 text-center mt-5 mb-5'><a href="?add=new">Обновить</a></p>
</body>
</html>
