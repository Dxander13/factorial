function calculateFactorial() {
    const numberInput = document.getElementById('numberInput');
    const result = document.getElementById('result');
    const number = parseInt(numberInput.value);

    if (isNaN(number) || number < 0) {
        result.textContent = "Por favor, introduce un número entero no negativo.";
        return;
    }

    let factorial = 1;
    for (let i = number; i > 1; i--) {
        factorial *= i;
    }

    result.textContent = `${number}! = ${factorial}`;
}