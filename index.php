<?php include ("header.php"); ?>

<form action="result.php" METHOD="post" class="index">
    <label><span>Your Name:</span> <input type="text" name="name"></label>
    <label><span>Dojo Location:</span> <select name="dojo_location">
            <option value="montainview">Montain View</option>
            <option value="bellevue">Bellevue</option>
        </select>
    </label>
    <label><span>Favorite Language:</span> <select name="favorite_language">
            <option value="javascript">Javascript</option>
            <option value="php">PHP</option>
        </select>
    </label>
    <textarea name="comment"></textarea>
    <input class="btn" type="submit">
</form>

<?php include ("footer.php")?>