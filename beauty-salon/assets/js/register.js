$(document).ready(function () {
    $(".signin_here").click(function (e) {
        var password = $(".signin_pass").val()
        var repass = $(".signin_repass").val()
        if (password.match(repass)) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "php/signin_success.php",
                data: {
                    firstname: $(".signin_firstname").val(),
                    lastname: $(".signin_lastname").val(),
                    gender: $(".signin_gender:checked").val(),
                    birthdate: $(".signin_birthdate").val(),
                    address: $(".signin_address").val(),
                    monumber: $(".signin_mobile_no").val(),
                    email: $(".signin_email").val(),
                    password: $(".signin_pass").val()
                },
                beforeSend: function () {
                    $(".signin_here").html("Please Wait...");
                },
                success: function (response) {
                    $(".signin_here").html("Sign in");
                    $(".signin_form").trigger("reset");
                    alert(response);
                }
            });
        } else {
            alert("Please Confirm Pasword Or Recheck")
        }
    });
});

