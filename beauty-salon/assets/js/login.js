$(document).ready(function () {
    // prevent form submit
    const form = document.querySelector("to_register");
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    });
    $(".login_here").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "php/login_success.php",
            data: {
                email: $(".login_email").val(),
                password: $(".login_password").val(),
            },
            beforeSent: function () {
                $(".login_here").html("Please wait...");
            },
            success: function (response) {
                if (response.trim() == "Login Success") {
                    window.location = "services.php";
                }
            }
        });
    });
});

const form = document.querySelector("to_register");
form.addEventListener('submit', function (e) {
    e.preventDefault();
});