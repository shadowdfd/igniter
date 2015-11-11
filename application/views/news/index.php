<h2><?php echo $title; ?></h2>
<a class='button' href='news/create'>Create news</a><br>
<?php if(access('news')):?>
	<div class="marg">[ДОСТУП РАЗРЕШЕН]</div>
<?php endif; ?>
<table>
<tr>
<td>ID</td>
<td>Название</td>
<td>Содержание</td>
</tr>
<?php foreach ($news as $news_item): ?>
		<tr>
		<td><?php echo $news_item['id']; ?></td>
        <td><a href="<?php echo site_url('news/'.$news_item['id']); ?>"><?php echo $news_item['title']; ?></a></td>
        <td><?php echo $news_item['text']; ?></td>
        </tr>
<?php endforeach; ?>
</table>