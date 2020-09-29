<?php echo validation_errors(); ?>

<?php echo form_open('news/delete/'.$news_item['slug']); ?>
<div class=container>
    <h2><?php echo $news_item['title'] ?></h2>
    <?php echo $news_item['text']; ?>
    <input type="hidden" name="id" value="<?php echo $news_item['id'] ?>"/><br />
    <input type="hidden" name="slug" value="<?php echo $news_item['slug'] ?>"/><br />

    <input class="btn btn-danger" type="submit" name="submit" value="Delete news item" />
</div>
</form>