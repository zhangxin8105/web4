<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/web4/css/show.css" />

</head>
<body>
<div id="content">
<div id="a1">
<a href="http://localhost/web4/index.php/code" target=_blank><img src="http://localhost/web4//img/code1.jpg"></a>
</div>
<div id="a2">
<a href="http://localhost/web4/code2.html"  target=_blank><img src="http://localhost/web4//img/code2.jpg"></a>
</div>
<div id="a3">
<a href="http://localhost/code3.html"  target=_blank><img src="http://localhost/web4//img/code3.jpg"></a>
</div>
<div id="a4">
<a href><img src=></a>
</div>
<div id="a5">
<a href><img src=></a>
</div>
<div id="a6">
<a href><img src=></a>
</div>
</div>
<script>
var arr=document.getElementById("content").getElementsByTagName("div");
for(var i=0;i<6;i++)
{
	arr[i].onmouseover=function (){
	     this.style.border="#000";
	
	};
		arr[i].onmouseout=function (){
	     this.style.border="";
	
	};

}
</script>
</body>
</html>
