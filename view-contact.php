<?php session_start();
if ($_SESSION["userType"] == 'admin'){
    //allowed to see this page
    include('includes/standardheader.html'); ?>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sign up page for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>View Submissions</title>
</head>
<body>
    <h2>Contact Submissions</h2>   

    <?php
    //connect to db
    include('includes/dbconfig.php');
    //echo out all contact submissions
    $stmt = $pdo->prepare("SELECT * FROM `contactsubmission`");

    $stmt->execute();


    while ($results = $stmt->fetch(PDO::FETCH_ASSOC));
    $json = json_encode($results);
    echo($json);  
?>

</body>
</html>
<?php
}else{
    //do NOT show page
    ?>
<body>
    <p> ACCESS DENIED. Please go back to Home here:</p>
    <a href = "homepage.php">Home</a>
</body><?php
}
?>