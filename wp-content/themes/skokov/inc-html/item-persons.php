

<?php foreach(getPersons() as $persons): ?>
<div class="item-persons">
    <div class="item-persons__img">
        <img class="item-persons__icon" src=" <?php echo wp_get_attachment_url($persons['icon'])?>" width="100%" height="auto" />
        <a href="zaglushka.html" class="item-persons__item">
            <div class="item-persons__content">
                <h3 class="item-persons__content-title">
                    <?php echo $persons['title'] ?>
                </h3>
                <div>
                    <h6 class="item-persons__content-subtitle">
                        <?php echo $persons['profession'] ?>
                    </h6>
                    <h6 class="item-persons__content-text">
                        <?php echo $persons['level'] ?>
                    </h6>
                </div>
            </div>
        </a>
    </div>
</div>
<?php endforeach; ?>
