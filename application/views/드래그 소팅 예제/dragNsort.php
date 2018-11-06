<!DOCTYPE html>

<html lang="ko"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="robots" content="noindex">
<title>드래그 앤 소팅 예제</title>

<style type="text/css">body{fontL62.5% Verdana,Arial,sans-serif}</style>
<link href="js/jquery-ui.css" rel="stylesheet" type="text/css">
<!--
<script type="text/javascript" async="" src=".
-->
<script src="js/jquery-ui.min.js"></script>

<style type="text/css">
.ui-draggable { margin: 0.5em; border: 1px solid silver; padding: 0.3em; width: 200px; height: 15px; }
.ui-draggable-dragging { border: 1px solid gray; padding: 0.3em; background: #eee; }
.dynamic { background: lightYellow; width: 100px; height: 130px; }
	.list{padding: 15px; margin: 10px;border:2px solid black;}
	.block{padding: 10px; display:block; border: 1px solid gray; cursor: move}
</style>

</head>

<body>
<div id="init">
	<div id="new" class="block ui-draggable">Drag me</div>
	<div id="new" class="block ui-draggable">Drag me</div>
	<div id="new" class="block ui-draggable">Drag me</div>
</div>

<div class="list ui-sortable">
	<div class="block">Sort me</div>
	<div class="block">Sort me</div>
</div>

<script>
$("#init .block" ).draggable({
	helper: "clone",
	connectToSortable: ".list"
});

$(".list").sortable({
	connectWith: ".list",
	receive: function(event,ui) {
		$(ui.helper).attr("id","new-id");
		//console.log(ui);
	}
});