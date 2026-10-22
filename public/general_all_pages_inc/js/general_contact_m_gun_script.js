// SCRIPT FOR MARKETING PAGES

$("#contactFormMarketing").submit(function (e) {
    var url = "https://emiratesgraphic.com/general_all_pages_inc/marketing_inner_and_main.php"; // the script where you handle the form input

    $.ajax({
        type: "POST",
        url: url,
        data: $("#contactFormMarketing").serialize(), // serializes the form's elements.
        success: function (data) {
            $.notify(data, "success");
            document.getElementById("contactFormMarketing").reset();
            location.href = "http://emiratesgraphic.com/thankyou"
        }
    });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});