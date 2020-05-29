var idArray = ["s1", "s2", "s3"];
var i = 0;
setInterval(function () {
  document.getElementById(idArray[i]).click();
  i = (i + 1) % idArray.length;
}, 10000);
