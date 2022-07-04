const calculatorSCreen = document.querySelector(".calculator-screen");

const updateScreen = (number) => {
    calculatorSCreen.value = number;
};

const numbers = document.querySelectorAll(".number");

numbers.forEach((number) => {
    number.addEventListener("click", (event) => {
        inputNumber(event.target.value);
        updateScreen(currentNumber);
    });
});

let prevNumber = "";
let calculationOperator = "";
let currentNumber = "0";

const inputNumber = (number) => {
    if (currentNumber === "0") {
        currentNumber = number;
    } else {
        currentNumber += number;
    }
    // currentNumber += number
};
const operators = document.querySelectorAll(".operator");

operators.forEach((operator) => {
    operator.addEventListener("click", (event) => {
        inputOperator(event.target.value);
    });
});

const inputOperator = (operator) => {
    if (calculationOperator === "") {
        prevNumber = currentNumber;
    }
    calculationOperator = operator;
    currentNumber = "0";
};

const equalSign = document.querySelector(".equal-sign");

equalSign.addEventListener("click", () => {
    calculate();
    updateScreen(currentNumber);
});

const calculate = () => {
    let result = "";
    // var pangkat = Math.pow(currentNumber);
    switch (calculationOperator) {
        case "+":
            result = parseFloat(prevNumber) + parseFloat(currentNumber);
            break;
        case "-":
            result = parseFloat(prevNumber) - parseFloat(currentNumber);
            break;
        case "*":
            result = parseFloat(prevNumber) * parseFloat(currentNumber);
            break;
        case "/":
            result = parseFloat(prevNumber) / parseFloat(currentNumber);
            break;
        case "%":
            result = parseFloat(prevNumber) % parseFloat(currentNumber);
            break;
        case "n":
            result = parseFloat(prevNumber) ** parseFloat(currentNumber);
            break;
        default:
            break;
    }
    currentNumber = result;
    calculationOperator = "";
};

const clearBtn = document.querySelector(".hps-semua");

clearBtn.addEventListener("click", () => {
    clearAll();
    updateScreen(currentNumber);
});

const clearAll = () => {
    prevNumber = "";
    calculationOperator = "";
    currentNumber = "0";
};

const desimal = document.querySelector(".desimal");

desimal.addEventListener("click", (event) => {
    inputDesimal(event.target.value);
    updateScreen(currentNumber);
});

inputDesimal = (dot) => {
    if (currentNumber.includes(".")) {
        return;
    }
    currentNumber += dot;
};
