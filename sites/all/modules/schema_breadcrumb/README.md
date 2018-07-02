#Schema Breadcrumb module#

##Installation##
1. install module
2. add the theme_breadcrumb function to your theme template.php

##theme_breadcrumb##
function theme_breadcrumb($variables) {

  $breadcrumb = $variables['breadcrumb'];

  return theme('schema_breadcrumb', array(
      'attributes' => array(
        'class' => array('breadcrumb'),
      ),
      'items' => $breadcrumb,
      'type' => 'ol',
    )
  );

}
