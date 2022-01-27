<?php require "view/_partials/head.view.php";?>
<div class="container">
    <div class="card">
        <div class="card-header">
            ToDo app
        </div>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="uzduoties pavadinimas" name="subject">
            </div>
            <div class="form-group">
                <select name="priority" class="form-control">
                    <option selected disabled>--Pasirinkite prioriteta--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
    <div class="form-group">
        <label class="form-control">Atlikimo data</label>
        <input type="data" class="form-control" name="dueData">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" name="save" type="submit">Saugoti</button>
    </div>
    </form>
</div>

<?php require "view/_partials/htmlEnd.php";?>