<?php
error_reporting(0);
?>


<!DOCTYPE html>

<html>
<head>
 <title>jQuery AJAX</title>
</head>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>
<script>
$(function() {
    
 $("#searchField").keyup(function(){
 $.post("searchAjaxServer.php",
 {
 searchField: $(this).val()
 },
 function(data,status){
 $("#searchContacts").text(data);
 });
 });
});

</script>
<body>
Name: <input id="searchField" type="text"><br><br>

Contacts: <textarea id="searchContacts" rows="5" cols="30"></textarea>

</body>
</html>

