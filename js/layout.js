////////////////////////
// [i] Variables

// [c] Main Div
var c24Div = $( '#c24' );

// [c] Form Layers
var layer_single_text = $( '.input.text' );
var layer_text = $( 'section .layer .input.text' );
var layer_input = $( 'section .layer .input' );

// [c] Form Fields
var form_radio_ele = $( '.radio .ele' );
var form_text_cleanUp = $( '.input.text.cleanUp input' );
var form_text = $( ".input.text input" );
var form_inputAll = $( ".input input, .input select" );

// [c] Icon
var icon = $( 'i.fa' );
// [c] Icon Clear Text
var icon_cleanUp = $( 'i.fa.fa-undo' );
var icon_single_cleanUp = 'fa-undo';
var icon_src_cleanUp = $( '.input.text.cleanUp i.fa.fa-undo' );

// [c] Other
var hl = '.headline';
var hidden = 'hidden';
var active = 'active';
var cleanUp = 'cleanUp';

////////////////////////
// [i] Layout Config

$( document ).ready(function() {

    c24Div.find( layer_text ).parent()
        .find( hl )
        .addClass( hidden );

    c24Div.find( form_text_cleanUp ).parent()
        .find( icon_cleanUp )
        .addClass( hidden );
});

// [nF] Test Alert

$( '.alertTest' ).click(function() {
    alert( '☹ Diese Funktion wurde in diese Testumgebung nicht eingebaut..' );
});

// [nF] Radio (2|Boxes)

form_radio_ele.click(function() {
    $this = $( this );
    if(!$this.hasClass( active )) {
        $this.parent().parent().find( form_radio_ele ).removeClass( active );
        $this.addClass( active );
    }
});

// [nF] Text Form (Headline & switch Icon)

form_text.focus(function() {
    $this = $( this );
    $this.parent().parent().find( hl ).removeClass( hidden );
    $this.parent().find( icon ).addClass( icon_single_cleanUp );
    $this.parent().parent().find( layer_single_text ).addClass( cleanUp );
    $this.change(function() {
        $this.parent().parent().find( hl ).removeClass( hidden );
        $this.parent().find( icon ).addClass( icon_single_cleanUp );
        $this.parent().parent().find( layer_single_text ).addClass( cleanUp );
        if(!$this.val()) {
            $this.parent().find( icon ).removeClass( icon_single_cleanUp );
            $this.parent().parent().find( layer_single_text ).removeClass( cleanUp );
        }
    });
});

form_text.focusout(function() {
    $this = $( this );
    if(!$this.val()) {
        $this.parent().parent().find( hl ).addClass( hidden );
        $this.parent().find( icon ).removeClass( icon_single_cleanUp );
        $this.parent().parent().find( layer_single_text ).removeClass( cleanUp );
    }
});

// [nF] Text Form (cleanUp)

form_text_cleanUp.focus(function() {
    $this = $( this );
    $this.parent().find( icon_cleanUp ).removeClass( hidden );
});

form_text_cleanUp.focusout(function() {
    $this = $( this );
    if(!$this.val()) {
        $this.parent().find( icon_cleanUp ).addClass( hidden );
    }
});

icon_src_cleanUp.click(function() {
    $( this ).parent().find( 'input' ).val( '' );
});

// [nF] Input &  Select -> Hover/Focus

form_inputAll.focus(function() {
    $this = $( this );
    if(!$this.hasClass( 'focus' )) {
        form_inputAll.parent().parent().find( layer_input ).removeClass( 'focus' );
        $this.parent().parent().find( layer_input ).addClass( 'focus' );
    }
});

form_inputAll.focusout(function() {
    $this = $( this );
    $this.parent().parent().find( layer_input ).removeClass( 'focus' );
});

// [nF] jQuery UI - Datepicker

jQuery(function( $ ) {
    $.datepicker.regional[ 'de' ] = {
        closeText: 'schließen',
        prevText: '&#x3c;zurück',
        nextText: 'Vor&#x3e;',
        currentText: 'heute',
        monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
        monthNamesShort: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
        //monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
        dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
        dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
        dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
        dateFormat: 'dd.mm.yy',
        firstDay: 1,
        isRTL: false
    };
    $.datepicker.setDefaults($.datepicker.regional[ 'de' ])
});

$(function() {
    $( '#datepicker' ).datepicker({
        changeMonth: true,
        changeYear: true
    });
    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $( '#ui-datepicker-div' ).remove();
    }
});