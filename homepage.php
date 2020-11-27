<?php session_start();
//homepage.php
    include("includes/dbconfig.php");
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/main.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="home page/ dashboard for IMM News Network">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>IMM NEWS NETWORK</title>
</head>
<body>

<section id="header"><?php include("includes/standardheader.html");?></section>

<section class="title">
<h1 class="title">IMM NEWS NETWORK</h1>
<p id="aboutText">The IMM News Network is a site for students in the Interactive Multimedia Management program at Sheridan College.</p>

<a href = "view-contact.php">View Contact</a><br/><br/>
    
<iframe width="560" height="315" src="https://www.youtube.com/embed/PcY9_mCT2D8" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
</section>

<br/><br/>

<section class= "featuredArticle" id= "featuredArticle">
<h2 class= "header" id="articleHeader">Featured Article</h2>
<?php 

$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `article`.`featured` = 'yes'");
$stmt->execute();

while($row = $stmt->fetch(PDO:: FETCH_ASSOC)) {?>

    <img src = "uploads/<?php echo($row["img"]);?>" alt="img" width= "90%" /><br/><?php
    echo("<div class=featuredArticle>");
    echo("<h3 class= article id= featuredArticleHeading>");
    echo($row["title"]);
    echo("</h3>");

    echo("<p id=featuredArticle>");?>
    <label class="label">By: </label>
    <?php echo($row["author"]);?><br/>
    <label class="label">Category: </label>
    <?php echo($row["category"]);?><br/><br/>
    <?php echo($row["content"]);
    echo("</p>");?>

    <a href = "<?php echo($row["articleLink"]); ?>" target = "_blank">See Full Article</a><br/>
<?php echo("</div>");
}
?> 
</section>

<section id="fullArticles">
<h1 id= "mainarticleHeading">Articles</h1>
<a class="link" href= "insert-article.php">Add Article</a>
<br/>
<br/>
    <ul id="nav">
        <li id="articlenav"><a class= "link" href = "articles-tech.php">Tech Articles</a></li>  
        <li id="articlenav"><a class= "link" href = "articles-industry.php">Industry Articles</a></li>  
        <li id="articlenav"><a class= "link" href = "articles-career.php">Career Articles</a></li> 
    </ul>


<section class="article" id="techArticle">
<h2 class="articleHeading" id="techHeading">Tech Articles</h2><br/>
<?php $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `article` . `category` = 'tech'");
$stmt->execute();
while ($row = $stmt->fetch(PDO:: FETCH_ASSOC)){
    echo("<div class=indivArticle>");
    echo("<h3 class= article id= articleTitle>");
    echo($row["title"]);
    echo("</h3>");

    echo("<p class= article id= articleDetails>");
    echo("<p class=article id=techAuthor><label id=techLabel>By: </label>");
    echo($row["author"]);?></p><br/><?php
    echo($row["content"]);
    echo("</p>");?>

    <a class="link" href = "view-article.php?articleId=<?php echo($row["articleId"]);?>">Read More</a><br/>
    <a class="link" href = "<?php echo($row["articleLink"]);?>">See Full Article</a><br/>
    <br />
<?php 
    echo("</div>");
}?>   
</section>


<section class="article" id="industryArticle">
<h2 class="articleHeading" id="industryHeading">Industry Articles</h2><br/>
<?php $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `article` . `category` = 'industry'");
$stmt->execute();
while ($row = $stmt->fetch(PDO:: FETCH_ASSOC)){
    echo("<div class=indivArticle>");
    echo("<h3 class= articleTitle>");
    echo($row["title"]);
    echo("</h3>");

    echo("<p class= article id= articleDetails>");
    echo("<p class=article id=industryAuthor><label id=industryLabel>By: </label>");
    echo($row["author"]);?></p><br/><?php
    echo($row["content"]);
    echo("</p>");?>

    <a class= "link" href = "view-article.php?articleId=<?php echo($row["articleId"]);?>">Read More</a><br/>
    <a class= "link" href = "<?php echo($row["articleLink"]);?>">See Full Article</a><br/>
    <br />
<?php 
    echo("</div>");
}?>   
</section>

<section class="article" id="careerArticle">
<h2 class="articleHeading" id="careerHeading">Career Articles</h2><br/>
<?php $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `article` . `category` = 'career'");
$stmt->execute();
while ($row = $stmt->fetch(PDO:: FETCH_ASSOC)){
        echo("<div class=indivArticle>");
        echo("<h3 class= articleTitle>");
        echo($row["title"]);
        echo("</h3>");

        echo("<p class= article id= articleDetails>");
        echo("<p class=article id=careerAuthor><label id=careerLabel>By: </label>");
        echo($row["author"]);?></p><br/><?php
        echo($row["content"]);
        echo("</p>");?>

        <a class= "link" href = "view-article.php?articleId=<?php echo($row["articleId"]);?>">Read More</a><br/>
        <a class= "link" href = "<?php echo($row["articleLink"]);?>">See Full Article</a><br/>
        <br />
<?php
    echo("</div>");
}?>   
</section>

</section>

<section class= "table" id= "visitorTable">
<table>
    <tr>
        <th id="table-title"></th>
        <th id="month"></th>
            <td id="visitors"></td>
        <th id="month"></th>
            <td id="visitors"></td>
        <th id="month"></th>
            <td id="visitors"></td>
        <th id="month"></th>
            <td id="visitors"></td>
        <th id="month"></th>
            <td id="visitors"></td>
        <th id="month"></th>
            <td id="visitors"></td>
    </tr>
</table>
</section>

<footer id= "footer"> 
<?php include('includes/cookies.html');?>
</footer>

<script src="cookies.js"></script>
</body>
</html>
