<?php
// Get the POST data
$data = json_decode(file_get_contents("php://input"), true);

// Extract data into variables
$appName = $data['appName'];
$contact = $data['contact'];
$personalInfo = $data['personalInfo'];
$appType = $data['appType'];
$osType = $data['osType'];
$policyDate = $data['policydate'];
$ownerType = $data['ownerType'];
$developedBy = $data['developedBy'];

// Generate the privacy policy using the variables
$privacyPolicy = "Privacy Policy for " . $appName . "\n\n";
$privacyPolicy .= "Contact Information: " . $contact . "\n\n";
$privacyPolicy .= "Personally Identifiable Information: " . $personalInfo . "\n\n";
$privacyPolicy .= "App Type: " . $appType . "\n\n";
$privacyPolicy .= "Mobile OS: " . $osType . "\n\n";
$privacyPolicy .= "Policy Effective Date: " . $policyDate . "\n\n";
$privacyPolicy .= "Owner Type: " . $ownerType . "\n\n";
$privacyPolicy .= "Developed by: " . $developedBy . "\n\n";

// You can add more details to the privacy policy here

// Send the generated privacy policy as a response
echo $privacyPolicy;
?>
