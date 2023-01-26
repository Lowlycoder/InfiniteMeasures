<div class="container" style="margin:3rem auto;">
    <h3 style="margin-bottom: 1rem">FAQ</h3>
    <div class="accordion">
        <?= isset($faq) ? null : 'Aucune question n\'est disponible à l\'affichage'; ?>
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
    </div>
</div>
