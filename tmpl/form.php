<section class="content">

    <div class="headline">
        1. Kontoinhaber
    </div>

    <?php
    ////////////////////////////////////////////////////////
    // [i] Kontoinhaber:
    include( 'forms/kontoinhaber.php' );
    ////////////////////////////////////////////////////////
    // [i] Anrede & Titel:
    include( 'forms/anrede-titel.php' );
    ////////////////////////////////////////////////////////
    // [i] Vorname:
    include( 'forms/vorname.php' );
    ////////////////////////////////////////////////////////
    // [i] Vorname:
    include( 'forms/name.php' );
    ////////////////////////////////////////////////////////
    // [i] Geburtstag:
    include( 'forms/geburtstag.php' );
    ////////////////////////////////////////////////////////
    // [i] Geburtsort:
    include( 'forms/geburtsort.php' );
    ////////////////////////////////////////////////////////
    ?>

</section>

<section class="content">

    <div class="headline">
        weitere Angaben
    </div>

    <?php
    ////////////////////////////////////////////////////////
    // [i] Familienstand:
    include( 'forms/familienstand.php' );
    ////////////////////////////////////////////////////////
    // [i] Geburtsland:
    include( 'forms/geburtsland.php' );
    ////////////////////////////////////////////////////////
    // [i] Staatsangehörigkeit:
    include( 'forms/staatsangehoerigkeit.php' );
    ////////////////////////////////////////////////////////
    // [i] US-Steuerpflicht:
    include( 'forms/ussteuerpflicht.php' );
    ////////////////////////////////////////////////////////
    ?>

</section>

<section class="content">

    <a href="/step1.php" class="default mb10">
        weiter
    </a>

</section>