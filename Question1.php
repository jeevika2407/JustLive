<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mood Tracking</title>
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
          <span class="user-name">user name</span>
        </div>
      </nav>
    <center><h1>Mood Tracking Questions</h1></center>
    <div class="form-cont">
    <form action="process.php" method="post">
        <p>Question 1: Have you noticed any changes in your sleep patterns?</p>
        <input type="radio" name="q1" value="a" id="q1a">
        <label for="q1a">a)  Always</label><br>
        <input type="radio" name="q1" value="b" id="q1b">
        <label for="q1b">b)  Frequently</label><br>
        <input type="radio" name="q1" value="c" id="q1c">
        <label for="q1c">c)  Occasionally</label><br>
        <input type="radio" name="q1" value="d" id="q1d">
        <label for="q1d">d) Never</label><br><br>

        <p>Question 2: Do you find it difficult to concentrate or focus on tasks?</p>
        <input type="radio" name="q2" value="a" id="q2a">
        <label for="q2a">a)  Always</label><br>
        <input type="radio" name="q2" value="b" id="q2b">
        <label for="q2b">b)  Frequently</label><br>
        <input type="radio" name="q2" value="c" id="q2c">
        <label for="q2c">c)  Occasionally</label><br>
        <input type="radio" name="q2" value="d" id="q2d">
        <label for="q2d">d) Never</label><br><br>

        <p>Question 3: Are you experiencing any physical symptoms such as headaches or muscle tension?</p>
        <input type="radio" name="q3" value="a" id="q3a">
        <label for="q3a">a)  Always</label><br>
        <input type="radio" name="q3" value="b" id="q3b">
        <label for="q3b">b)  Frequently</label><br>
        <input type="radio" name="q3" value="c" id="q3c">
        <label for="q3c">c)  Occasionally</label><br>
        <input type="radio" name="q3" value="d" id="q3d">
        <label for="q3d">d) Never</label><br><br>

        <p>Question 4: Have you noticed any changes in your social interactions or relationships?</p>
        <input type="radio" name="q4" value="a" id="q4a">
        <label for="q4a">a)  Always</label><br>
        <input type="radio" name="q4" value="b" id="q4b">
        <label for="q4b">b)  Frequently</label><br>
        <input type="radio" name="q4" value="c" id="q4c">
        <label for="q4c">c)  Occasionally</label><br>
        <input type="radio" name="q4" value="d" id="q4d">
        <label for="q4d">d) Never</label><br><br>

        <p>Question 5: Have you noticed changes in your interest or enjoyment in activities you used to find pleasurable?</p>
        <input type="radio" name="q5" value="a" id="q5a">
        <label for="q5a">a)  Always</label><br>
        <input type="radio" name="q5" value="b" id="q5b">
        <label for="q5b">b)  Frequently</label><br>
        <input type="radio" name="q5" value="c" id="q5c">
        <label for="q5c">c)  Occasionally</label><br>
        <input type="radio" name="q5" value="d" id="q5d">
        <label for="q5d">d) Never</label><br><br>

        <p>Question 6: Have you noticed an increase in procrastination or difficulty initiating tasks?</p>
        <input type="radio" name="q6" value="a" id="q6a">
        <label for="q6a">a)  Always</label><br>
        <input type="radio" name="q6" value="b" id="q6b">
        <label for="q6b">b)  Frequently</label><br>
        <input type="radio" name="q6" value="c" id="q6c">
        <label for="q6c">c)  Occasionally</label><br>
        <input type="radio" name="q6" value="d" id="q6d">
        <label for="q6d">d) Never</label><br><br>

        <p>Question 7: Do you find yourself experiencing more mood swings or fluctuations in your emotions?</p>
        <input type="radio" name="q7" value="a" id="q7a">
        <label for="q7a">a)  Always</label><br>
        <input type="radio" name="q7" value="b" id="q7b">
        <label for="q7b">b)  Frequently</label><br>
        <input type="radio" name="q7" value="c" id="q7c">
        <label for="q7c">c)  Occasionally</label><br>
        <input type="radio" name="q7" value="d" id="q7d">
        <label for="q7d">d) Never</label><br><br>

        <p>Question 8: Do you often feel a sense of dread or anxiety about the future?</p>
        <input type="radio" name="q8" value="a" id="q8a">
        <label for="q8a">a)  Always</label><br>
        <input type="radio" name="q8" value="b" id="q8b">
        <label for="q8b">b)  Frequently</label><br>
        <input type="radio" name="q8" value="c" id="q8c">
        <label for="q8c">c)  Occasionally</label><br>
        <input type="radio" name="q8" value="d" id="q8d">
        <label for="q8d">d) Never</label><br><br>

        <p>Question 9: .Do you often feel overwhelmed by your responsibilities or tasks?</p>
        <input type="radio" name="q9" value="a" id="q9a">
        <label for="q9a">a)  Always</label><br>
        <input type="radio" name="q9" value="b" id="q9b">
        <label for="q9b">b)  Frequently</label><br>
        <input type="radio" name="q9" value="c" id="q9c">
        <label for="q9c">c)  Occasionally</label><br>
        <input type="radio" name="q9" value="d" id="q9d">
        <label for="q9d">d) Never</label><br><br>

        <p>Question 10: Feeling isolated or alone?</p>
        <input type="radio" name="q10" value="a" id="q10a">
        <label for="q10a">a)  Always</label><br>
        <input type="radio" name="q10" value="b" id="q10b">
        <label for="q10b">b)  Frequently</label><br>
        <input type="radio" name="q10" value="c" id="q10c">
        <label for="q10c">c)  Occasionally</label><br>
        <input type="radio" name="q10" value="d" id="q10d">
        <label for="q10d">d) Never</label><br><br>
        
        <center><input style="background-color: #9DECFA; padding:10px 15px;border-radius:30px;width:90px;border:none;margin-bottom:10px;" type="submit" value="Submit"></center>
    </form>
    </div>
</body>
</html>
