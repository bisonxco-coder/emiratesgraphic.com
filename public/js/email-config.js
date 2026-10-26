// Main Contact Form Bottom of the pages + Contact Page + Program Footer

// ***************************************************************************
// ***************************************************************************

$("#form_contact_main").submit(function (e) {
    e.preventDefault(); // Parandaloni dërgimin e vërtetë të formës.
    var $form = $(this);
    if ($form.data("isSubmitted")) {
        return; // Nëse forma është duke u dërguar, mos lejo dërgimin përsëri.
    }

    var submitBtn = $form.find('[type=submit]'); // Butoni "Let's Go" (2026-10-26)

    var url = "https://emiratesgraphic.com/mail_contact.php"; // skedari ku do të trajtohet inputi i formës
    $.ajax({
        type: "POST",
        url: url,
        data: $form.serialize(), // serializimi i elementeve të formës.
        beforeSend: function () {
            $form.data("isSubmitted", true); // 2026-10-26: flag vendoset vetëm kur kërkesa niset
            submitBtn.prop("disabled", true); // Parandaloni klikimin e butonit.
        },
        success: function (data) {
            $.notify(data, "success");
            var formContactMain = document.getElementById("form_contact_main");
            if (formContactMain) {
                formContactMain.reset();
            }
            window.location.href = "/thankyou";
        },
        error: function () {
            // 2026-10-26: shfaq gabimin (p.sh. 406 nga ModSecurity, 4xx/5xx) dhe lejo provë tjetër
            $.notify("Couldn't send, please email info@emiratesgraphic.com or call +971 50 912 4567", "error");
            $form.data("isSubmitted", false);
        },
        complete: function () {
            submitBtn.prop("disabled", false);
        }
    });
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