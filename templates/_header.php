<?php use_helper('sfCombine') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title>
      <?php if (!include_slot('title')): ?>
        <?php echo sfConfig::get('app_sfSimpleBlog_title', 'sfSimpleBlog') ?>
      <?php endif; ?>
    </title>
    <?php include_slot('auto_discovery_link_tag') ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php //include_stylesheets() ?>
    <?php //include_javascripts() ?>
    <?php include_combined_assets() ?>
    <style type="text/css" media="all">
/*<![CDATA[*/
/* CSS inserted by theme options */
body{font-family:'times new roman',times,serif;font-size:90%;}
body div#container { float: left; margin: 0 -200px 2em 0; } body div#content { margin: 3em 200px 0 0; } body div.sidebar { float: right; }
body div#content div.hentry{text-align:left;}
body div#content h2,div#content h3,div#content h4,div#content h5,div#content h6{font-family:arial,helvetica,sans-serif;}
body div#wrapper{max-width:55em;min-width:35em;width:80%;}
body div.sidebar{text-align:center;}
/*]]>*/
</style>
  </head>

  <body class="home">

<div id="wrapper">
  <div id="header">
    <h1 id="blog-title"><a><?php echo link_to(sfConfig::get('app_sfSimpleBlog_title', 'sfSimpleBlog'), '@homepage') ?></a></h1>
	</div><!-- #header -->

  <div class="access"><span class="content-access"><a href="#content" title="<?php echo __('Skip to content', '', 'veryplaintxt'); ?>"><?php echo __('Skip to content', '', 'veryplaintxt'); ?></a></span></div>

  <?php include_theme_partial('nav') ?>