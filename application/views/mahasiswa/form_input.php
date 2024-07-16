<div class="row">
    <div class="col-lg-6">
        <h1><?=$title?></h1>
        <form role="form">
            <fieldset >
                <div class="form-group">
                    <label for="disabledSelect">Disabled input</label>
                    <input class="form-control" id="disabledInput" type="text" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Disabled select menu</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Disabled Checkbox
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Disabled Button</button>
            </fieldset>
        </form>
    </div>
</div>