<div class="container" style="margin:3rem auto;">
    <h3 style="margin-bottom: 1rem">FAQ</h3>
    <div class="accordion">
        <?php foreach (($faq ?? null) as $question): ?>
            <div class="accordion-item">
                <input type="checkbox" id="<?= $this->escapeHtml($question['idFAQ']); ?>" />
                <label for="<?= $this->escapeHtml($question['idFAQ']); ?>">
                    <?= $this->escapeHtml($question['question']); ?>
                </label>
                <div class="accordion-body">
                    <p><?= $this->escapeHtml($question['reponse']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="accordion-item">
            <input type="checkbox" id="faq2" />
            <label for="faq2">
                Accordion Item #2
            </label>
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="faq3" />
            <label for="faq3">
                Accordion Item #3
            </label>
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="faq4" />
            <label for="faq4">
                Accordion Item #4
            </label>
            <div class="accordion-body">this is some random text</div>
        </div>
    </div>
</div>
