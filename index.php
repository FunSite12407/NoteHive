<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteHive</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="heading">
        <h1>NoteHive</h1>
        <a href="logout.php">Logout</a>
    </div>
    <div class="nav">
        <nav>
            <li class="nav-items home">Home</li>
            <li class="nav-items assignments">Assignments</li>
            <li class="nav-items notes">Notes</li>
            <li class="nav-items exam-papers">Exam Papers</li>
            <li class="nav-items about">About</li>
        </nav>
    </div>
    <div class="pages" id="home-page">
        <div class="home-page-content">
            <pre>
<span class="purple">#include</span> <span class="coral">&lt;stdio.h&gt;</span>

<span class="blue">int</span> <span class="yellow">main</span><span class="dark-yellow">() {</span>
    <span class="yellow">printf</span><span class="purple">(</span><span class="coral">"Welcome to NoteHive"</span><span class="purple">)</span>;
    <span class="purple">return</span> <span class="green">0</span>;
<span class="dark-yellow">}</span>
            </pre>
        </div>
    </div>
    <div class="pages" id="assignments-page">
        <p>Assignments</p>
    </div>
    <div class="pages" id="notes-page">
        <p>Notes</p>
    </div>
    <div class="pages" id="exam-papers-page">
        <p>Exam Papers</p>
    </div>
    <div class="pages" id="about-page">
        <p>About</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
