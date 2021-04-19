<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>PopUpAjax</title>

</head>
<body>

    <div class="container mt-5">
      <h1 class="display-4 text-center mt-5 mb-5">Данные</h1>
      <div class="row">
				<div class="col-sm-12">
					<table class="table table-bordered table-hover pl-2 pr-2 text-center" id="db_table"></table>
				</div>
			</div>
      <p class='display-4 text-center mt-5 mb-5'>Добавить новую запись</p>
        <div class="row mb-5">
            <div class="col-6">
                <form id="add_form">
                    <input type="text" class="form-control mb-2" id="nameField" placeholder="Имя" required>
                    <input type="text" class="form-control mb-2" id="descriptionField" placeholder="Описание" required>
                    <button type="submit" class="btn btn-dark" id="submitButton">Добавить</button>
                </form>
            </div>
        </div>

        <div class="row mb-5">
		
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Модальное окно</h5>
                    <button type="button" class="btn-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <div class="row mb-5">
            <div class="col">
                <div id="edit_form"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./node_modules/file-saver/dist/FileSaver.min.js"></script>
    <script type="text/javascript" src="./node_modules/xlsx/xlsx.mini.js" ></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="export.js"></script>

</body>
</html>
