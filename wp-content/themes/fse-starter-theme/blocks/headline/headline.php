<?php

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
  $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'c-headline';
if ( ! empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
  $class_name .= ' align' . $block['align'];
}

?>

<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>">

  <InnerBlocks allowedBlocks='["core/group", "core/heading", "core/paragraph"]' template='[["core/heading",{"level":"2","style":{"typography":{"fontWeight":"700","lineHeight":"1","textTransform":"uppercase"}},"className":"c-headline__title","placeholder":"Headline title"}],["core/group",{"className":"c-headline__group"},[["core/paragraph",{"className":"c-headline__subtitle","placeholder":"Headline sub title"}],["core/paragraph",{"className":"c-headline__description","placeholder":"Headline description"}]]]]' templateLock="insert" />

</div>