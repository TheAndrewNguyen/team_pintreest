<x-app-layout>
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <title>Game 2048</title>
    <link rel="stylesheet" type="text/css" href="2048.css" />

    @vite(['resources/css/app.css', 'resources/css/2048.css', 'resources/js/app.js', 'resources/js/2048/jquery.min.js', 'resources/js/2048/support2048.js', 'resources/js/showanimation2048.js', 'resources/js/main2048.js'])
</head>
<body>
<header>
    <h1>2048</h1>
    <a href="javascript:newgame();" id="newgamebutton">New Game</a>
    <p>Sudowoodo :o </p>
    <p>score : <span id="score">0</span></p>
</header>


<div id="grid-container">
    <div class="grid-cell" id="grid-cell-0-0"></div>
    <div class="grid-cell" id="grid-cell-0-1"></div>
    <div class="grid-cell" id="grid-cell-0-2"></div>
    <div class="grid-cell" id="grid-cell-0-3"></div>

    <div class="grid-cell" id="grid-cell-1-0"></div>
    <div class="grid-cell" id="grid-cell-1-1"></div>
    <div class="grid-cell" id="grid-cell-1-2"></div>
    <div class="grid-cell" id="grid-cell-1-3"></div>

    <div class="grid-cell" id="grid-cell-2-0"></div>
    <div class="grid-cell" id="grid-cell-2-1"></div>
    <div class="grid-cell" id="grid-cell-2-2"></div>
    <div class="grid-cell" id="grid-cell-2-3"></div>

    <div class="grid-cell" id="grid-cell-3-0"></div>
    <div class="grid-cell" id="grid-cell-3-1"></div>
    <div class="grid-cell" id="grid-cell-3-2"></div>
    <div class="grid-cell" id="grid-cell-3-3"></div>
</div>

</body>
</html>

</x-app-layout>