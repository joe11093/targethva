<?php if ($breadcrumb or $title ): ?>
<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
<div class="zone-inner-wrapper">
  <div<?php print $content_attributes; ?>>  
  <div class="zone-inner clearfix">
     
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>   
  
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
    <?php if ($title_hidden): ?><div class="element-invisible"><?php endif; ?>
    <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php if ($title_hidden): ?></div><?php endif; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $content; ?>
  </div>
  </div>
</div>
<?php if ($wrapper): ?></div><?php endif; ?>
<?php endif; ?>