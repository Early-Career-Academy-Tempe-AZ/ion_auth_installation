

 <a href="<?=base_url();?>members">members</a>
<?php if ($loggedin): ?>
<?php echo 'Hi ' . $user->first_name; ?>
<a href="<?=base_url();?>home/logout">Logout</a>

<?php else: ?>
    <p>Please log in</p>
    <a href="<?=base_url();?>home/login">Login</a>
     <a href="<?=base_url();?>home/register">Register</a> 
<?php endif; ?>
