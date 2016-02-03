@extends('eswTemplate')
@section('title')
<title>Home</title>
<!-- folows scrum model development managment https://www.scrum.org/ -->
@section('body')
<h1><span style="font-family: Trebuchet MS; font-style: italic; color:white;"><center>CyText</center></span></h1>

<div  width="100%">

<table style="width:100%; height:250px;" id="texttable">
<tr><td style=" vertical-align:top; border-radius:10px;  box-shadow: 0px 0px 5px #888; ">
<div style="padding:10px; width:100px;">
<a href="#hahaha" style="color:white; text-decoration: none;">file 1</a>
<br>
<a href="#nothing" style="color:white; text-decoration: none;">file 2</a>
</div></td>
<td><div style="width:20px;"></div></td>

<td style="border-radius:10px; width:100%; box-shadow: 0px 0px 5px #888; ">
<div id="mytxt" style="width:100%; overflow:hidden;display: block;height:100%; color:yellow;" ></div>
<textarea id="atext" style="resize:none; width:100%; height:250px; display:none;"></textarea>

<script>
window.addEventListener("resize", myfunc);

function myfunc(){	
	var txt = document.getElementById("atext");//d3.selectAll("#atext");
	txt.value+="hello ";
	var mytxt = document.getElementById("mytxt");//d3.selectAll("#atext");
	mytxt.innerHTML =txt.value;
}
d3.selectAll("#mytxt").on('click',function(d){
	/*IF WANTING TO USE JUST HTML AND JAVA SCRIPT LOOK UP CodeMirror -> REF http://marijnhaverbeke.nl/blog/browser-input-reading.html*/
	//parsing can be found at http://www.d3-generator.com/#source
	//language format? http://phrogz.net/fewer-lambdas-in-d3-js and http://phrogz.net/JS/d3-playground/#MultiBars_HTML
	// above is another example of codemirror ->http://codemirror.net/
	var txt = document.getElementById("atext");//d3.selectAll("#atext");
	txt.value+="hello ";
	var mytxt = document.getElementById("mytxt");//d3.selectAll("#atext");
	mytxt.innerHTML =txt.value;
	document.getElementById("atext").focus();
});
</script>
</td>
</tr>
</table>
</div>

@stop	
@section('updateDate')
Updated 1/18/16
@stop