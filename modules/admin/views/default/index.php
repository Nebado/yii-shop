<div class="admin-default-index container">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is hte view content for action "<?= $this->context->action->id ?>"
        This is hte view content for action "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may cutomize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
