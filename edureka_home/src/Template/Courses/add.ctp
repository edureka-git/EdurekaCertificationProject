<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Add Course') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('rating');
            echo $this->Form->input('learner_acc');
            echo $this->Form->input('batch_start_date', ['empty' => true]);
            echo $this->Form->input('description');
            echo $this->Form->input('url_img');
            echo $this->Form->input('price');
            echo $this->Form->input('category_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
