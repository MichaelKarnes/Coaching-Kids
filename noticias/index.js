$(document).ready(function () {
    $("#title-btns").submit(function (event) {
        $("#title-text").val($(".nicEdit-main").html());
    });
    $("#body-btns").submit(function (event) {
        $("#body-text").val($(".nicEdit-main").html());
    });
});

var area1, area1init, area2, area2init;

function editTitle() {
    if (!area1) {
        area1init = $("#nicEditTitle").html();
        area1 = new nicEditor({ fullPanel: true }).panelInstance('nicEditTitle', { hasPanel: true });
        $("#titlebox span").hide();
        $("#title-btns .nicEdit-editbtn").hide();
        $("#title-btns .nicEdit-cancelbtn").show();
        $("#title-btns .nicEdit-savebtn").show();
    }
}

function cancelTitle() {
    area1.removeInstance('nicEditTitle');
    area1 = null;
    $("#titlebox span").show();
    $("#title-btns .nicEdit-editbtn").show();
    $("#title-btns .nicEdit-cancelbtn").hide();
    $("#title-btns .nicEdit-savebtn").hide();
    $("#nicEditTitle").html(area1init);
}

function editBody() {
    if (!area2) {
        area2init = $("#nicEditBody").html();
        area2 = new nicEditor({ fullPanel: true }).panelInstance('nicEditBody', { hasPanel: true });
        $("#body-btns .nicEdit-editbtn").hide();
        $("#body-btns .nicEdit-cancelbtn").show();
        $("#body-btns .nicEdit-savebtn").show();
    }
}

function cancelBody() {
    area2.removeInstance('nicEditBody');
    area2 = null;
    $("#body-btns .nicEdit-editbtn").show();
    $("#body-btns .nicEdit-cancelbtn").hide();
    $("#body-btns .nicEdit-savebtn").hide();
    $("#nicEditBody").html(area2init);
}