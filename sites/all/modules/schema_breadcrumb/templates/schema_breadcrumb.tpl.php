<?php
/**
 * @file
 * This is the template file for breadcrumbs.
 */

?>
<?php if(!empty($items)): ?>

  <<?php echo $type;
  // Type of list ("ol", "ul", etc). ?> class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">

  <?php $count = 0;
  // Current breadcrumb list item. ?>

  <?php foreach ($items as $value): ?>

    <?php $count++; ?>

    <?php if (!is_array($value)):
    // Checks if the selected item is a link or page title. ?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" itemprop="item">
        <span itemprop="name"><?php echo $value;
        // Link name. ?></span>
        <meta itemprop="position" content="<?php echo $count; ?>" />
      </li>
    <?php else: ?>
      <li><?php echo $value['data'];
      // Page name if not link. ?></li>
    <?php endif; ?>

  <?php endforeach; ?>

  </<?php echo $type; ?>>

<?php endif; ?>
