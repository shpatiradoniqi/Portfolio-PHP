<?php 
include "./components/header.php";
?>
<?php 
require './databaseconfig2.php';

$query=$pdo->query('SELECT * FROM posts inner join news_category on news_category.category_id=posts.category_id');
$tedhenatnews=$query->fetchAll();
?>

<a href="add_news.php">Shto Lajme</a>
<div class="news">
<?php foreach($tedhenatnews as $news):?>
<div class="news-box">
<h2><?php echo $news['posts_title'];?></h2>
<p><?php echo $news['posts_body'];?></p>
<img src="uploads/<?php echo $news['image'];?>" width="400"/>
<h4>Kategoria e lajmeve: <?php echo $news['category_name']; ?></h4>
</div>
<?php endforeach; ?>
</div>

<?php 

include "./components/footer.php";


?>