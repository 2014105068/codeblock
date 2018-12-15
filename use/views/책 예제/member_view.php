<?
	$no=$row->no;
	$tel1 = trim(substr($row->tel,0,3));
	$tel2 = trim(substr($row->tel,3,4));
	$tel3 = trim(substr($row->tel,7,4));
	$tel=$tel1 . "-" . $tel2 . "-" . $tel3;
	$rank=$row->rank==0 ? '직원' : ' 관리자';
	
	$tmp = $text1 ? "/no/$no/text1/$text1" : "/no/$no";
?>
		<br>
		<div class = "alert mycolor1" role = "alert">사용자</div>

<form name = "form1" method = "post" action = "">

<table class = "table table-sm table-bordered mymargin5">
	<tr>
		<td width = "20%" class = "mycolor2" style = "vertical-align:middle">번호</td>
		<td width = "80%" align = "left">
			<div class="form-inline"><?=$row->no;?></div>
		</td>
	</tr>
	<tr>
		<td width = "20%" class = "mycolor2" style = "vertical-align:middle"><font color = "red">*</font>이름</td>
		<td width = "80%" align = "left">
			<!--
			<div class = "form-inline">
				<input type = "text" name = "name" size = "20" maxlength = "20" value = "관리자" class = "form-control form-control-sm">
			</div>
			-->
			<div class="form-inline"><?=$row->name;?></div>
		</td>
	</tr>
	<tr>
		<td width = "20%" class = "mycolor2" style = "vertical-align:middle"><font color = "red">*</font> 아이디</td>
		<td width = "80%" align = "left">
			<!--
			<div class = "form-inline">
				<input type = "text" name = "uid" size = "20" maxlength = "20" value = "admin" class = "form-control form-control-sm">
			</div>
			-->
			<div class="form-inline"><?=$row->uid;?></div>
		</td>
	</td>
	<tr>
		<td width = "20%" class = "mycolor2" style = "vertical-align:middle"><font color = "red">*</font> 암호</td>
		<td width = "80%" align = "left">
			<!--
			<div class = "form-inline">
				<input type = "text" name = "pwd" size = "20" maxlength = "20" value = "1234" class = "form-control form-control-sm">
			</div>
			-->
			<div class="form-inline"><?=$row->pwd;?></div>
		</td>
	</tr>
	<tr>
		<td width = "20%" class = "mycolor2" style = "vertical-align:middle">전화</td>
		<td width = "80%" align = "left">
			<!--
			<div class = "form-inline">
				<input type = "text" name = "tel1" size = "3" maxlength = "3" value = "010" class = "form-control form-control-sm">-
				<input type = "text" name = "tel1" size = "4" maxlength = "4" value = "1111" class = "form-control form-control-sm">-
				<input type = "text" name = "tel1" size = "4" maxlength = "4" value = "1111" class = "form-control form-control-sm">-
			</div>
			-->
			<div class="form-inline"><?=$tel;?></div>
		</td>
	</tr>
	<tr>
		<td width = "20%" class = "mycolor2" style = "vertical-align:middle">등급</td>
		<td width = "80%" align = "left">
			<!--
			<div class = "form-inline">
				<input type = "radio" name = "rank" value = "0"> 직원&nbsp;&nbsp;
				<input type = "radio" name = "rank" value = "1"> 관리자
			</div>
			-->
			<div class="form-inline"><?=$rank;?></div>
		</td>
	</tr>
</table>


</form>

<div align = "center">
	<a href = "/member/edit<?=$tmp;?>" class = "btn btn-sm mycolor1">수정</a>
	<a href = "/member/del<?=$tmp;?>" class = "btn btn-sm mycolor1"
	 onClick = "return confirm('삭제할까요 ?');">삭제</a>&nbsp;
	<input type = "button" value = "이전화면" class = "btn btn-sm mycolor1"
	 onClick = "history.back();">
</div>