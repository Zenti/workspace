<div class="layer clearfix">

    <label class="left" for="datepicker">

        <div class="size full">
            <div class="headline">
                Geburtstag
            </div>
            <div class="input text datepicker">
                <i onclick="document.getElementById( 'datepicker' ).value = ''" class="fa fa-calendar"></i>
                <input id="datepicker" type="text" class="hidden c24skin" name="form_geburtstag" placeholder="Geburtstag" onfocus="this.type='date'" onblur="this.type='text'"/>
            </div>
        </div>

    </label>

    <div class="right">
        <?php include( 'forms/helptip.php' ) ?>
    </div>

</div>