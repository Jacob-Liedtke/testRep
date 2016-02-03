@extends('eswTemplate')
@section('title')
<title>Minute Report</title>
@section('header')
@section('body')

<h1><span style="font-family: Trebuchet MS; font-style: italic;"><center>Minute Report</center></span></h1>
<br><br>

<span class="esw_homepageLargefont">


<div id="main">
		<h2 class="esw_h2"><i>2014 Reports</i></h2>
			<ul1 class="gallery clearfix">
				<li1><a href="Minute-Reports/2014/March%20General%20Meeting%20Minutes.pdf?iframe=true&width=100%&height=100%" rel="prettyPhoto[gallery2]"><img src="Minute-Reports/2014/March%20General%20Meeting%20Minutes.jpg" width="60" height="60" alt="Site" class="pp_MyTheme" /></a></li1>
				<br>
			<li1><a href="Minute-Reports/2014/April%2015,%202014.pdf?iframe=true&width=100%&height=100%" rel="prettyPhoto[gallery2]"><img src="Minute-Reports/2014/April%2015,%202014.jpg" width="60" height="60" alt="Site" class="pp_MyTheme" /></a></li1>
			</ul1>
</div>

</span>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("area[rel^='prettyPhoto']").prettyPhoto();
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal', allow_resize: true,theme:'dark_square',slideshow:5000, autoplay_slideshow: false, opacity: 0.70,theme: 'pp_default',horizontal_padding: 20});
});
</script>
@stop
@section('updateDate')
Updated 12/23/15
@stop	