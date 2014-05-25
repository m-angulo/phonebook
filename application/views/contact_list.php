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

    if (count($contacts) == 0) {
        echo 'No records found<br/>';
    } else {
        echo "
                <table border = 1 cellpadding = 5> 
                    <tr> 
                        <td align='center'><b></b></td> 
                        <td align='center'><b></b></td> 
                        <td align='center'><b>Last Name</b></td> 
                        <td align='center'><b>First Name</b></td> 
                        <td align='center'><b>Middle Name</b></td> 
                        <td align='center'><b>Address</b></td> 
                        <td align='center'><b>Phone Number</b></td> 
                    </tr>
             ";
        foreach($contacts as $contact) { 
            $last_name = $contact['last_name']; 
            $first_name = $contact['first_name']; 
            $middle_name = $contact['middle_name']; 
            $address = $contact['address']; 
            $phone_number = $contact['phone_number'];
            $id = $contact['id'];

            echo " 
                    <tr> 
                        <td align='center'><b><a href=' " .base_url(). "index.php/contacts/contact_form_edit/".$id."'>Edit</a></b></td> 
                        <td align='center'><b><a href=' " .base_url(). "index.php/contacts/delete/{$id}'>Delete</a></b></td> 
                        <td align='center'>".$last_name."</td> 
                        <td align='center'>".$first_name."</td> 
                        <td align='center'>".$middle_name."</td> 
                        <td align='center'>".$address."</td> 
                        <td align='center'>".$phone_number."</td> 
                    </tr> 
                 
                 ";
        }
        
        
        
        echo "</table>";
    }
    echo "<a href=' " .base_url(). "index.php/contacts/contact_form'>Add New Contact</a>";

    