<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'.$news_item['slug']); ?>
<div class=container>
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" value="<?php echo $news_item['title'] ?>"/><br />

    <label for="text">Text</label>
    <textarea class="form-control" name="text"><?php echo $news_item['text'] ?></textarea><br />

    <input type="hidden" name="id" value="<?php echo $news_item['id'] ?>"/>
    <input type="hidden" name="slug" value="<?php echo $news_item['slug'] ?>"/>

    <input class="btn btn-primary" type="submit" name="submit" value="Update news item" />
</div>
</form>