<section class="content">

    <div class="headline">
        Anschrift
    </div>

    <?php
    ////////////////////////////////////////////////////////
    // [i] Strasse & Hausnummer:
    include( 'forms/strasse-nr.php' );
    ////////////////////////////////////////////////////////
    // [i] Geburtsort:
    include( 'forms/plz.php' );
    ////////////////////////////////////////////////////////
    ?>

</section>

<section class="content">

    <div class="headline">
        Kontaktdaten
    </div>

    <?php
    ////////////////////////////////////////////////////////
    // [i] Vorwahl & Mobilfunknummer:
    include( 'forms/vorwahl-mobil.php' );
    ////////////////////////////////////////////////////////
    // [i] E-Mail:
    include( 'forms/email.php' );
    ////////////////////////////////////////////////////////
    ?>

</section>

<section class="content">

    <div class="headline">
        Berufsdaten
    </div>

    <?php
    ////////////////////////////////////////////////////////
    // [i] Tätigkeit:
    include( 'forms/taetigkeit.php' );
    ////////////////////////////////////////////////////////
    // [i] Branche:
    include( 'forms/branche.php' );
    ////////////////////////////////////////////////////////
    ?>

</section>

<section class="content">

    <button class="default mb10 alertTest">
        weiter
    </button>

</section>