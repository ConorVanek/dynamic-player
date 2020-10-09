<!DOCTYPE html>
<html>
<body>

<?php

$variable = 'This is also a test';

echo "<h1>This is a paragraph test. {$variable} </h1>";

?>

<a href="http://conorvanekmusicapp.infinityfreeapp.com">Music Player</a>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>


</body>
</html>