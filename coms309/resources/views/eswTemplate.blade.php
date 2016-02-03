<!doctype html>
<html lang="en">
<head>
<!-- photo API used is prettyPhoto @http://www.no-margin-for-errors.com/ GPLV2 license http://www.gnu.org/licenses/gpl-2.0.html-->
<!-- repath all header files (located in public folder) note esw.jliedtke.com is jliedtke.com/(path to laravel)/public-->
<meta carset="UTF-8">
<!-- tipical esw header stuff -->
<link href="http://coms309.jliedtke.com/builtTheme.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://coms309.jliedtke.com/Images/CyText.ico" /><!-- esw icon -->
<link href="http://coms309.jliedtke.com/builtTheme.css" rel="stylesheet" type="text/css" />

<!-- prettyPhoto plugin-->
<script src="http://jliedtke.com/coms309/public/prettyPhoto/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="http://coms309.jliedtke.com/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="http://coms309.jliedtke.com/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<div class="head">@yield('title')</div>
<div class="title">@yield('header')</div>
<!-- d3.js header (I use d3 for dom editing occasionally) -->
<script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 15px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}


.btn {
	display:block;
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #b82c2c);
  background-image: -moz-linear-gradient(top, #000000, #b82c2c);
  background-image: -ms-linear-gradient(top, #000000, #b82c2c);
  background-image: -o-linear-gradient(top, #000000, #b82c2c);
  background-image: linear-gradient(to bottom, #000000, #b82c2c);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  padding: 10px 20px 10px 10px;
  text-decoration: none;
}
.btn:hover {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #ff0000);
  background-image: -moz-linear-gradient(top, #000000, #ff0000);
  background-image: -ms-linear-gradient(top, #000000, #ff0000);
  background-image: -o-linear-gradient(top, #000000, #ff0000);
  background-image: linear-gradient(to bottom, #000000, #ff0000);
  text-decoration: none;
  padding: 10px 20px 10px 10px;
}
</style>
</head>
<body style="background-color: black;">

<!-- the body is done completely inside table, but ofcorse this does not need to be managed in a standered template--  just insert at body section-->
<table width="100%" height="100%" border="0" cellpadding="2" cellspacing="2" style="min-height: 50px; vertical-align: top; ">
<!-- the header -->
<thead>
<th width="100%" colspan="2" align="left"><tr style="height:50px;">
<td style="height:40px; width:100%;" colspan="2">
<!--standered esw logo -->
<div style="text-align: center;">
	  <ul width="75px">
	  @if (count($data))
		@foreach($data as $collected)
			@if (strcmp(Request::url(),("http://esw.jliedtke.com/" . $collected['page']))==0)
					<li ><a href={{$collected['page']}} id="n-nav" style="color:blue;" title={{$collected['page']}} > {{$collected['name']}}  </a></li>
			@else
					<li ><a href={{$collected['page']}} id="n-nav" style="font-size: 14px;" title={{$collected['page']}} > {{$collected['name']}}  </a></li>
					
			@endif
		@endforeach
	  @endif
	  </ul>
</td></tr><tr><td width="100%" colspan="2" class="titlebackground">
<p style="white-space: pre; color:white; font-family:Courier; font-size:5; padding: 0px 5px 10px 10px;"><b>
                       /$$                           /$$    
                      | $$                          | $$    
  /$$$$$$$ /$$   /$$ /$$$$$$    /$$$$$$  /$$   /$$ /$$$$$$  
 /$$_____/| $$  | $$|_  $$_/   /$$__  $$|  $$ /$$/|_  $$_/  
| $$      | $$  | $$  | $$    | $$$$$$$$ \  $$$$/   | $$    
| $$      | $$  | $$  | $$ /$$| $$_____/  >$$  $$   | $$ /$$
|  $$$$$$$|  $$$$$$$  |  $$$$/|  $$$$$$$ /$$/\  $$  |  $$$$/
 \_______/ \____  $$   \___/   \_______/|__/  \__/   \___/  
           /$$  | $$                                        
          |  $$$$$$/                                        
           \______/                                         
</b></p>
<!--<img src="cytext.jpg" alt="logo" style="width: 482px; height: 106px; left: 0px;">-->
<!-- standered seperating line -->
</td></tr></th>
</thead>
<!-- the body -->
<tbody>
    <tr>
	
	<!-- you have 80% of screen width in this template to work with!!!! good luck --->
    <td style="text-align: left; width: 100%; vertical-align: top;  padding: 20px;"
	  <div class="container">@yield('body')</div><!-- this is the body -->
     </td>
	</tr>
</tbody>
<!-- the footer -->
<tfoot>
	<tr><td>
	<br>
	<font face="Trebuchet MS" size="1">
	<center>

	<p><div class="container">
	<!--facebook-->
	<div data-href="https://www.facebook.com/ESWatISU" data-show-faces="true" data-share="true" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" fb-xfbml-state="rendered">
	<iframe id="f2780f3c54" name="f2f451e938" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="https://www.facebook.com/plugins/like.php?api_key=113869198637480&amp;channel_url=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D29%23cb%3Df34d5ed988%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff23705b71c%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FESWatISU&amp;layout=standard&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;width=300" style="border: none; overflow: hidden; height: 35px; width:200px;"></iframe></div>
	<!--facebook-->
	@yield('updateDate')
	</div></p><!-- replace domain name below-->
	@if (count($data))
		@foreach($data as $collected)
				@if (strcmp(Request::url(),("http://esw.jliedtke.com/" . $collected['page']))==0)
					{{$collected['name']}}
				@else
					<a href={{$collected['page']}}>{{$collected['name']}}</a>
				@endif
		@endforeach
	@endif
	</p>
	</center>
	</font>
	</td></tr>
</tfoot>
</table>

<!-- default api photo settings -->
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal', allow_resize: true, theme:'light_square', autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:5000,allow_resize: true, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});
				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
				
			})
</script>
<!-- d3 things... -->
<script>
/* the nav bar effects THIS IS DOMAIN SPECIFIC*/
d3.selectAll("#n-nav").on('mouseover',function(d){
	/* this portion is changes on hover (excluding current page) */
	var n = this.title; // get title element from <a>
	var s1='{{Request::url()}}';//laravel framework for get url
	n = "http://esw.jliedtke.com/".concat(n);// smack the two strings together (replace with your domain)
	if (s1.localeCompare(n)){ //compare other two strings to see if on same page as link
		d3.select(this).transition().style("color","yellow").style("font-size","14px").duration(450);
	}
}).on('mouseout', function(d){
	/* revert back to normal after mouseover */
	var n = this.title;
	var s1='{{Request::url()}}';
	n = "http://esw.jliedtke.com/".concat(n);//replace with your domain
	if (s1.localeCompare(n)){
		d3.select(this).transition().style("color",null).style("font-size","14px").duration(150);
	}
});
</script>
</body>
</html>