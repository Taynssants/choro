let displayValue = '';

function appendNumber(number) {
  displayValue += number;
  updateDisplay();
}

function setOperator(operator) {
  displayValue += operator;
  updateDisplay();
}

function clearDisplay() {
  displayValue = '';
  updateDisplay();
}

function updateDisplay() {
  document.getElementById('display').value = displayValue;
}

function calculate() {
  try {
    const result = eval(displayValue);
    displayValue = result.toString();
    updateDisplay();
  } catch (error) {
    displayValue = 'Error';
    updateDisplay();
  }
}