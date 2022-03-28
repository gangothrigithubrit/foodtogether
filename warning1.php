
<!DOCTYPE html>
<!--Code by Divinector - divinectorweb.com-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>R & B Restaurant</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
	<style>
        
* {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Baloo 2', cursive;
}
.banner-text {
	width: 100%;
	position: absolute;
	z-index: 1;
}
.banner-text ul {
	height: 50px;
	float: right;
}
.banner-text ul li {
	display: inline-block;
	padding: 40px 15px;
	text-transform: uppercase;
	color: #fff;
	font-size: 20px;
}
.banner-text ul li:hover {
	cursor: pointer;
}
.banner-text h2 {
	text-align: center;
	color: #fff;
	font-size: 50px;
	margin-top: 20%;
}
.animation-area {
	background: linear-gradient(to left, #8942a8, #ba382f);
	width: 100%;
	height: 100vh;
}
.box-area {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
}
.box-area li {
	position: absolute;
	display: block;
	list-style: none;
	width: 25px;
	height: 25px;
	background: rgba(255, 255, 255, 0.2);
	animation: animate 20s linear infinite;
	bottom: -150px;
}
.box-area li:nth-child(1) {
	left: 86%;
	width: 80px;
	height: 80px;
	animation-delay: 0s;
}
.box-area li:nth-child(2) {
	left: 12%;
	width: 30px;
	height: 30px;
	animation-delay: 1.5s;
	animation-duration: 10s;
}
.box-area li:nth-child(3) {
	left: 70%;
	width: 100px;
	height: 100px;
	animation-delay: 5.5s;
}
.box-area li:nth-child(4) {
	left: 42%;
	width: 150px;
	height: 150px;
	animation-delay: 0s;
	animation-duration: 15s;
}
.box-area li:nth-child(5) {
	left: 65%;
	width: 40px;
	height: 40px;
	animation-delay: 0s;
}
.box-area li:nth-child(6) {
	left: 15%;
	width: 110px;
	height: 110px;
	animation-delay: 3.5s;
}
@keyframes animate {
	0% {
		transform: translateY(0) rotate(0deg);
		opacity: 1;
	}
	100% {
		transform: translateY(-800px) rotate(360deg);
		opacity: 0;
	}
}


.btn {
	color: #fff;
	text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
	border-radius: 5px;
	position:absolute;
	font-size:22px;
	top:101%;
	margin-left:48%;
	width:100px;
	height:50px;
	font-family: "Montserrat";
	padding:2px;
	font-weight: 500;
	
	background-color: #a28f9d;	
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255, 255, 255, 0.6)), color-stop(0.49, rgba(255, 255, 255, 0.3)), color-stop(0.51, rgba(255, 255, 255, 0.0)), to(rgba(255, 255, 255, 0.2))); /* Chrome,Safari4+ */
    background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* Chrome10+,Safari5.1+ */
    background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* FF3.6+ */
    background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* Opera11.10+ */
    background-image: linear-gradient(top, rgba(255, 255, 255, 0.6) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.0) 51%, rgba(255, 255, 255, 0.2) 100%); /* W3C */	
}

.btn:hover {
	background-color: #84a98c;	
}

    </style>
</head>
<body>

	<div class="banner-text">
		
		<h2>For Ordering This Food, 1st login 2 ur account.<br>Please login </h2>


		<form>
 <input type="button" class="btn" value="Go back!" onclick="history.back()">
</form>
	
	
	</div>

	<div class="animation-area">
		<ul class="box-area">
	

 
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

</body>
</html>
