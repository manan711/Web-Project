<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload test</title>
</head>
<body>
    <!-- HTML UPLOAD FORM -->
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" required/>
        <input type="text" name="description" placeholder="Description" required/>
        <input type="number" name="price" placeholder="Price" required/>
        <input type="number" name="quantity" placeholder="Quantity" required/>
        <input type="file" name="upload" accept=".png, .gif, .jpg" required/>
        <input type="submit" name="submit" value="Upload"/>
    </form>

    <!-- SAVE IMAGE INTO DATABASE -->
    <?php
    if (isset($_FILES['upload'])) {
        try {
            require "/www/dbconfig.php";
            $title = $_POST('title');
            $description = $_POST('description');
            $price = $_POST('price');
            $quantity = $_POST('quantity');
            $image = $_FILES['upload']['name'];
            $stmt = $pdo->prepare("INSERT INTO 'products'('title','description','price','quantity','image') VALUES (?,?,?,?,?)");
            $stmt->execute([$title,$description,$price,$quantity,$image, file_get_contents($title,$description,$price,$quantity,$image)]);
            echo "Image uploaded successfully";
        } catch (Throwable $th) {
            throw $th;
        }
    }
    ?>

</body>
</html>