<?php
$name = $_POST['name'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];
$myname = $_POST['myname'];
$nickname = $_POST['nickname'];
$age = $_POST['age'];
$favcolor = $_POST['favcolor'];
$movie = $_POST['movie'];
$mybday = $_POST['mybday'];
$annoy = $_POST['annoy'];
$best_thing = $_POST['best'];
$describe = $_POST['describeme'];
$rate = $_POST['rate'];

mail("desh22.harshu@gmail.com", "frndship form", $best_thing, "From: $name <$bdate>");
window.history.log(-1);


?>