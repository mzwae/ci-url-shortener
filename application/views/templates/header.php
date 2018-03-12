<html>
  <head>
    <title>URL Shortener</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>">URL Shortener</a>
      </div>
      <!-- Collection of nav links and other content for toggling -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="nav-item"><a href="<?=base_url()?>">Home</a></li>
              <li class="nav-item"><a href="<?=base_url()?>about">About</a></li>

          </ul>
      </div>
    </div>
</nav>

<div class="container">
