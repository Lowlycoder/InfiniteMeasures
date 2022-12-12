<div class="section-container">
    <div class="info-text-container">
        <div class="info-text-heading-bar">
            <!-- title from the model -->
            <?= $this->escapeHtml($page['info']['title']) ?>
            <div id="info-text-toggle">
                hide
            </div>
        </div>
        <div class="info-text">
            <!-- info text from the model -->
            <?= $this->escapeHtml($page['info']['description']) ?>
        </div>
    </div>
</div>