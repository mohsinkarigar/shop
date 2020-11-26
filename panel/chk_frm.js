function showp(ptb)
{
	document.getElementById(ptb).style.display = "block";
}
function hidep(ptb)
{
	document.getElementById(ptb).style.display = "none";
}
function focus(ptb)
{
	document.getElementById(ptb).focus();
}
function checkempty(obj,msg)
{
 if(obj.value=="")
 {
  alert(msg);
  obj.focus();
  return false;
 }
}
function checkempty2(obj,obj2,msg)
{
 if(obj.value!=obj2.value)
 {
  alert(msg);
  obj.focus();
  return false;
 }
}
function checkempty3(obj,msg)
{
 if(obj.value=="")
 {
  alert(msg);
  obj.focus();
  return false;
 }
}
function test(obj,msg) {
  var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
  if (regex.test(obj.value))
  {
	return true;
  }
  else{
	alert(msg);
	obj.focus();
	return false;
  }
}
function chk_form()
{
if (checkempty(document.frm_new.pname,":.. Please enter Article Heading.:")==false) return false;
return true;
}
function chk_sendfrnd()
{
	if (checkempty(document.frm_send.uname,":.. Please enter your name.:")==false) return false;
	if (test(document.frm_send.umail,":.. Please enter your Email Address.:")==false) return false;
	if (checkempty(document.frm_send.fname,":.. Please enter your friend's name.:")==false) return false;
	if (test(document.frm_send.fmail,":.. Please enter your Friend's Email Address.:")==false) return false;
}
function chk_newsletter()
{
	if (checkempty(document.frm_letter.pname,":.. Please enter your name.:")==false) return false;
	if (test(document.frm_letter.email,":.. Please enter your Valid Email Address.:")==false) return false;
	if (checkempty(document.frm_letter.group,":.. Please select a group.:")==false) return false;
}
function checklogin()
{
//if (test(document.frm_chk_login.email,":.. Please enter your Login Email Address.:")==false) return false;
if (checkempty(document.frm_chk_login.loginid,":.. Please enter Login ID.:")==false) return false;
if (checkempty(document.frm_chk_login.pass,":.. Please enter Password.:")==false) return false;
return true;
}

function chk_frm_contact()
{
if (checkempty(document.frm_inq.fname,":.. Please enter your Name.:")==false) return false;
if (test(document.frm_inq.email,":.. Please enter your Valid Email Address.:")==false) return false;
return true;
}
function chk_newsletter()
{
	if (test(document.frm_newsletter.signup,":.. Please enter your Email Address.:")==false) return false;
}
function chk_request2()
{
	if (test(document.customizations.name,":.. Please enter your Name.:")==false) return false;
	if (test(document.customizations.lastname,":.. Please enter your Last Name.:")==false) return false;
	if (test(document.customizations.email,":.. Please enter your Valid Email Address.:")==false) return false;
	if (test(document.customizations.message,":.. Please enter your Message.:")==false) return false;
}