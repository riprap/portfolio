<?php
/*
    File Name: get_contacts.php
    Name: Nolan Knill
    Web site name: Business Contacts List
    File Description: Displays the business contacts if logged in
*/


if (!isset($_SESSION['id'])){
	header('Location:index.php');
}
function get_contacts($db){
	$stmt = $db->query("SELECT name, number, address, note FROM contact ORDER BY name ASC");
	$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $contacts;
}

require_once('pdoconfig.php');
$contacts = get_contacts($db);
?>

<div id="contacts">
	<ul id = "contacts_list">
		<?php 
		foreach($contacts as $contact){
			echo "<h2>" . $contact['name'] . "</h2>";
			echo "<p>" . $contact['number']. "</p>";
			echo "<p>" . $contact['address']. "</p>";
			if (isset($contact['note'])){
				echo "<p>" . $contact['note']. "</p>";
			}
		}
		?>
	</ul>
	<button type="button" value="logout" onClick = "javascript:location.href = 'logout.php';" >Logout</button>
</div>

