<div class="site-container">
    <img src="<?= BASE_URL_ASSETS ?>images/logo50x50.png" alt="logo"/>
    <h1>
        <!-- title from model -->
        <?= $this->escapeHtml($page['info']['title']) ?>
    </h1>
    <div class="section-container">
        <h3>
            <!-- subtitle from model -->
            <?= $this->escapeHtml($page['info']['subtitle']) ?>
        </h3>
    </div>
    <!-- description html snippet -->
    <?= $description_html ?>

    <?php foreach ($page['links'] as $link): ?>
        <div class="section-container">
            <a href="<?= $this->escapeHtml($link['link_url']) ?>" target="_blank">
                <?= $this->escapeHtml($link['link_title']) ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>