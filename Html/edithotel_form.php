<!DOCTYPE html>
<!--
Author: Code Apes.
-->
<html>
<head>
<title>Add Item</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/formStyle.css">
<script>
<!-- Space for javascript uses-->
function checkLevel(){
    if (document.getElementById("type").value == "default"){
        document.getElementById("type_error").style.display='block';
        document.getElementById("confirm").disabled = true;
    }
    else{
        document.getElementById("type_error").style.display='none';
        document.getElementById("confirm").disabled = false;
    }
}
function checkArea(){
    if (document.getElementById("area").value == "default"){
        document.getElementById("area_error").style.display='block';
        document.getElementById("confirm").disabled = true;
    }
    else{
        document.getElementById("area_error").style.display='none';
        document.getElementById("confirm").disabled = false;
    }
}
function checkroomtype(){
    if (document.getElementById("roomtype").value == "default"){
        document.getElementById("roomtype_error").style.display='block';
        document.getElementById("confirm").disabled = true;
    }
    else{
        document.getElementById("roomtype").style.display='none';
        document.getElementById("confirm").disabled = false;
    }
}

function checkPrice() {
    var n = document.getElementById("price").value;
    if (!isNaN(parseFloat(n)) && isFinite(n)) {
        document.getElementById("price_error").style.display='block';
        document.getElementById("confirm").disabled = true;
    }
    else {
        document.getElementById("price_error").style.display='none';
        document.getElementById("confirm").disabled = false;
    }
}

</script>
</head>

<body>
<div class="wrapper">
<?php
    require('topnav.php');
    ?>
</div>

<div class="form_container">
<h1>Edit hotel information</h1>
<form action="php/edit_hotel.php" method="post">
<ul class="form_input">

<li>
<label for="">ID</label>
<input type="text" id="id" name="HID" placeholder="Hotel's ID.." title="No longer than 8 characters" maxlength="8">
</li>

<li>
<label for="">Name</label>
<input type="text" id="name" name="HName" placeholder="Hotel's name.." title="No longer than 50 characters" maxlength="50">
</li>

<li>
<label for="">Level</label>
<select id="level" name="Level" onclick="checkLevel()">
<option value="default">--Please choose--</option>
<option value="1">Level 1</option>
<option value="2">Level 2</option>
<option value="3">Level 3</option>
<option value="4">Level 4</option>
<option value="5">Level 5</option>
</select>
<div id="level_error" class="error">Please choose a level.</div>
</li>

<li>
<label for="">Region</label>
<select id="area" name="Area" onclick="checkArea()">
<option value="default">--Please choose--</option>
<option value="Hung Hom">Hung Hom</option>
<option value="Homantin">Homantin</option>
<option value="Mong Kok">Mong Kok</option>
<option value="Causeway Bay">Causeway Bay</option>
<option value="other">other</option>
</select>
<div id="area_error" class="error">Please choose a region.</div>
</li>

<li>
<label for="">RoomType</label>
<select id="roomtype" name="RoomType" onclick="checkroomtype()">
<option value="default">--Please choose--</option>
<option value="Double room">Double room</option>
<option value="Single room">Single room</option>
<option value="other">other</option>
</select>
<div id="area_error" class="error">Please choose a roomtype.</div>
</li>

<div id="submit">
<input type="submit" value="Submit"/>
</div>

</ul>
</form>
</div>

</body>

</html>