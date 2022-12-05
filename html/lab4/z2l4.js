
function losoweliczby(n,m){
    return Math.floor(Math.random() * (m-n+1)) + n;
}

function pole(r){
    return Math.PI * r * r;
}

function losowe() {
    var r = Math.floor(Math.random() * 256);
    var g = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);
    var bgColor = "rgb(" + r + "," + g + "," + b + ")";
     console.log(bgColor);
  	document.body.style.background = bgColor;
}