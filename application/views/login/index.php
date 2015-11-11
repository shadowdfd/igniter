<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('login'); ?>
<table>
<tr>
<td><label for="login">Login:</label></td>
<td><input type="input" name="login" /><?php echo form_error( 'login' ); ?></td>
</tr>
<tr>
<td><label for="password">Pass:</label></td>
<td><input type="password" name="password" /></td>
</tr>
</table>
<input type="submit" name="submit" value="Enter" />

</form>