function addToCart(){
	alert("Added to the Cart!!!");
}
function buy(name){
	if (name == 'e1'){
		 location.replace("#");
		document.getElementById("image").src="../images/pice1.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Language Skills";
		document.getElementById("game").innerHTML="English Learning For Kids";
		document.getElementById("price").innerHTML="$20+";
	}else if (name == 'e3'){
		document.getElementById("image").src="../images/pice2.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Language Skills";
		document.getElementById("game").innerHTML="Fairytale Spinner Game";
		document.getElementById("price").innerHTML="$16+";
	}else if (name == 'e5'){
		document.getElementById("image").src="../images/pice3.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Language Skills";
		document.getElementById("game").innerHTML="Words";
		document.getElementById("price").innerHTML="$15+";
	}else if (name == 'e7'){
		document.getElementById("image").src="../images/pice4.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Language Skills";
		document.getElementById("game").innerHTML="I Spy..";
		document.getElementById("price").innerHTML="$21+";
	}else if (name == 'e9'){
		document.getElementById("image").src="../images/pice5.png";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Language Skills";
		document.getElementById("game").innerHTML="SIMON SEES";
		document.getElementById("price").innerHTML="$9+";
	}else if (name == 'e11'){
		document.getElementById("image").src="../images/pice6.png";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Language Skills";
		document.getElementById("game").innerHTML="ABC Ya";
		document.getElementById("price").innerHTML="$10+";
	}else if (name == 's1'){
		document.getElementById("image").src="../images/pics1.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Science Skills";
		document.getElementById("game").innerHTML="Crazy Science";
		document.getElementById("price").innerHTML="$15+";
	}else if (name == 's3'){
		document.getElementById("image").src="../images/pics2.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Science Skills";
		document.getElementById("game").innerHTML="Science Train";
		document.getElementById("price").innerHTML="$18+";
	}else if (name == 's5'){
		document.getElementById("image").src="../images/pics3.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Science Skills";
		document.getElementById("game").innerHTML="Fun Science Fair Projects";
		document.getElementById("price").innerHTML="$16+";
	}else if (name == 's7'){
		document.getElementById("image").src="../images/pics4.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Science Skills";
		document.getElementById("game").innerHTML="Biology Kids";
		document.getElementById("price").innerHTML="$10+";
	}else if (name == 's9'){
		document.getElementById("image").src="../images/pics5.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Science Skills";
		document.getElementById("game").innerHTML="Science is Fun";
		document.getElementById("price").innerHTML="$20+";
	}else if (name == 's11'){
		document.getElementById("image").src="../images/pics6.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Science Skills";
		document.getElementById("game").innerHTML="Play and Learn Science";
		document.getElementById("price").innerHTML="$14+";
	}else if (name == 'm1'){
		document.getElementById("image").src="../images/picm1.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Math Skills";
		document.getElementById("game").innerHTML="Learn Addition";
		document.getElementById("price").innerHTML="$15+";
	}else if (name == 'm3'){
		document.getElementById("image").src="../images/picm2.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Math Skills";
		document.getElementById("game").innerHTML="Learn Subtraction";
		document.getElementById("price").innerHTML="$13+";
	}else if (name == 'm5'){
		document.getElementById("image").src="../images/picm3.png";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Math Skills";
		document.getElementById("game").innerHTML="Math Fun";
		document.getElementById("price").innerHTML="$10+";
	}else if (name == 'm7'){
		document.getElementById("image").src="../images/picm4.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Math Skills";
		document.getElementById("game").innerHTML="Play with Math";
		document.getElementById("price").innerHTML="$16+";
	}else if (name == 'm9'){
		document.getElementById("image").src="../images/picm5.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Math Skills";
		document.getElementById("game").innerHTML="Math Games for Clever Kids";
		document.getElementById("price").innerHTML="$6+";
	}else if (name == 'm11'){
		document.getElementById("image").src="../images/picm6.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their Math Skills";
		document.getElementById("game").innerHTML="Splash Math";
		document.getElementById("price").innerHTML="$20+";
	}else if (name == 'b1'){
		document.getElementById("image").src="../images/picb1.jpg";
		document.getElementById("para").innerHTML="Treasure Hunt";
		document.getElementById("game").innerHTML="Treasure Hunt";
		document.getElementById("price").innerHTML="$15+";
	}else if (name == 'b3'){
		document.getElementById("image").src="../images/picb2.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their IQ level";
		document.getElementById("game").innerHTML="Train Your Brain";
		document.getElementById("price").innerHTML="$16+";
	}else if (name == 'b5'){
		document.getElementById("image").src="../images/picb3.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their IQ level";
		document.getElementById("game").innerHTML="Brain Games for Kids";
		document.getElementById("price").innerHTML="$18+";
	}else if (name == 'b7'){
		document.getElementById("image").src="../images/picb4.png";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their IQ level";
		document.getElementById("game").innerHTML="Complete the Sequence";
		document.getElementById("price").innerHTML="$14+";
	}else if (name == 'b9'){
		document.getElementById("image").src="../images/picb5.jpg";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their IQ level";
		document.getElementById("game").innerHTML="Check Your Skills";
		document.getElementById("price").innerHTML="$15+";
	}else if (name == 'b11'){
		document.getElementById("image").src="../images/picb6.png";
		document.getElementById("para").innerHTML="This game is specially designed for the kids to improve their IQ level";
		document.getElementById("game").innerHTML="IQ Games";
		document.getElementById("price").innerHTML="$16+";
	} 
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

/*function pay() {
	alert("Payment Successfull!!!");
}*/
