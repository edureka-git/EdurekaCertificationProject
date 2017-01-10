<!-- File: src/Template/Users/register.ctp -->

<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Please Register') ?></legend>
        		<?= $this->Form->input('fname'); ?>
			<?= $this->Form->input('lname'); ?>
			<?= $this->Form->input('email'); ?>
			<?= $this->Form->input('password', array('type' => 'password')); ?>
			
    </fieldset>
<?= $this->Form->submit('CREATE AN ACCOUNT', array('class' => 'button')); ?>
<?= $this->Form->end() ?>
</div>
