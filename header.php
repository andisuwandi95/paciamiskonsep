<?php
    $document = JFactory::getDocument();
?>
    <header class="u-align-left u-clearfix u-header u-header" id="sec-0d44">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <?php $logoInfo = getLogoInfo(array(
            'src' => "/images/banner.png",
            'href' => "#",
            'default_width' => '341'
        ), true); ?><a href="<?php echo $logoInfo['href']; ?>" class="u-image u-logo u-image-1" data-image-width="1839" data-image-height="624">
      <img src="<?php echo $logoInfo['src']; ?>" class="u-logo-image u-logo-image-1" data-image-width="341.8097">
    </a>
    <?php echo CoreStatements::position('hmenu', '', 1, 'hmenu'); ?>
  </div>
</header>