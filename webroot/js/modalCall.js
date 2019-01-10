"use strict";
var IdDelete = 0;
function deleteEntre() {
    $("#delete" + IdDelete).click()
}
function deleteModal(e) {
    IdDelete = e
}