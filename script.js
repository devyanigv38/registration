$(document).ready(function () {

    $("#regForm").submit(function () {

        let phone = $("input[name='phone']").val();

        if (phone.length !== 10) {
            alert("Phone number must be 10 digits!");
            return false;
        }

        alert("Form Submitted Successfully!");
        return true;
    });

});