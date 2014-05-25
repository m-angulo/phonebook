<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List of Contacts</title>	
</head>
<body>

<div id="container">
	<h1>List of Contacts</h1>

	<div id="body">
            <form method='post' action='http://localhost/phonebook/index.php/contacts/save'>
                First Name: <input type='text' name='firstname'>
                Middle Name: <input type='text' name='middlename'>
                Last Name: <input type='text' name='lastname'>
                Address: <input type='text' name='address'>
                Phone Number: <input type='text' name='number'>
                <input type='submit' value='Save' name='save'>
            </form>
        </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>