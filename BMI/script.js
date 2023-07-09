document.getElementById('bmiForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const weight = parseFloat(document.getElementById('weight').value);
  const height = parseFloat(document.getElementById('height').value);

  const bmi = calculateBMI(weight, height);
  displayResult(bmi);
});

function calculateBMI(weight, height) {
  if (isNaN(weight) || isNaN(height) || height <= 0) {
    throw new Error('Please enter valid weight and height values.');
  }

  const heightInMeters = height / 100; // Convert height from centimeters to meters
  return weight / (heightInMeters ** 2);
}

function displayResult(bmi) {
  const resultElement = document.getElementById('result');

  if (isNaN(bmi)) {
    resultElement.textContent = 'Invalid input. Please try again.';
  } else {
    resultElement.textContent = `Your BMI: ${bmi.toFixed(2)}`;
  }
}
