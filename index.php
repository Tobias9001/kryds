
<!DOCTYPE html>
<html>

<head>
    <title>KRYDS OG BOLLE</title>
    <style>

        .cell {
            width: 100px;
            height: 100px;
            border: 1px black solid;
            float: left;
            font-size: 5.5em;
            text-align: center;
        }

        .board {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 306px;
            height: 306px;
            border: 1px black solid;
        }
    </style>
    <script>
        function clicked(objThis) {
           alert(objThis.id + " Has been clicked");
        }
    </script>
</head>

<body>
    
    <div class="board">
        <div id="c1" class="cell" onclick="clicked(this);"></div>
        <div id="c2" class="cell" onclick="clicked(this);"></div>
        <div id="c3" class="cell" onclick="clicked(this);"></div>
        <div id="c4" class="cell" onclick="clicked(this);"></div>
        <div id="c5" class="cell" onclick="clicked(this);"></div>
        <div id="c6" class="cell" onclick="clicked(this);"></div>
        <div id="c7" class="cell" onclick="clicked(this);"></div>
        <div id="c8" class="cell" onclick="clicked(this);"></div>
        <div id="c9" class="cell" onclick="clicked(this);"></div>
    </div>
</body>

</html>