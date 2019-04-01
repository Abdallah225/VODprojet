function ajaxFunction(disp_div)
{
var httpxml;
try
{
// Firefox, Opera 8.0+, Safari
httpxml=new XMLHttpRequest();
}
catch (e)
{
// Internet Explorer
try
{
httpxml=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)
{
try
{
httpxml=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
alert("Your browser does not support AJAX!");
return false;
}
}
}

function stateChanged()
{
if(httpxml.readyState==4)
{

document.getElementById(disp_div).innerHTML=httpxml.responseText;

//myForm.reset();

}
}

function getFormData(myForm) {

var myParameters = new Array();
/////////////////
val="disp_div="+disp_div;
myParameters.push(val);

//// Text field data collection //
var val=myForm.tel.value;
val = "tel="+val;
myParameters.push(val);
// End of text field data collection //



var url="process.php";
var myForm = document.forms[0];
var parameters=getFormData(myForm);
httpxml.onreadystatechange=stateChanged;
httpxml.open("POST", url, true)
httpxml.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
httpxml.send(parameters)

}
