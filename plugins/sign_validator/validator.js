function checkPass()
{
    //Store the password field objects into variables ...
    var pwd = document.getElementById('pwd');
    var pwc = document.getElementById('pwc');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pwd.value == pwc.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pwc.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "비밀번호가 일치합니다."
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pwc.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "비밀번호가 일치하지 않습니다."
    }
} 
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"￡$%^&\,*+_={};:'@#~,.?\/<>?|`￢\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
}
// 중복된 이메일 주소가 없는지 확인하기 <=> DB연동
/*
function email_check(email)
{
	var check = '<?=$ec?>';
	var message = document.getElementById('email_confirm');
	
	var goodColor = "#66cc66";
    var badColor = "#ff6666";
	
	if(check == 1)
	{
		message.style.color = badColor;
		message.innerHTML = "이미 사용중인 이메일주소 입니다.";
	}
	else if(check == 0)
	{
		message.style.color = goodColor;
		message.innerHTML = "사용 가능한 이메일주소 입니다.";
	}
}
*/
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML	= "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}
// validate date of birth
function dob_validate(dob)
{
var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='valid'>Thanks, you have entered a valid DOB!</span>";	
    }
}
// validate address
function add_validate(address)
{
var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;
  
    if(regAdd.test(address) == false)
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='warning'>Address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='valid'>Thanks, Address looks valid!</span>";	
    }
}