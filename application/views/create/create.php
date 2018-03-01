<div class="page-header">
  <h1><?=$this->lang->line('system_system_name')?></h1>
</div>

<p><?=$this->lang->line('encode_instruction_1')?></p>

<?php
  if (validation_errors()) {
      echo validation_errors();
  }
?>

<?php if ($success_fail == 'success'): ?>
  <div class="alert alert-success">
    <strong><?=$this->lang->line('common_form_elements_success_notify')?></strong>
    <?=$this->lang->line('encode_encode_now_success')?>
  </div>
<?php endif; ?>
<?php if ($success_fail == 'fail'): ?>
  <div class="alert alert-danger">
    <strong><?=$this->lang->line('common_form_elements_error_notify')?></strong>
    <?=$this->lang->line('encode_encode_now_error')?>
  </div>
<?php endif; ?>


<?php echo form_open('create'); ?>
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="<?=$this->lang->line('encode_type_url_here')?>" name="url_address">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default">
          <?=$this->lang->line('encode_encode_now')?>
        </button>
      </span>
     </div> <!--input-group -->
  </div> <!--col-lg-12 -->
</div> <!--row -->
<?php echo form_close(); ?>

<br>

<?php if($encoded_url == true): ?>
  <div class="alert alert-info">
    <strong><?=$this->lang->line('encode_encoded_url')?></strong>
    <?=anchor($encoded_url, $encoded_url)?>
  </div>
<?php endif; ?>
