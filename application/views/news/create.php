<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<table>
<tr>
<td><label for="title">Название</label></td>
<td><input type="input" name="title" /></td>
</tr>
<tr>
<td><label for="text">Текст</label></td>
<td><textarea name="text"></textarea></td>
</tr>
</table>
<input type="submit" name="submit" value="Сохранить" />

</form>