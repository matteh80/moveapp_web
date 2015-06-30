/**
 * Created by mathiashedstrom on 15-06-25.
 */

var editing = false;
var oldText = "";
var changed = false;
var defaultDate;

var LiveEdit = {
    init: function() {
        $('.editable input').each(function(index){
            $(this).attr('size', $(this).val().length);
            $(this).on("focusin keyup change", function() {
                if(editing == false) {
                    oldText = $(this).val().replace(/"/g, "\"");
                    editing = true;
                }
                LiveEdit.resizeInput($(this));
            });
            $(this).focusout(function() {
                if($(this).val().length > 0) {
                    LiveEdit.edit($(this));
                }else{
                    $(this).val(oldText);
                    editing = false;
                }
                LiveEdit.resizeInput($(this));
            })
        });
        $('.editable .gender-icon').click(function() {
            if($(this).siblings('input').val() == "F") {
                $(this).siblings('input').val("M");
                $(this).removeClass("fa-female").addClass("fa-male");
            }else{
                $(this).siblings('input').val("F")
                $(this).removeClass("fa-male").addClass("fa-female");
            }
            LiveEdit.showSave();
        });
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "d M yy",
            onSelect: function() {
                LiveEdit.resizeInput($(this));
                LiveEdit.edit($(this));
            }
        });
        $( "#datepicker" ).datepicker("setDate", new Date($('.birth input').attr("data-birth")));
        LiveEdit.resizeInput($('.birth input'));
        $('.save-changes').click(function() {
            LiveEdit.save();
        })
    },
    edit: function($e) {
        console.log($e.val()+" value")
        console.log(oldText+ "old")
        if($e.val() != oldText) {
            LiveEdit.showSave();
        }
        oldText = "";
        editing = false;
    },
    showSave: function() {
        $('.save-changes').show("slow");
    },
    resizeInput: function($e) {
        if($e.val().length > 0) {
            $e.attr('size', $e.val().length);
        }else{
            $e.attr('size', 1);
        }
        if($e.prop("type") == "number") {
            $e.css("width", (($e.attr('size')*15)+25)+"px");
        }
    },
    save: function() {
        $('.save-changes').addClass('thinking btn-primary').removeClass('btn-default').attr("disabled", "disabled");
        data = {
            "first_name": $('#first_name input').val(),
            "last_name": $('#last_name input').val(),
            "location": $('.loc input').val(),
            "weight": $('.weight input').val(),
            "height": $('.height input').val(),
            "gender": $('.gender input').val(),
            "birth": $('.birth input').val()
        };
        update_user(user.user_id, data);
    }
};

$.datepicker.regional['sv'] = {
    closeText: 'Stäng',
    prevText: '< Föregående',
    nextText: 'Nästa >',
    currentText: 'Nu',
    monthNames: ['Januari','Februari','Mars','April','Maj','Juni','Juli','Augusti','September','Oktober','November','December'],
    monthNamesShort: ['Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec'],
    dayNamesShort: ['Sön','Mån','Tis','Ons','Tor','Fre','Lör'],
    dayNames: ['Söndag','Måndag','Tisdag','Onsdag','Torsdag','Fredag','Lördag'],
    dayNamesMin: ['Sö','Må','Ti','On','To','Fr','Lö'],
    weekHeader: 'Не',
    dateFormat: 'yy-mm-dd',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['sv']);
