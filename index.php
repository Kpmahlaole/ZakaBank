<!DOCTYPE HTML>

<html>

<head>
  <title>Untitled</title>
  <style type="text/css">
  .dots-6 {
  width:12px;
  height:12px;
  background: #2191FB;
  border-radius: 50%;
  box-shadow: 40px 40px #2191FB,-24px 40px #2191FB;
  box-shadow: 40px 40px #2191FB,-24px 40px #50A9FB;
  animation:d6 1s infinite linear alternate;
}
@keyframes d6 {
    50% {box-shadow: 12px 0 currentColor,-12px 0 currentColor}
    100%{box-shadow: 24px 0 currentColor,-12px 0 #2191FB}
}

/**/
body {
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  grid-auto-rows: 130px;
  place-items:center;
}

* {
  box-sizing: border-box;
}
  </style>
</head>

<body>

<div class="dots-6"></div>

</body>

</html>
