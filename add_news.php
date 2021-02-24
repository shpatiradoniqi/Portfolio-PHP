<script>
function validateForm(){
  var x = document.forms["myForm"]["body"].value;
  if(x == ""){
    alert("Duhet ta plotsoni permbajtjen");
    return false;
  }
}

</script>
<?php
 

session_start();
if($_SESSION['role']==1){
    require './databaseconfig2.php';

    


 
    
    $query=$pdo->query('SELECT * FROM news_category');
    $categoryinfo=$query->fetchAll();


?>


<?php

$ERR=" ";
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

if(isset($_POST['title'])){
    if(empty($_POST['title'])){
        $ERR="mesazhi nuk duhet te jete i zbrazet";
    }
    $title=test_input($_POST['title']);
    $body=test_input($_POST['body']);
    $kategoria=test_input($_POST['kategoria']);
    $post_author=test_input($_POST['post_author']);

    $image_file = time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    move_uploaded_file($temp, "uploads/".$image_file);

    $sql = 'INSERT INTO posts (posts_title, posts_body, image, category_id, post_author) VALUES(:title, :body, :image, :kategoria, :post_author)';
    $query = $pdo->prepare($sql);
    $query = $pdo->prepare($sql);
    $query->bindParam('title', $title);
    $query->bindParam('body', $body);
    $query->bindParam('image',$image_file);
    $query->bindParam('kategoria', $kategoria);
    $query->bindParam('post_author', $post_author);

    $query->execute();

    }
    ?>
    <form name="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
    <h2>Add News</h2>
    Titulli:
<input type="text" name="title" ><br>

<span><?php echo $ERR; ?> </span>

<textarea name="body" rows="4" cols="50">Permbajtja e lajmit....</textarea><br>
<input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png"><br>
<select name="kategoria">
<?php foreach($categoryinfo as $category): ?>
<option name="" value="<?php echo $category['category_id']; ?> " > <?php echo $category['category_name'] ; ?> </option>
<?php endforeach; ?>
</select>
<input type="hidden" name="post_author" value="<?php echo $_SESSION['name']; ?>">
<!--<input type="text" name="kategoria" ><br>-->
<input type="submit" name="submit" value="Shto lajmin">

</form>


</div>

<?php } else{
  header("Location: ./error.php");
} ?>






















