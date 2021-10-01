$("#skillButton").ready(function () {
    let counter = 0;
    $('#skillButton').on("click", function () {
        $("#ph").append(
            "<div class=\"py-1\" id =\"bar-" + counter + "\">" +
            "<button type=\"button\" class=\"btn btn-link text-danger\" id=\"trash-" + counter + "\" " +
            "style=\"cursor: pointer\">x</button>" +
            "<div class=\"d-flex justify-content-between\">" +
            "<input type=\"text\" class=\"progress-bar-title form-control form-control-sm w-25 m-0\" " +
            "id=\"barTitle-" + counter + "\" name=\"name-" + counter +
            "\" placeholder=\"Skill Name\">" +
            "<input type=\"number\" class=\"progress-bar-number form-control form-control-sm w-25 m-0\" " +
            "id=\"barPercent-" + counter + "\" name=\"value-" + counter + "\" " +
            "placeholder=\"Skill Value\">" +
            "</div>" +
            "<div class=\"progress mt-1 mb-1\">" +
            "<div class=\"progress-bar\" id=\"progBar-" + counter + "\" role=\"progressbar\" " +
            "style=\"width: 0%;\" " + "aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=100>" +
            "</div>" +
            "</div>" +
            "</div>");
        let placeholder = counter;
        $('#trash-' + placeholder).on("click", function () {
            $("#bar-" + placeholder).remove();
        });
        $("#barPercent-" + placeholder).on("change", function () {
            let $barcentage = $("#progBar-" + placeholder);
            $barcentage.width(this.value + "%");
            $barcentage.attr("aria-valuenow", $(this).val);
            console.log($barcentage);
        });
        counter++;
    });
});

$("#img").ready(function() {
    $("#img").change(function () {
        $newurl = this.value;
        $("img").attr("src", $newurl);
    });
});