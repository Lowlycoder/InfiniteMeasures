<?= "From: {$this->escapeHtml($name)} <{$this->escapeHtml($email)}>"; ?>
<br><br>
<span style="white-space: pre-wrap">
<?= $this->escapeHtml($message); ?>
</span>