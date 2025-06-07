<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Result</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar">
  <div class="navbar-logo">
    <img src="img/WhatsApp Image 2024-02-25 at 18.53.14_1a2730f3-Photoroom.png-Photoroom.png" alt="Logo">
  </div>
  <ul class="navbar-menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
  <div class="user-profile">
    <img src="img/user.jpeg" alt="Profile Photo" class="profile-photo">
    <span class="user-name">John Doe</span>
  </div>
</nav>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_points = 0; // Initialize total points
    
    // Loop through each question and calculate points
    for ($i = 1; $i <= 10; $i++) {
        // Construct the name of the question from its index
        $question_name = 'q' . $i;
        
        // Check if the question is set in the POST data
        if (isset($_POST[$question_name])) {
            // Calculate points for the current question and add to total
            $total_points += calculatePoints($_POST[$question_name]);
        }
    }
    
    // Determine consultation category based on total points
    $consultation_category = "";
    if ($total_points >= 0 && $total_points <= 15) {
        $consultation_category = "Needs Significant Improvement";
    } elseif ($total_points >= 16 && $total_points <= 25) {
        $consultation_category = "Needs Improvement";
    } elseif ($total_points >= 26 && $total_points <= 35) {
        $consultation_category = "Room for Improvement";
    } elseif ($total_points >= 36 && $total_points <= 40) {
        $consultation_category = "Great Well-being";
    }

    // Display total points and consultation category
    echo "<div class='content'>";
    echo "<h3>Total points based on the Question: " . $total_points . "</h3>";
    echo "<center><h1>Your result: $consultation_category  </h1></center>";
    echo "</div>";
}

// Function to calculate points based on answer
function calculatePoints($answer) {
    switch ($answer) {
        case "a":
            return 1;
        case "b":
            return 2;
        case "c":
            return 3;
        case "d":
            return 4;
        default:
            return 0;
    }
}
switch ($consultation_category) {
    case "Needs Significant Improvement":
        echo "<div class='sug'>It seems that there is a &nbsp; <b> Need of Significant Improvement</b>&nbsp; in your current health status. To enhance your well-being and vitality, consider implementing the following suggestions:</div><br>";
        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Physical Activity</div>";
        echo "Aim for 30 minutes of moderate-intensity exercise most days of the week. Even a brisk walk or some light yoga can significantly improve mood and energy levels.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Connect with Loved Ones</div>";
        echo "Social interaction is crucial for well-being. Spend time with friends and family, talk about your feelings, and build a strong support network.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Relaxation Techniques</div>";
        echo "Consider activities like meditation, deep breathing exercises, or progressive muscle relaxation to help manage stress and improve sleep quality.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Healthy Habits</div>";
        echo "Prioritize a balanced diet, regular sleep schedule, and limit alcohol and caffeine intake. These habits provide a foundation for good physical and mental health.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Engage in Hobbies</div>";
        echo "Make time for activities you enjoy, whether it's reading, listening to music, spending time in nature, or pursuing a creative outlet.";
        echo "</div>";
        break;
    case "Needs Improvement":
        echo "<div class='sug'>It seems that there is a &nbsp; <b> Needs Improvement</b>&nbsp; in your current health status. To enhance your well-being and vitality, consider implementing the following suggestions:</div><br>";
        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Do what you love</div>";
        echo "Make time for activities you enjoy, like hobbies or spending time in nature. This creates positive feelings and reduces stress.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Connect with others</div>";
        echo "Talk to friends, family, or join a support group. Strong social connections improve your outlook and provide emotional support.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Relaxation Techniques</div>";
        echo "Try meditation, deep breathing, or progressive muscle relaxation. These techniques help manage stress, improve sleep, and promote overall well-being.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Healthy Habits</div>";
        echo "Get enough sleep, eat balanced meals and caffeine. These habits create a foundation for physical and mental well-being, impacting mood and stress levels.";
        echo "</div>";
        break;

    case "Room for Improvement":
        echo "<div class='sug'>It seems that there is a &nbsp; <b> Room for Improvement </b>&nbsp; in your current health status. To enhance your well-being and vitality, consider implementing the following suggestions:</div><br>";
        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Do what you love</div>";
        echo "Make time for activities you enjoy, like hobbies or spending time in nature. This creates positive feelings and reduces stress.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Connect with others</div>";
        echo "Talk to friends, family, or join a support group. Strong social connections improve your outlook and provide emotional support.";
        echo "</div>";

        echo "<div class='suggestion-box'>";
        echo "<div class='suggestion-title'>Relaxation Techniques</div>";
        echo "Try meditation, deep breathing, or progressive muscle relaxation. These techniques help manage stress, improve sleep, and promote overall well-being.";
        echo "</div>";
        break;
    case "Great Well-being":
        echo "<div class='suggestion-box'>";

        echo "Congratulations! You are in good health. Maintain your healthy habits.";
        echo "</div>";
        break;
    default:
        echo "Invalid consultation category.";
    }
?>

</body>
</html>
