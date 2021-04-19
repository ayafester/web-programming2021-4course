<?header("Content-Type: text/html; charset=utf8");?>

<div class="container mt-5">
        <div class="row mb-5">
            <div class="col">
                <form id="add_form">
                    <input type="text" class="form-control mb-2" id="nameField" placeholder="Name" required>
                    <input type="text" class="form-control mb-2" id="descriptionField" placeholder="Description" required>
                    <button type="submit" class="btn btn-dark" id="submitButton">Подтвердить</button>
                </form>
            </div>
        </div>
        <div class="row mb-5">
        <form>
            <a href="php/exportExcel.php" target="_blank" class="btn btn-primary">Скачать</a>
        </form>
        </div>
        <div class="row mb-5">
            <table class="table table-bordered table-hover text-center" id="db_table"></table>
        </div>
        <div class="row mb-5">
            <div class="col">
                <div id="edit_form"></div>
            </div>
        </div>
    </div>
