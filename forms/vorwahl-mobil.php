<div class="layer clearfix">

    <div class="left clearfix">
        <label for="form_vorwahl" class="size sz40">
            <div class="headline">
                Vorwahl
            </div>
            <div class="input dropdown">
                <i class="fa fa-caret-down"></i>
                <select id="form_vorwahl" class="hidden" name="form_vorwahl">
                    <option value="">Bitte wählen...</option>
                    <option value="1">0151</option>
                    <option value="19">01511</option>
                    <option value="21">01512</option>
                    <option value="22">01514</option>
                    <option value="23">01515</option>
                    <option value="2">0152</option>
                    <option value="20">01520</option>
                    <option value="24">01522</option>
                    <option value="25">01525</option>
                    <option value="3">0155</option>
                    <option value="4">0157</option>
                    <option value="26">01570</option>
                    <option value="27">01575</option>
                    <option value="28">01577</option>
                    <option value="29">01578</option>
                    <option value="5">0159</option>
                    <option value="6">0160</option>
                    <option value="7">0162</option>
                    <option value="8">0163</option>
                    <option value="30">0164</option>
                    <option value="31">0167</option>
                    <option value="32">01672</option>
                    <option value="33">0168</option>
                    <option value="34">0169</option>
                    <option value="9">0170</option>
                    <option value="10">0171</option>
                    <option value="11">0172</option>
                    <option value="12">0173</option>
                    <option value="13">0174</option>
                    <option value="14">0175</option>
                    <option value="15">0176</option>
                    <option value="16">0177</option>
                    <option value="17">0178</option>
                    <option value="18">0179</option>
                </select>
            </div>
        </label>
        <label for="form_mobil" class="size sz60">
            <div class="headline">
                Mobilfunknummer
            </div>
            <div class="input text cleanUp">
                <i class="fa fa-undo"></i>
                <input id="form_mobil" type="tel" class="hidden" name="form_mobil" placeholder="Mobilfunknummer"/>
            </div>
        </label>
    </div>

    <div class="right">
        <?php include( 'forms/helptip.php' ) ?>
    </div>

</div>