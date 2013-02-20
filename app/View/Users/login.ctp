<<<<<<< HEAD
<?php echo $this->Session->flash('auth')?>

<?php echo $this->Form->create('User')?>
<div><?php echo $this->Form->input('username')?></div>
<div><?php echo $this->Form->input('password')?></div>
<?php echo $this->Form->end('login')?>
=======
<?php echo $this->Session->flash('auth'); ?>


<?php echo $this->Form->create('User') ?>
<?php echo $this->Form->input('username') ?>
<?php echo $this->Form->input('password') ?>
<?php echo $this->Form->end('login'); ?>
>>>>>>> login and logout
