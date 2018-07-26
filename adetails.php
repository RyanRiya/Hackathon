
<html>
    <head>
        <style>
        #background{
 background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM2ZeayZIr4kD957E6rhWOsRJ3dd-xGe07uNkNPFpHmHairLZcbw);
background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	
	}
 table, td, th {    
    border: 0 solid #ddd;
    text-align: left:
}


table {
      
    border-collapse: collapse;
    width: 50%;
}
th {
    padding: 25px;
}
td{
padding-left:35px;
}
#photo{
  position: absolute;
    top: 8px;
    right: 16px;
}
body {
background:#bf5c71 url('body-bg.jpg');
}
.clearfix:after {
display:block;
clear:both;
}
            /*----- Menu Outline -----*/
.menu-wrap {
width:100%;
box-shadow:0px 1px 3px rgba(0,0,0,0.2);
background_color:grey;
}
.menu {
width:1000px;
margin:0px auto;
float:left;
background:gray;
}
.menu li {
margin:0px;
list-style:none;
font-family:'Ek Mukta';
}
.menu a {
transition:all linear 0.15s;
margin-right:0px;
color:white;
}
.menu li:hover > a, .menu .current-item > a {
text-decoration:none;
color:blue;
}
.menu .arrow {
font-size:11px;
line-height:0%;
}
/*----- Top Level -----*/
.menu > ul > li {
float:left;
display:inline-block;
position:relative;
font-size:19px;
}
.menu > ul > li > a {
padding:10px 40px;
display:inline-block;
text-shadow:0px 1px 0px rgba(0,0,0,0.4);
}
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
background:#2e2728;
}
/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
z-index:1;
opacity:1;
}
.sub-menu {
width:160%;
padding:5px 0px;
position:absolute;
top:100%;
left:0px;
z-index:-1;
opacity:0;
transition:opacity linear 0.15s;
box-shadow:0px 2px 3px rgba(0,0,0,0.2);
background:#2e2728;
}
.sub-menu li {
display:block;
font-size:16px;
}
.sub-menu li a {
padding:10px 30px;
display:block;
}
.sub-menu li a:hover, .sub-menu .current-item a {
background:#3e3436;
}
        </style>
        
    </head>
    <body>
      <header>
<h1> assassassasasassasassasassasassasassasasassasassasas</h1>
<div class="menu-wrap">
<nav class="menu">
<ul class="clearfix">
<li>
<a href="#">Menu1 <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
</ul>
</li>
<li>
<a href="#">Menu <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
</ul>
</li>
<li>
<a href="#">Menu <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
</ul>
</li>
<li>
<a href="#">Menu <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
<li><a href="#">drop</a></li>
</ul>
</li>
</ul>
</nav>
</div>

<table>
  <tr>
    <th>Name:</th>
    <td><input type="text"><td>
  </tr>
  <tr>
    <th>Age:</th>
    <td><input type="text"></td>
	
  </tr>
  <tr>
    <th>D.O.B:</th>
    <td><input type="text"></td>
  </tr>
  <tr>
    <th>Phn.number:</th>
    <td><input type="text"></td>
  </tr>
  <tr>
  <th >Addres:</th>
  <td id="add"><textarea rows="5 "cols="30"></textarea></td>

  </tr>
  <tr>
  <th>Designation:</th>
  <td><textarea rows="2 "cols="30"></textarea></td>
  </tr>
  <tr>
  <th>Salary</th>
  <td><input type="text"></td>
  </tr>

  
</table>

<div id="photo">
<table>
</br>
</br></br></br></br></br></br></br>
	<tr>
	<th>Adhaar_number:</th>
    <td><input type="text"></td>
	</tr>
	<tr>
	<th >photo:</th>
    <td><input type="text" ></td>
	</tr>
</table>
</div>
</div> 

  
</header>  
    </body>
</html>

