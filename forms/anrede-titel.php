<div class="layer clearfix">

    <div class="left clearfix">

        <label for="form_anrede" class="size half">
            <div class="headline">
                Anrede
            </div>
            <div class="input dropdown">
                <i class="fa fa-caret-down"></i>
                <select id="form_anrede" class="hidden" name="anrede">
                    <option>Bitte wählen</option>
                    <option>Herr</option>
                    <option>Frau</option>
                </select>
            </div>
        </label>

        <label for="form_titel" class="size half">
            <div class="headline">
                Titel
            </div>
            <div class="input dropdown">
                <i class="fa fa-caret-down"></i>
                <select id="form_titel" class="hidden" name="titel">
                    <option>Bitte wählen</option>
                    <option>Dr.</option>
                    <option>Prof.</option>
                    <option>Prof. Dr.</option>
                </select>
            </div>
        </label>

    </div>

    <div class="right">
        <?php include( 'forms/helptip.php' ) ?>
    </div>

</div>