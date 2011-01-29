<div id="primary" class="widget-area sidebar">
  <ul>
    <li id="search-1" class="widget-container widget_search">
      <h3 class="widget-title"><?php echo __('Search', '', 'veryplaintxt') ?></h3>
      <form method="get" id="searchform" action="<?php echo url_for('@sf_simple_blog_search') ?>" >
      <div>
        <input type="text" value="<?php echo $sf_request->getParameter('s') ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="<?php echo __('Search', '', 'veryplaintxt') ?>" />
      </div>
      </form>
    </li>
    <?php include_partial('sfSimpleBlog/sidebar') ?>
  </ul>
</div>