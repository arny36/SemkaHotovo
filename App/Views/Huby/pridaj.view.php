<div class="container">

<form method="post">


    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Názov huby</label>
        <div class="col-sm-10">
            <input type="text" name="nazov" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jedlost" id="inlineRadio1" value=1>
        <label class="form-check-label" for="inlineRadio1">Jedlá</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jedlost" id="inlineRadio2" value=0>
        <label class="form-check-label" for="inlineRadio2">Nejedlá</label>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Popis</label>
        <div class="col-sm-10">
            <textarea type="text" name="popis" class="form-control" id="inputPassword"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Obrázok</label>
        <div class="col-sm-10">
            <input type="text" name="obrazok" class="form-control" id="inputPassword">
        </div>
    </div>



    <button type="submit" class="btn btn-outline-success">Submit</button>
</form>
</div>

