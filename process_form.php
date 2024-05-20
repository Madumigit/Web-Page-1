<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $errors = [];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comments = $_POST["comments"];

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($comments)) {
        $errors[] = "All fields are required.";
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // If there are no errors, proceed
    if (empty($errors)) {
        // Save submitted data to JSON file
        $formData = [
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "phone" => $phone,
            "comments" => $comments
        ];

        $json = json_encode($formData);
        file_put_contents("form_data.json", $json);

        // Send auto-response email to the user
        $userSubject = "Thank you for your submission";
        $userMessage = "Dear $firstName $lastName,\n\nThank you for contacting us. We have received your message and will get back to you as soon as possible.\n\nBest regards,\nYour Company Name";

        mail($email, $userSubject, $userMessage);

        // Send admin email
         $adminEmail = "dumidu.kodithuwakku@ebeyonds.com, prabhath.senadheer@ebeyonds.com"; // Change this to the admin's email address
         $adminSubject = "New Form Submission";
         $adminMessage = "A new form submission has been received:\n\n";
         $adminMessage .= "First Name: $firstName\n";
         $adminMessage .= "Last Name: $lastName\n";
         $adminMessage .= "Email: $email\n";
         $adminMessage .= "Phone: $phone\n";
         $adminMessage .= "Comments: $comments\n";

        mail($adminEmail, $adminSubject, $adminMessage);

        // Redirect to a thank you page or display a success message
         header("Location: thank_you.php");
         exit();
    } else {
        // If there are errors, display them to the user
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
