/**
 * Created by mathiashedstrom on 15-06-25.
 */

var editing = false;
var LiveEdit = {
    init: function() {
        $('.editable').each(function(index){
            $( this).append("<i class=\"fa fa-pencil\"></i>");
            alert('hej')
        });
        $('.editable').on('mouseover', function() {
            $ele = $(this);
            if(editing == false) {
                LiveEdit.show($ele);
            }
        });
    },
    edit: function($e) {
        var oldText = $e.html().replace(/"/g, "\"");
        var $input = "<input type=\"text\" value=\"" + oldText + "\" id=\"liveedit\" style=\"width:"+ $e.width() +"px\">";

        $e.fadeOut("fast", function() {
            editing = true;
            $e.html("").html($input).fadeIn("fast");
            //$e
        });
    },
    show: function($e) {

    }
};