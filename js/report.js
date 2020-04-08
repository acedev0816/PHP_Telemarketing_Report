$(document).ready(function() {
    var date = new Date();
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    document.getElementById('yearCaption').innerHTML = date.getFullYear();
    document.getElementById('monthCaption').innerHTML = month[date.getMonth()];
    document.getElementById('dayCaption').innerHTML = date.getDate();

    $("#submit").click(function() {


        $.post("api/report_action.php", $("#report_form").serialize(), function(data) {

            var ret = JSON.parse(data);
            if (ret.success == 'yes')
                $("#report_msg").text('Your report submitted successfully!');
            else
                $("#report_msg").text('Sorry but your report was not submitted. Please try again.');
            $("#msgbox").modal('show');
        });
    });


});