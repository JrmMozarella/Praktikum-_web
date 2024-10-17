<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" readonly>
        <div class="buttons">
            <button class="button" onclick="clearDisplay()">C</button>
            <button class="button" onclick="appendToDisplay('7')">7</button>
            <button class="button" onclick="appendToDisplay('8')">8</button>
            <button class="button" onclick="appendToDisplay('9')">9</button>
            <button class="button" onclick="appendToDisplay('+')">+</button>
            <button class="button" onclick="appendToDisplay('4')">4</button>
            <button class="button" onclick="appendToDisplay('5')">5</button>
            <button class="button" onclick="appendToDisplay('6')">6</button>
            <button class="button" onclick="appendToDisplay('-')">-</button>
            <button class="button" onclick="appendToDisplay('1')">1</button>
            <button class="button" onclick="appendToDisplay('2')">2</button>
            <button class="button" onclick="appendToDisplay('3')">3</button>
            <button class="button" onclick="appendToDisplay('*')">*</button>
            <button class="button" onclick="appendToDisplay('0')">0</button>
            <button class="button" onclick="appendToDisplay('.')">.</button>
            <button class="button" onclick="appendToDisplay('/')">/</button>
            <button class="button" onclick="calculateResult()">=</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>