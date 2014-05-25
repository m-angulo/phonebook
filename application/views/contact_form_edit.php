<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List of Contacts</title>	
</head>
<body>

<div id="container">
	<h1>List of Contacts</h1>
        <?php
        $fn = $contact['first_name'];
        $mn = $contact['middle_name'];
        $ln = $contact['last_name'];
        $add = $contact['address'];
        $pn = $contact['phone_number'];
        $id = $contact['id'];
        
        echo "
	<div id='body'>
            <form method='post' action='http://localhost/phonebook/index.php/contacts/edit/{$id}'>
                First Name: <input type='text' name='firstname' value = '{$fn}'>
                Middle Name: <input type='text' name='middlename', value = '{$mn}'>
                Last Name: <input type='text' name='lastname', value = '{$ln}'>
                Address: <input type='text' name='address', value = '{$add}'>
                Phone Number: <input type='text' name='number', value = '{$pn}'>
                <input type='submit' value='Save' name='save'>
            </form>
        </div>

</div>

</body>
</html>";