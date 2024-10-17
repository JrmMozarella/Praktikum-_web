
//Menampilkan Text
function appendToDisplay(value) {
    document.getElementById("display").value += value;
}

//Hapus Di layar
function clearDisplay() {
    document.getElementById("display").value = "";
}

//Menampilkan hasil ke layar
function calculateResult() {
    try {
        const result = eval(document.getElementById("display").value);
        document.getElementById("display").value = result;
    } catch (error) {
        document.getElementById("display").value = "Error";
    }
}
