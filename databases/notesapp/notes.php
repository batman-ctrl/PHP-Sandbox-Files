<?php
    session_start();
    require "config.php";

    // if there is no session set / no logged in user
    if(!isset($_SESSION["user_id"])){
        echo "<script>window.location.href='index.php';</script>";
        exit();
    }

    $userId = $_SESSION["user_id"];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["addNote"])){
            // add a note
            $title = $_POST["title"];
            $content = $_POST["content"]; 
            $stmt = $pdo-> prepare("insert into notes (user_id, title, content) values (:userId, :title, :content)"); 
            $stmt->execute(["userId"=>$userId, "title"=>$title, "content"=>$content]);
            echo "<script>console.log('Inserted a note successfully.');</script>";
        } elseif(isset($_POST["deleteNote"])){
            $noteId = $_POST["noteId"];
            $stmt=$pdo->prepare("delete from notes where note_id=:noteId and user_id=:userId");
            $stmt->execute(["noteId"=>$noteId, "userId"=>$userId]);
        }elseif(isset($_POST["updateNote"])){
            $noteId = $_POST["noteId"];
            $title = $_POST["title"];
            $content = $_POST["content"];


            $stmt=$pdo->prepare("update notes set title=:title, content=:content where note_id=:noteId and user_id=:userId");
            $stmt->execute(["title"=>$title, "content"=>$content, "noteId"=>$noteId, "userId"=>$userId]);
        }


    }


    // get all the notes
    $stmt = $pdo->prepare("select * from notes where user_id=:userId order by created_at desc");
    $stmt->execute(["userId"=>$userId]);
    $notes = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <style>   
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
 
        *{
            font-family: 'Noto Sans',sans-serif;
            margin: 0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            height:100vh;
            display:flex;
            justify-content: center;
            align-items:center;
            background: #222;
            flex-direction: column;
        }

        .container{
            padding: 32px;
            background: coral; 
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            align-items: center;
            width: 500px;
            height:400px;
        }
        .container form {
            display: flex;
            flex-direction: column;
            gap:5px; 
            width: 100%;
        }

        .container form > * {
            padding: 10px; 
        }

        .notes{
            width: 500px;
            margin:10px;
            padding:10px;
            background: salmon;
            display: flex;
            gap: 20px;
            flex-wrap:wrap;
            height: 300px;
            overflow-y: scroll;
            justify-content: center;
        }

        .note{
            background: black;
            color:white;
            padding:10px;
            width: 40%;
        }

    </style>
</head>
<body>
    

<div class="container">   
    <h1>Create Note</h1>
    <!-- Add a note -->
    <form action="notes.php" method="post">
        <input type="text" name="title" placeholder="Note Title" required/>
        <textarea name="content" placeholder="Note Content" required></textarea>
        <button type="submit" name="addNote">Add Note</button>
    </form>

    <!-- Display all the notes -->
</div>

<h1 style="color:white;">My Notes</h1>
<div class="notes">
    <?php foreach($notes as $note):?>
        <div class="note">
            <h3><?php echo htmlspecialchars($note['title'] );?></h3>
            <p><?php echo htmlspecialchars($note['content']);?></p>
            <!-- Delete and Update Actions -->
            <form action="notes.php" method="post">
                <input type="hidden" name="noteId" value="<?php echo $note["note_id"]; ?>"/>
                <input type="text" name="title" value="<?php echo $note["title"]; ?>" required>
                <textarea name="content" required><?php echo $note["content"] ?></textarea>
                <button type="submit" name="updateNote">Update</button>
                <button type="submit" name="deleteNote">Delete</button>
            </form>


        </div>
    <?php endforeach;?>
</div>

</body>
</html>