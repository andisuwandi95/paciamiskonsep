<?php ob_start(); ?>
<section class="u-clearfix u-section-3" id="sec-e250">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <?php if ($image0) : ?><div <?php $link = $titleLink0 ? $titleLink0 : $readmoreLink0; if($link): ?>data-post-url="<?php echo $link; ?>"<?php endif; ?> class="u-align-left u-blog-control u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="" data-image-width="1080" data-image-height="1080" style="background-image: url('<?php echo $image0; ?>');">
            <div class="u-container-layout u-container-layout-1"></div>
          </div><?php else: ?><div class="hidden-image-container u-size-30"></div><?php endif; ?>
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
              <?php if (count($metadata0) > 0): ?>
<div class="u-metadata u-metadata-1">
                <?php if (isset($metadata0['category'])): ?><span class="u-meta-category u-meta-icon"><?php echo $metadata0['category']; ?></span><?php endif; ?>
              </div>
<?php endif; ?>
              <?php if ($title0): ?><h2 class="u-blog-control u-text u-text-1">
                <?php if ($titleLink0): ?><a class="u-post-header-link" href="<?php echo $titleLink0; ?>"><?php endif; ?><?php echo $title0; ?><?php if ($titleLink0): ?></a><?php endif; ?>
              </h2><?php endif; ?>
              <div class="u-blog-control u-post-content u-text u-text-2"><?php echo $content0; ?></div>
              <?php if (count($metadata0) > 0): ?>
<div class="u-metadata u-metadata-2">
                <?php if (isset($metadata0['date'])): ?><span class="u-meta-date u-meta-icon"><?php echo $metadata0['date']; ?></span><?php endif; ?>
                
              </div>
<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php if (!($image0)) : ?><style>.u-section-3 .u-sheet { min-height: auto; }</style><?php endif; ?>
<?php $tmpl = ob_get_clean(); ?>
<?php  echo $tmpl; ?>