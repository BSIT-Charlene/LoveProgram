document.addEventListener('DOMContentLoaded', () => {
  const contactInput = document.getElementById('contact-input');

  contactInput.addEventListener('input', handleContactInput);

  function handleContactInput(event) {
    let inputValue = event.target.value.replace(/\D/g, ''); // Remove non-numeric characters

    // Ensure the input starts with "09" and has a maximum length of 11 characters
    if (inputValue.startsWith('09')) {
      inputValue = inputValue.slice(0, 11);
    } else if (inputValue.length >= 2) {
      inputValue = '09' + inputValue.slice(2, 11);
    }

    // Update the input value
    contactInput.value = inputValue;
  }
  const dateAssessedInput = document.querySelector('.date-assessed input[type="datetime-local"]');
  setDateAssessedDefault(dateAssessedInput);

  function setDateAssessedDefault(inputElement) {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const defaultValue = `${year}-${month}-${day}T${hours}:${minutes}`;
    inputElement.value = defaultValue;
    inputElement.disabled = true;
  }

  const addButton = document.querySelector('.add-btn');
  const vehicleTable = document.getElementById('vehicle-table');
  const tbody = vehicleTable.querySelector('tbody');
  const submitButton = document.getElementById('submit-button');
  const todaList = document.querySelector("select[name='toda']");
  const inputs = document.querySelectorAll('#application-form input[required]');
  let unitCount = 1;

  function getUnitCountText(count) {
    const lastDigit = count % 10;
    let suffix = 'th';
    
    if (count !== 11 && count !== 12 && count !== 13) {
      if (lastDigit === 1) {
        suffix = 'st';
      } else if (lastDigit === 2) {
        suffix = 'nd';
      } else if (lastDigit === 3) {
        suffix = 'rd';
      }
    }
    
    return count + suffix + ' Unit';
  }

  addButton.addEventListener('click', () => {
    unitCount++;
    event.preventDefault();

    const newRow = document.createElement('tr');
    newRow.classList.add('data-row');

    const unitCountCell = document.createElement('td');
    const unitCountDiv = document.createElement('div');
    unitCountDiv.classList.add('unit-count');
    unitCountDiv.textContent = getUnitCountText(unitCount);
    unitCountCell.appendChild(unitCountDiv);

    for (let i = 0; i < 5; i++) {
      const inputCell = document.createElement('td');
      const input = document.createElement('input');
      input.type = 'text';

      input.name = `body_no[${unitCount - 1}]`;
      if (i === 1) {
        input.name = `plate_no[${unitCount - 1}]`;
      } else if (i === 2) {
        input.name = `manufacturer[${unitCount - 1}]`;
      } else if (i === 3) {
        input.name = `engine_no[${unitCount - 1}]`;
      } else if (i === 4) {
        input.name = `chassis_no[${unitCount - 1}]`;
      }

      inputCell.appendChild(input);
      newRow.appendChild(inputCell);
    }

    newRow.insertBefore(unitCountCell, newRow.firstChild);

    const addBtnRow = tbody.querySelector('.add-btn-row');
    if (addBtnRow) {
      tbody.insertBefore(newRow, addBtnRow);
    } else {
      tbody.appendChild(newRow);
    }
  });

  function areInputsFilled() {
    return Array.from(inputs).every(input => input.value.trim() !== '');
  }

  document.querySelectorAll('.requirement-label').forEach(checkbox => {
    checkbox.addEventListener('input', updateSubmitButtonState);
  });

  function updateSubmitButtonState() {
    console.log("Updating submit button state...");
    const checkboxes = document.querySelectorAll('.requirement-label');
    const allCheckboxesChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
  
    console.log("allCheckboxesChecked:", allCheckboxesChecked);

    submitButton.disabled = todaList.value === "default" || !areInputsFilled() || !allCheckboxesChecked;
  }

  updateSubmitButtonState();
  document.querySelector('#application-form').addEventListener('input', updateSubmitButtonState);

  submitButton.addEventListener('click', (event) => {
    if (submitButton.disabled) {
      alert("Please make sure all checkboxes are checked and all necessary inputs are filled.");
      event.preventDefault();
    }
  });
});
