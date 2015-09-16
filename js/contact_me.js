$(function () {

    $("input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var radiocond = $("input#radiocond").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    nome: name,
                    telefone: phone,
                    email: email,
                    condicao: radiocond
                },
                cache: false,
                success: function () {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('#success > .alert-success')
                            .append("<strong>Enviado com sucesso! </strong>");
                    $('#success > .alert-success')
                            .append('</div>');
                    
                    window.setTimeout(6000);

                    //clear all fields
                    $('#contactForm').trigger("reset");
                    
//                    var explode = function () {
//                        alert("Dados enviados com sucesso!");
//                    };
//                    setTimeout(explode, 5000);
                    
                    $(location.reload(), setTimeout(5000) );
//                    atualizar();
//                    window.location.reload();

                },
                error: function () {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('#success > .alert-danger').append("<strong>Desculpe " + firstName + ", nosso servirdor não está funcionando no momento. Por favor, tente novamente mais tarde!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function () {
            return $(this).is(":visible");
        },
//        atualizar: function ()
//        {
//            window.location.reload();
//        },
    });

    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function () {
    $('#success').html('');
});
