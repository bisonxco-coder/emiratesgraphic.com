// Main Contact Form Bottom of the pages + Contact Page + Program Footer

// ***************************************************************************
// ***************************************************************************

$("#form_contact_main").submit(function (e) {
    if ($(this).data("isSubmitted")) {
        e.preventDefault(); // Nëse forma është dërguar tashmë, mos lejo dërgimin përsëri.
        return;
    }

    var submitBtn = $("#submitmaincontactBtn"); // Butoni "Submit"

    var url = "https://emiratesgraphic.com/mail_contact.php"; // skedari ku do të trajtohet inputi i formës
    $.ajax({
        type: "POST",
        url: url,
        data: $(this).serialize(), // serializimi i elementeve të formës.
        beforeSend: function () {
            submitBtn.prop("disabled", true); // Parandaloni klikimin e butonit.
            submitBtn.text("Sending..."); // Ndryshoni tekstin e butonit në "Sending..."
        },
        success: function (data) {
            $.notify(data, "success");
            var formContactMain = document.getElementById("form_contact_main");
            if (formContactMain) {
                formContactMain.reset();
            }
            window.location.href = "/thankyou";
        },
        complete: function () {
            submitBtn.prop("disabled", false);
            submitBtn.text("Submit"); // Kthejeni tekstin e butonit në gjendjen normale.
        }
    });

    $(this).data("isSubmitted", true); // Vendosni variablën flag si e vërtetë pasi forma është dërguar.

    e.preventDefault(); // Parandaloni dërgimin e vërtetë të formës.
});

// ***************************************************************************
// Blog Contact Form (innerpage)
// ***************************************************************************

$("#form_blog_contact").submit(function (e) {
    if ($(this).data("isSubmitted")) {
        e.preventDefault();
        return;
    }

    var submitBtn = $("#submitBlogContactBtn");

    var url = "https://emiratesgraphic.com/mail_contact.php";
    $.ajax({
        type: "POST",
        url: url,
        data: $(this).serialize(),
        beforeSend: function () {
            submitBtn.prop("disabled", true);
            submitBtn.text("Sending...");
        },
        success: function (data) {
            $.notify(data, "success");
            var formBlogContact = document.getElementById("form_blog_contact");
            if (formBlogContact) {
                formBlogContact.reset();
            }
            submitBtn.text("Sent!");
            setTimeout(function() {
                submitBtn.prop("disabled", false);
                submitBtn.text("Call Me");
            }, 2000);
        },
        error: function() {
            $.notify("Error sending message. Please try again.", "error");
            submitBtn.prop("disabled", false);
            submitBtn.text("Call Me");
        },
        complete: function () {
            $(this).data("isSubmitted", false);
        }
    });

    $(this).data("isSubmitted", true);

    e.preventDefault();
});