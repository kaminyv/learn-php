<?php

function getCatalog() {
    return getAssocResult("SELECT * FROM goods");
}

function getOneCatalog($id) {
    return getOneResult("SELECT * FROM goods WHERE id = {$id}");
}
