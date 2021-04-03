<?php include ("header.php"); ?>

<div class="result">
   <h1>Submitted Information</h1>
    <p>Name: <?= $_POST["name"]; ?></p>
    <p>Dojo Location: <?= $_POST["dojo_location"]; ?></p>
    <p>Favorite Language: <?= $_POST["favorite_language"]; ?></p>
    <p>Comment: <?= $_POST["comment"]; ?></p>
    <form action="index.php">
        <input type="submit" value="Back" class="btn">
    </form>
</div>

<?php include ("footer.php")?>