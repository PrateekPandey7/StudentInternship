function readURL(input) 
{
    if (input.files && input.files[0]) 
    {
        var reader = new FileReader();

        reader.onload = function (e) 
        {
            $('#PhotoToUpload')
            .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

var limit = 4;
$(document).ready(function () {
    $("input[name='check_list1[]']").change(function () {
        var maxAllowed = 3;
        var cnt = $("input[name='check_list1[]']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('You can select maximum ' + maxAllowed + ' Locations');
        }
    });
});


$(document).ready(function () {
    $("input[name='check_list[]']").change(function () {
        var maxAllowed = 3;
        var cnt = $("input[name='check_list[]']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('You can select maximum ' + maxAllowed + ' Divisions');
        }
    });
});
