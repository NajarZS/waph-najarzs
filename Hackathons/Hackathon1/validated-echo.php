<?php
if (isset($_REQUEST['data']) && $_REQUEST['data'] !== null && trim($_REQUEST['data']) !== '') {
    echo htmlentities($_REQUEST['data']);
} else {
    echo "Input cannot be empty, null, or undefined";
}
?>
