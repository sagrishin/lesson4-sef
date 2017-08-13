<?php

	function connectDB() {
		$connect = mysql_connect('localhost', 'root', '');
		mysql_select_db('lessons', $connect);
		mysql_set_charset('UTF8', $connect);
		return $connect;
	}

	function selectRow($table, $column, $value) {
		$connect = connectDB();
		$result = mysql_query("SELECT * FROM ".$table." WHERE `".$column."` = '".$value."'", $connect);
		mysql_close($connect);
		return mysql_fetch_assoc($result);
	}

	function getPageData() {
		$link = strTok($_SERVER["REQUEST_URI"], '?');
		if (($data = selectRow('uri', 'uri', $link)) !== false) return selectRow('articles', 'link', $link);
		else return array('title' => '404. Not found');
	}

?>