<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 		Таблица прав доступа
 * 
 *		Возможные значения:
 *
 *		view		-	просмотр
 *		edit		-	редактирование
 *		add			-	добавление
 *		del			-	удаление
 *		opt			-	опционально (возможно при условиях)
 *		view_self,
 *		edit_self,
 *		add_self,
 *		del_self	-	разрешено только со своим
 *		dissalow	-	полный запрет
 *
 *		Эти значения зависят от логики приложения.
 *
 *		Формат конфига:
 *		$config['uaccess'][<имя класса>][<имя модуля>] = array(<перечень разрешений>);
 * */

$config['uaccess']['admin']['news'] = array('view');
$config['uaccess']['manager']['news'] = array('');
?>