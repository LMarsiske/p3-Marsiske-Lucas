<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'lucasmarsiske.com' // Put you mail domain here
	, 
	'MMC5277 Project 3 Contact Form' // Put your site name / form name here
	, 
	'lmarsiske@gmail.com' // Where will the form notification be sent?
	, 
	'noreply@lucasmarsiske.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field
	
);


?>

<!-- HTML bottom code goes here -->