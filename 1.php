<!DOCTYPE html><html>
<head>
    <meta charset='UTF-8'>
    <meta name="author" content="Senterwebs">
    <title>Membuat Penjumlahan Otomatis</title>
    <!-- <link href="style.css" rel="stylesheet"> -->
</head>
<body>
    <div align="center" id="wrapper">
        <h3>Membuat Penjumlahan Otomatis</h3>
        <input type="text" id="txt1"  onkeyup="sum();" /> +
        <input type="text" id="txt2"  onkeyup="sum();" /> =
        <input type="text" id="txt3" />

        <script>
            function sum() {
                var txtFirstNumberValue = document.getElementById('txt1').value;
                var txtSecondNumberValue = document.getElementById('txt2').value;
                var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
                if (!isNaN(result)) {
                    document.getElementById('txt3').value = result;
                }
            }
        </script>
    </div>
</body>
</html>