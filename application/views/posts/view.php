<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?=$post['category_id']?></strong></small> <br>
<img class="cover-image" src="<?=site_url()?>assets/images/posts/<?=$post['post_image']?>">
<div class="post-body">
  <?php echo $post['body']; ?>
</div>

<hr>
<a href="<?=base_url()?>posts/edit/<?=$post['slug']?>" class="btn btn-default pull-left">Edit</a>
<?php echo form_open('/posts/delete/' . $post['id']); ?>
  <input type="submit" value="Delete" class="btn btn-danger">
</form>
<hr>
<h3>Add Comment</h3>
<?php echo form_open('comments/create/' . $post['id']) ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea rows="30" name="body" class="form-control"></textarea>
  </div>
  <input type="hidden" name="$slug" value="<?=$post['slug']?>">
  <button  type="submit" class="btn btn-primary">Submit</button>
</form>
