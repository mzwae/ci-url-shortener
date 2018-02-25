<h2><?=$title?></h2>

<ul class="list-group">
  <?php foreach($categories as $category): ?>
    <li class="list-group-item">
      <a href="<?=site_url('/categories/posts/' . $category['id'])?>">
        <?=$category['name']?>
      </a>
      <?php if($this->session->userdata('user_id') == $category['user_id']): ?>
        <form class="cat-delete" action="categories/delete/<?=$category['id']?>" method="post">
          <input type="submit" value="[X]" class="btn-link text-danger">
        </form>
      <?php endif; ?>
    </li>
  <?php endforeach ?>

</ul>
