<?php 
    $data = getData();
?>
<div class="generic-accordion accordion-main">
      
    <?php foreach ($data['accordion'] as $item): ?>

        <button class="accordion lead-text"><?php echo $item['title'] ?></button>
        <div class="panel">
            <?php echo $item['description'] ?>
        </div>

    <?php endforeach ?>

</div>