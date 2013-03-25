<?php
require_once('pdoconfig.php');

$query = $pdo->prepare("SELECT name, number, address, note FROM contact");
$contacts = $pdo->query($statement);

?>

<div id="contacts">
	<ul id = "contacts_list">
		<?php 
		foreach($contact as $contacts){
			echo "<h2>" . $contact['name'] . "</h2>";
			echo "<p>" . $contact['number']. "</p>";
			echo "<p>" . $contact['address']. "</p>";
			if (isset($contact['note'])){
				echo "<p>" . $contact['note']. "</p>";
			}
		}
		?>
	</ul>
</div>
