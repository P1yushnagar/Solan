<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
 <?php 
 $name = [
    ["name"=>"The Lord of the Rings","author"=>"J.R.R. Tolkien","publishedYear"=>"1980"]
    ,["name"=>"The Harry Potter series","author"=>"J.K. Rowling","publishedYear"=>"2003"],
    ["name"=>"Don Quixote","author"=>"Miguel de Cervantes","publishedYear"=>"1900"]
 ];
?>
<ul><?php foreach($name as $naam) : ?>
    <?php if($naam["publishedYear"]==="2003") : ?>
        <li>
            <?= $naam["name"] ?>
            <?= $naam["author"] ?>
            <?= $naam["publishedYear"] ?>
    </li>
        <?php endif ;?>
        <?php endforeach ; ?>
    </ul>

</body>
</html>
