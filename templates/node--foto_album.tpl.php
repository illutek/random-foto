<?php if ($teaser): ?>
    <div class="foto"><a href="<?php print $node_url; ?>"><?php print render($content['field_foto'][rand(0, count($field_foto) - 1)]); ?></a></div>
<?php else: ?>

<!-- hier de volledige node -->

    <h2><?php print $title; ?></h2>
    <div class="foto_all"><?php print render($content['field_foto']); ?></div>

<?php endif; ?>
