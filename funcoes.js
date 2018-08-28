var i = 0;
var images = [];
var time = 3000;

images[0] = 'imagens/img1.jpg';
images[1] = 'imagens/pro.jpg';
images[2] = 'imagens/img3.jpg';

function changeImg(){
	document.slide.src = images[i];
	
	if(i < images.length - 1){
		i++;
	}else {
		i = 0;
	}
	
	setTimeout("changeImg()", time);
}

/* function nextImg(){
  document.slide.src = images[(i++)%3];
  if (i>=images.length) return true; //fim da lista
  return false;
  //setTimeout('time');
}

function prevImg(){
  document.slide.src = images[(i = i<0 ? 0 : i--)%3];
  if (i<=images.length) return true; //fim da lista
  return false;
  //setTimeout('time');
} */

window.onload = changeImg;

/*window.onload = () => {
  let time = 3000;
  let id_interval = setInterval(() => {
    if(nextImg()) {
      clearInterval(id_interval);
    }
  }, time);
}*/