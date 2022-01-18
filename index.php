<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet">
    <title>Calculator</title>
</head>

<body>
    <h1>Calculator</h1>
    <p>Operator</p>
    <form class="calculator" onsubmit="handleSubmit(event)">
        <div class="calculator__screen">
            <input id="val1" class="calculator__input" readonly type="text" value="12">
            <input id="operat" class="calculator__input" readonly type="text" value="+">
            <input id="val2" class="calculator__input" readonly type="text" value="122">
            <span id="result" class="calculator__input">= 134</span>
        </div>
        <div class="calculator__btns">
            <div class="row">
                <button>AC</button>
                <button><--</button>
                <button>%</button>
                <button class="btn--operat">÷</button>
            </div>
            <div class="row">
                <button class="btn--number">7</button>
                <button class="btn--number">8</button>
                <button class="btn--number">9</button>
                <button class="btn--operat">x</button>
            </div>
            <div class="row">
                <button class="btn--number">4</button>
                <button class="btn--number">5</button>
                <button class="btn--number">6</button>
                <button class="btn--operat">-</button>
            </div>
            <div class="row">
                <button class="btn--number">1</button>
                <button class="btn--number">2</button>
                <button class="btn--number">3</button>
                <button class="btn--operat">+</button>
            </div>
            <div class="row">
                <button></button>
                <button class="btn--number">0</button>
                <button>.</button>
                <button class="btn--operat">=</button>
            </div>
        </div>
    </form>
    </div>
</body>

</html>