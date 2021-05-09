<?php
function getImage() {
    return array_splice(scandir('images/'),2);
}
