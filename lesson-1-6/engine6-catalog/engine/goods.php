<?php
function getGoods() {
return getAssocResult("SELECT * FROM goods");
}

function getOneGoods($id) {
return getOneResult("SELECT * FROM goods WHERE id = {$id}");
}
