<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class=container>
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" /><br />
    </div>
    <div class=form-group>
        <label for="text">Text</label>
        <textarea class="form-control" name="text"></textarea><br />
    </div>
    <button type="submit" class="btn btn-primary" value="Create news item">Create</button>
</div>

</form>