
<?php foreach(getServices() as $services): ?>
    <div class="item-services">
        <div class="item-services__item">
            <div class="item-services__icon">
                <img src="<?php echo wp_get_attachment_url($services['image'])?>" height="auto" width="100%">
            </div>
            <h3 class="item-services__title">
                <?php echo $services['title'] ?>
            </h3>
            <p class="item-services__text">
                <?php echo $services['text'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>
