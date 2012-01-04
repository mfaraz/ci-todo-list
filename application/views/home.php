<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://crep.tk/edit.js"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    	function addTask() {
	        var add = $("#add").val();
			$.ajax({
				type: "POST",
				dataType: "JSON",
				url: "http://crep.tk/Misc-2/Ci-TodoList/index.php/home/jsonAddTask",
				data: {title: add},
	            json: {title_posted: true},
	            success: function(data){
		            if(data.title_posted == true) { // true means data was successfully posted.
		            	var input = $("#add").val();
		                $('#lists').editable();
						$('#lists').prepend('<input name="completed" type="checkbox" />'+input+'<br>').effect("highlight", {}, 3000);
						$("#add").val('');
		            } else if(data.title_posted == false) { // false means data failed to post.
		                $("#success").append('Failure').fadeIn(400);
		            }
				}
			});
		}
		function deleteTask() {
			$.ajax({
				type: "POST",
				dataType: "JSON",
				url: "http://crep.tk/Misc-2/Ci-TodoList/index.php/home/jsonDelTask",
				data: {title: add},
	            json: {title_posted: true},
	            success: function(data){
		            if(data.title_posted == true) { // true means data was successfully posted.
		            	var input = $("#add").val();
		                $('#lists').editable();
						$('#lists').prepend('<input name="completed" type="checkbox" />'+input+'<br>').effect("highlight", {}, 3000);
						$("#add").val('');
		            } else if(data.title_posted == false) { // false means data failed to post.
		                $("#success").append('Failure').fadeIn(400);
		            }
				}
			});
		}
	$('#add').bind('keypress', function(e) {
		if(e.keyCode == 13) {
			addTask();
		}
	});
	$("#delete").click(function() {
		deleteTask();
	});
});
</script>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Todo List</title>
<style type="text/css">
.auto-style1 {
	background-color: #FFFFFF;
	border-bottom-right-radius: 4px;
	border-bottom-left-radius: 4px;
}
.auto-style1 {
	text-align: center;
	border: 4px solid #D8D8D8;
	background-color: #FFFFFF;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}
.lists {
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	font-size: small;
	text-align: left;
	color: gray;
}
.header {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: xx-large;
	font-style: italic;
}
.style2 {
	font-family: "Adobe Fan Heiti Std B";
	font-size: xx-large;
	border-bottom: 1px dashed #E7E7E7;
}
.large {  
	width: 7em;
	height: 7em;
}
.auto-style2 {
	font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
	font-size: small;
	color: gray;
	letter-spacing: normal;
	text-align: center;
}
.auto-style3 {
	padding: 5px;
	margin: 2px;
	border: 1px solid #E7E7E7;
	font-family: "Adobe Fan Heiti Std B";
	font-size: large;
	outline: none;
}
.auto-style4 {
	text-align: center;
	border-right: 1px dashed #E7E7E7;
	padding: 1px 4px;
}
.auto-style5 {
	text-align: left;
}
</style>
</head>
<body style="background-color: #E7E7E7">
<table align="center" style="width: 579px; position: relative; top: -15px;" cellspacing="0" cellpadding="0">
	<tr>
		<td class="auto-style1">
		<table cellpadding="2" style="width: 597px; height: 275px">
			<!-- MSTableType="layout" -->
			<tr>
				<td valign="top" class="style2" colspan="3" style="height: 46px">Todo List 
				App Developed in Ci</td>
			</tr>
			<tr>
				<td valign="top" colspan="2" class="auto-style4" style="height: 31px">
					<input autofocus id="add" placeholder="Add an item here!" autocomplete="off" class="auto-style3" name="Text1" style="width: 344px" type="text" />
				</td>
				<td valign="top" style="height: 31px">
				<div class="auto-style2" style="padding-bottom: 5px; font-variant: normal; orphans: 2; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">
					Start by adding an item to your todo list using the textbox 
					to the left.</div>
				</td>
			</tr>
			<tr>
				<td valign="top"><div id="checkboxes"></div></td>
				<td valign="top" colspan="2" style="height: 173px" class="auto-style5">
					<span id="lists" class="lists"><input name="completed" type="checkbox" />nhtyh<br><input name="completed" type="checkbox" />uy6hy6<br><input name="completed" type="checkbox" />grg<br><input name="completed" type="checkbox" />hrtht<br><input name="completed" type="checkbox" />fdf<br><input name="completed" type="checkbox" />trg<br><input name="completed" type="checkbox" />gtg5<br><input name="completed" type="checkbox" />ghtggt<br><input name="completed" type="checkbox" />fegvf<br><input name="completed" type="checkbox" />tgt<br><input name="completed" type="checkbox" />fgrg<br><input name="completed" type="checkbox" />gergt<br><input name="completed" type="checkbox" />btrgr<br>					</span>
				</td>
			</tr>
			<tr>
				<td style="width: 59px"></td>
				<td style="width: 289px"></td>
				<td style="height: 1px; width: 212px"></td>
			</tr>
		</table>
		<br>
			<br>
		<br />
		<br />
		</td>
	</tr>
</table>
</body>
</html>
