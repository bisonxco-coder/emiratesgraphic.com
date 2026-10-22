$("#contactForms").submit(function (e) {

    var url = "https://www.rilindp.com/mailers.php"; // the script where you handle the form input

    $.ajax({
        type: "POST",
        url: url,
        data: $("#contactForms").serialize(), // serializes the form's elements.
        success: function (data) {
            $.notify(data, "success");
        }
    });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});