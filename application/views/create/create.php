<div class="page-header text-center">
  <h1>URL Shortener</h1>
</div>

<?php if ($success_fail == 'success'): ?>
  <div class="alert alert-success">
    <strong>Your URL was successfully shortened - check it out below</strong>
  </div>
<?php endif; ?>
<?php if ($success_fail == 'fail'): ?>
  <div class="alert alert-danger">
    <strong>We could not shorten your url, see below for why</strong>
  </div>
<?php endif; ?>

<p>Enter a URL in the text box below and we'll shorten it</p>

<?php
  if (validation_errors()) {
      echo validation_errors();
  }
?>


<?php echo form_open('create'); ?>
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Type URL here..." name="url_address">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success">
          Shorten URL
        </button>
      </span>
     </div> <!--input-group -->
  </div> <!--col-lg-12 -->
</div> <!--row -->
<?php echo form_close(); ?>

<br>

<?php if ($encoded_url == true): ?>
  <div class="alert alert-info">
    <strong>Shortened URL:</strong>
    <a href="<?=$encoded_url?>"><?=$encoded_url?></a>
  </div>
<?php endif; ?>
