<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
?>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other <br>
<button type="submit" value="Submit">Submit</button>


</body>
</html>