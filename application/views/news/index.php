<nav class="navbar container navbar-expand-md navbar-dark bg-dark fixed-top justify-content-between">
                <h1 class="navbar-brand"><?php echo $title; ?></h1>
                <a class="btn btn-primary" href="news/create">+ New Post</a>
</nav>

<div class=container>
<?php 
        $rowcount = 0;
        foreach ($news as $news_item): 
                $rowcount++;
                if ($rowcount % 2 != 0){
                        echo "<div class=row>";
                }
        ?>
  <div class="col-sm-6">
    <div class="card text-white bg-success mb-3">
        <div class=card-body>
                <h5><?php echo $news_item['title']; ?></h5>
                <div class="main">
                        <?php echo $news_item['text']; ?>
                </div></br>
                <a class="btn btn-primary" href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a>
                <a class="btn btn-primary" href="<?php echo site_url('news/update/'.$news_item['slug']); ?>">Edit</a>
                <a class="btn btn-primary" href="<?php echo site_url('news/delete/'.$news_item['slug']); ?>">Delete</a>
        </div>
    </div>
  </div>

<?php 
if ($rowcount % 2 == 0){
        echo "</div>";
}
endforeach; ?>

</div>
