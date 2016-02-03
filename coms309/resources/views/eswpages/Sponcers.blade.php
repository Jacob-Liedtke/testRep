@extends('eswTemplate')
@section('title')
<title>Contact Us</title>
@section('header')
@section('body')
<h1><span style="font-family: Trebuchet MS; font-style: italic; color:white;"><center>Settings</center></span></h1>
<br>
<span class="esw_homepageLargefont" style="color:white; ">
<table width="100%" style="box-shadow: 0px 0px 5px #888; padding:5px;">
<tr><td style="vertical-align:top; padding:4px; width:120px;">

<div style="width:120px;">
<a id="userTab" class="esw_homepageLargefont" style="cursor:pointer;"><b>User Settings</b></a>
<a id="saveTab" class="esw_homepageLargefont" style="cursor:pointer;"><b>Save Settings</b></a>
<div>

</td><td style="vertical-align:top;">
<span id="userSettings" style="width:100%;">
<form id="settings" style="color:white;">
Setting one<br>
<li><input type="radio" name="setting"> option one</li><br>
<li><input type="radio" name="setting"> option two</li><br>
<li><input type="radio" name="setting"> option three</li><br>
<br>Auto Correct<br>
<li><input type="checkbox"> enable option</li><br>

<br>Background Theme<br>
<select>
<option value="option1">Black</option>
<option value="option2">Black again</option>
<option value="option3">Only Black</option>
</select><br>

<br><a id="advShow" style="color:red; display:block; cursor:pointer;"><u>Advance options</u></a>
<span style=" display:none; color:white;" id="advSet">
<b>Advance Settings</b><br>
<br>Advance setting one<br>
<li><input type="radio" name="advsetting"> advance option one</li><br>
<li><input type="radio" name="advsetting"> advance option two</li><br>
<li><input type="radio" name="advsetting"> advance option three</li><br>
<br>advance settings2<br>
<li><input type="checkbox"> enable option</li><br>

<br><a id="advHide" style="color:red; display:block; cursor:pointer;"><u>Advance options hide</u></a>
</span>

</span>

<br>
<input class="btntheme2" type="submit" value="submit">
</form>
<!--- end of user settings --->
</span><!---fix span idk what its too (count adds up on text editor just not on chrome.)--->
<!-- beginning of save settings -->
<span id="saveSettings" style="display:none;">
<form id="settings" style="color:white;">
Save Setting one<br>
<li><input type="radio" name="setting"> option one</li><br>
<li><input type="radio" name="setting"> option two</li><br>
<li><input type="radio" name="setting"> option three</li><br>
<br>Save settings two<br>
<li><input type="checkbox"> enable option</li><br>

<br>drop-down settings<br>
<select>
<option value="option1">first option</option>
<option value="option2">second option</option>
<option value="option3">third option</option>
</select><br>

<br><a id="advSavShow" style="color:red; display:block; cursor:pointer;"><u>Advance Save Option</u></a>
<span style=" display:none; color:white;" id="advSavSet">

<b>Advance Save Settings</b><br>
<br>Advance Save setting one<br>
<li><input type="radio" name="advsetting"> advance option one</li><br>
<li><input type="radio" name="advsetting"> advance option two</li><br>
<li><input type="radio" name="advsetting"> advance option three</li><br>
<br>Advance Save settings two<br>
<li><input type="checkbox"> enable option</li><br>

<br><a id="advSavHide" style="color:red; display:block; cursor:pointer;"><u>Advance Save options hide</u></a>
</span>

</span>

<br>
<input class="btntheme1" type="submit" value="submit">
</form>
</span>


</td></tr>
</table>
<br>	

</span>


<!-- my hide and shows for span tags (i.e. tabs) -->
<script>
document.getElementById("advShow").onclick = function() {show()};
document.getElementById("advHide").onclick = function() {hide()};
document.getElementById("advSavShow").onclick = function() {savShow()};
document.getElementById("advSavHide").onclick = function() {savHide()};
document.getElementById("userTab").onclick = function() {userSetting()};
document.getElementById("saveTab").onclick = function() {saveSetting()};

function show(){
	var myspan = d3.selectAll("#advSet");
	var n = myspan.style("display","block");
	var expand = d3.selectAll("#advShow");
	var n = expand.style("display","none");
}

function savShow(){
	var myspan = d3.selectAll("#advSavSet");
	var n = myspan.style("display","block");
	var expand = d3.selectAll("#advSavShow");
	var n = expand.style("display","none");
}

function hide(){
	var myspan = d3.selectAll("#advSet");
	var n = myspan.style("display","none");
	var expand = d3.selectAll("#advShow");
	var n = expand.style("display","block");
}

function savHide(){
	var myspan = d3.selectAll("#advSavSet");
	var n = myspan.style("display","none");
	var expand = d3.selectAll("#advSavShow");
	var n = expand.style("display","block");
}

function userSetting(){
	var myspan = d3.selectAll("#saveSettings");
	var n = myspan.style("display","none");
	var expand = d3.selectAll("#userSettings");
	var n = expand.style("display","block");
}

function saveSetting(){
	var myspan = d3.selectAll("#userSettings");
	var n = myspan.style("display","none");
	var expand = d3.selectAll("#saveSettings");
	var n = expand.style("display","block");
}
</script>

@stop
@section('updateDate')
Updated 12/23/15
@stop	