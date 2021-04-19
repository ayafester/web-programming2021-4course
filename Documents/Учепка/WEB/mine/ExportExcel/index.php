<meta charset="UTF-8"></meta>

<meta
  http-equiv="X-UA-Compatible"
  content="IE=edge">
</meta>

<meta
  name="viewport"
  content="width=device-width, initial-scale=1.0">
</meta>

<script src="js/jquery-3.5.1.min.js"></script>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<link
  href="bootstrap/css/bootstrap.min.css"
  rel="stylesheet">
</link>

<title>ExportExcel</title>

<div class="container mt-5">
  <h1 class="display-4 text-center mt-5 mb-5">Данные</h1>

  <div class="row">
    <div class="col-sm-12">
      <table
        id="db_table"
        class="table table-bordered table-hover pl-2 pr-2 text-center">
      </table>
    </div>
  </div>

  <p class="display-4 text-center mt-5 mb-5">Добавить новую запись</p>

  <div class="row mb-5">
    <div class="col-6">
      <form id="add_form">
        <label>Имя</label>
        <input
          id="nameField"
          class="form-control mb-2"
          type="text"
          placeholder="Имя"
          required/>
        <label>Описание</label>
        <input
          id="descriptionField"
          class="form-control mb-2"
          type="text"
          placeholder="Описание"
          required/>
        <button
          id="submitButton"
          class="btn btn-dark"
          type="submit">
          Добавить
        </button>
      </form>
    </div>
  </div>

  <div class="row mb-5">
    <div class="row mb-5"><div class="col"><div id="edit_form"></div></div></div>

    <div class="col-sm-12">
      <div class="row mb-2">
        <div class="col-sm-5">
          <button
            id="export-button"
            class="btn btn-info">
            Сохранить как Excel файл
          </button>
        </div>
      </div>
    </div>
  </div>

  <script
    src="./node_modules/file-saver/dist/FileSaver.min.js"
    type="text/javascript">
  </script>

  <script
    src="./node_modules/xlsx/xlsx.mini.js"
    type="text/javascript">
  </script>

  <script src="script.js"></script>

  <script
    src="export.js"
    type="text/javascript">
  </script>
</div>
