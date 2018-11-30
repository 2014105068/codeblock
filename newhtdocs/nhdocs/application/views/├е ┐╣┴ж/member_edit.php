<br>
<div class = "alert mycolor1" role="alert">사용자</div>

<form name="form1" method="post" action="">

<table class="table table-sm table-bordered mymargin5">
	<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle">번호</td>
		<td width="80%" align="left"> <?=$row->no;?></td>
	</tr>

	<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font>이름</td>
		<td width="80%" align="left">
			<div class="form-inline">
				<input type="text" name="name" value="<?=$row->name; ?>" class="form-control form-control-sm">
				<font color="red"> <? if(form_error("name")==true) echo form_error("name"); ?> </font>
			</div>
		</td>
	</tr>
	
	<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font>아이디</td>
		<td width="80%" align="left">
			<div class="form-inline">
				<input type="text" name="uid" value="<?=$row->uid; ?>" class="form-control form-control-sm">
				<font color="red"> <? if(form_error("uid")==true) echo form_error("uid");  ?> </font>
			</div>
		</td>
	</tr>
	
	<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle"><font color="red">*</font>암호</td>
		<td width="80%" align="left">
			<div class="form-inline">
				<input type="text" name="pwd" value="<?=$row->pwd; ?>" class="form-control form-control-sm">
				<font color="red"> <? if(form_error("pwd")==true) echo form_error("pwd"); ?> </font>
			</div>
		</td>
	</tr>
	
	<?
		$tel1 = trim(substr($row->tel,0,3));
		$tel2 = trim(substr($row->tel,3,4));
		$tel3 = trim(substr($row->tel,7,4));
	?>
	
	<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle">전화</td>
		<td width="80%" align="left">
			<div class="form-inline">
				<input type="text" name="tel1" size="3" maxlength="3" value="<?=$tel1;?>"
				class="form-control form-control-sm">&nbsp;-&nbsp;
				<input type="text" name="tel2" size="4" maxlength="4" value="<?=$tel2;?>"
				class="form-control form-control-sm">&nbsp;-&nbsp;
				<input type="text" name="tel3" size="4" maxlength="4" value="<?=$tel3;?>"
				class="form-control form-control-sm">
			</div>
		</td>
	</tr>
	
	<tr>
		<td width="20%" class="mycolor2" style="vertical-align:middle">등급</td>
		<td width="80%" align="left">
			<div class="form-inline">
		<? if($row->rank == 0){ ?>
				<input type="radio" name="rank" value="0" checked> 직원 &nbsp;&nbsp;
				<input type="radio" name="rank" value="1"> 관리자
		<? } else { ?>
				<input type="radio" name="rank" value="0"> 직원 &nbsp;&nbsp;
				<input type="radio" name="rank" value="1" checked> 관리자
		<? } ?>
			</div>
		</td>
	</tr>
</table>

<div align="center">
	<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
	<input type="button" value="이전화면" class="btn btn-sm mycolor1" onclick="history.back();">
</div>

</form>