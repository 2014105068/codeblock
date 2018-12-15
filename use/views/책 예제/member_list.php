<!-- 스크립트 -->
<script>
	function find_text()
	{
		if(!form1.text1.value)
			form1.action="/member/lists";
		else
			form1.action="/member/lists/text1/" + form1.text1.value;
		form1.submit();
	}
</script>

<html lang="kr">
 
  <body>
	<div class = "container">
		
		<br>
		<div class = "alert mycolor1" role = "alert">사용자</div>

		<!-- 검색 및 추가버튼 만들기 -->
		<form name = "form1" action= "" method = "post">
		<div class = "row">
			<div class = "col-3" align = "left">
				<div class = "input-group input-group-sm">
					<div class = "input-group-prepend">
						<span class = "input-group-text">이름</span>
						<input type = "text" name = "text1" value = "<?=$text1;?>" class "form-control"
							onKeydown = "if (event.keyCode == 13) { find_text(); }" >
						<span class = "input-group-append">
							<button class = "btn mycolor1" type = "button" onClick = "find_text();">검색</button>
						</span>
					</div>
				</div>
			</div>
			
	<?
		$tmp=$text1 ? "/text1/$text1" : "";
	?>
			
			<div class = "col-9" align = "right">
				<a href = "/member/add<?=$tmp;?>" class = "btn btn-sm mycolor1">추가</a>
			</div>
		</div>
		</form>
		
		<!-- 테이블 만들기 -->
		<table class="table table-sm table-bordered mymargin5">
			<tr class = "mycolor2">
				<td width = "10%">번호</td>
				<td width = "20%">이름</td>
				<td width = "20%">전화</td>
				<td width = "20%">아이디</td>
				<td width = "20%">암호</td>
				<td width = "10%">등급</td>
			</tr>
			
		<?
			foreach ($list as $row)
			{
				$no=$row->no;
				$tel1 = trim(substr($row->tel,0,3));
				$tel2 = trim(substr($row->tel,3,4));
				$tel3 = trim(substr($row->tel,7,4));
				$tel = $tel1 . "-" . $tel2 . "-" . $tel3;
				$rank = $row->rank == 0 ? '직원' : '관리자';
		?>
			<tr>
				<td> <?=$no ?> </td>
				<td> <a href="/member/view/no/<?=$no?><?=$tmp?>"><?=$row->name; ?></a></td>
				<td> <?=$tel ?> </td>
				<td> <?=$row->uid ?> </td>
				<td> <?=$row->pwd ?> </td>
				<td> <?=$rank ?> </td>
			</tr>
		<?
			}
		?>
			
			<!--
			<tr>
				<td>1</td>
				<td><a href = "#"> 관리자</a></td>
				<td>admin</td>
				<td>1234</td>
				<td>010-1111-1111</td>
				<td>관리자</td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href = "#">홍길동</a></td>
				<td>id1</td>
				<td>1234</td>
				<td>010-2222-2222</td>
				<td>직원</td>
			</tr>
			-->
		</table>
		
		<!-- 페이지번호 만들기 -->
<div align = "center">
	<nav aria-label = "Page navigation example">
		<ul class = "pagination pagination-sm justify-content-center mymargin5">
			<li class = "page-item">
				<a class = "page-link" href = "#" aria-label = "Previous">
					<span aria-hidden = "true">&laquo;</span>
					<span class = "sr-only">Previous</span>
				</a>
			</li>
			<li class = "page-item"><a class = "page-link mycolor1" href = "#">1</a></li>
			<li class = "page-item"><a class = "page-link active" href = "#">2</a></li>
			<li class = "page-item"><a class = "page-link" href = "#">3</a></li>
			<li class = "page-item"><a class = "page-link" href = "#">4</a></li>
			<li class = "page-item"><a class = "page-link" href = "#">5</a></li>
			<li class = "page-item">
				<a class = "page-link" href = "#" aria-label = "Next">
					<span aria-hidden = "true">&raquo;</span>
					<span class = "sr-only">Next</span>
				</a>
			</li>
		</ul>
	</nav>
</div>
</div>
  </body>
</html>