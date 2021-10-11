<!DOCTYPE HTML>

<html>

<head>
  <title>Untitled</title>
  <style type="text/css">
  .dots-6 {
  width:12px;
  height:12px;
  background: currentColor;
  border-radius: 50%;
  box-shadow: 12px 0 currentColor,-24px 0 currentColor;
  animation:d6 1s infinite linear alternate;
}
@keyframes d6 {
    50% {box-shadow: 12px 0 currentColor,-12px 0 currentColor}
    100%{box-shadow: 24px 0 currentColor,-12px 0 currentColor}
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
