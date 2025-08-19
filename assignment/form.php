<!DOCTYPE html>
<html>

<head>
    <title>Book Form</title>
</head>

<body>


    <?php
    include 'dbconn.php';
    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['description'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $description = $_POST['description'];

        $sql = "INSERT INTO new_books (id, title, author, description) VALUES ('$id', '$title', '$author', '$description')";

        if (!mysqli_query($conn, $sql)) {
            die("Re-do");
        } else {
            header("LOCATION: index.php");
        }
    }
    ?>


    <form action="form.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="title">Book Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>