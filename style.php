<?php
include('config.php')
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	table{margin:auto;border-collapse:collapse;}
	thead tr{line-height:40px;background:green;color:#fff;}
	tr{line-height:30px;}
	td{border:1px solid #000;text-align:center;width:80pc;}
</style>
<script src="jquery-1.8.3.js"></script>
<script>
	$(function(){
		$.ajax({
			type:"GET",
			url:"date.php",
			data:"html",
			success:function(data){
				var obj=eval(data);
				var str='';
				for(var i=0;i<obj.length;i++){
					str+='<tr>';
					str+='<td>'+obj[i].hName+'</td>';
					str+='<td>'+obj[i].hTime+'</td>';
					str+='<td>'+obj[i].hPrice+'</td>';
					str+='</tr>';
				}
				$('tbody').html(str);
			}
		})
	})
</script>
<body>
	<table>
		<thead>
			<tr>
				<td>楼盘名称</td>
				<td>开盘时间</td>
				<td>价格（元/m2）</td>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
</body>
</html>