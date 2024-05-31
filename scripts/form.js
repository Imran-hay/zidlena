'use strict';



// Get form elements
const nameInput = document.querySelector('input[name="name"]');
const emailInput = document.querySelector('input[name="email"]');
const phoneInput = document.querySelector('input[name="phone"]');
const messageInput = document.querySelector('input[name="message"]');
const sendButton = document.querySelector('#send-button');
const errorName = document.querySelector('#error-name');
const errorEmail = document.querySelector('#error-email');
const errorPhone = document.querySelector('#error-phone');
const errorMessage = document.querySelector('#error-message');

// Validation functions
function validateName() {
    let nameInput = document.querySelector('input[name="name"]'); // assuming you have an input field with this ID
    let errorName = document.querySelector('#error-name'); // assuming you have an element to display the error message
  
    let nameValue = nameInput.value.trim();
  
    // Check if the name is empty
    if (nameValue === '') {
      errorName.textContent = 'Please enter your name.';
      return false;
    }
  
    // Check if the name only contains alphabets and spaces
    let nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(nameValue)) {
      errorName.textContent = 'Name can only contain alphabets and spaces.';
      return false;
    }
  
    // If all checks pass
    errorName.textContent = '';
    return true;
  }

function validateEmail() {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailInput.value.trim())) {
    errorEmail.textContent = 'Please enter a valid email address.';
    return false;
  } else {
    errorEmail.textContent = '';
    return true;
  }
}

function validatePhone() {
  const phoneRegex = /^\+?\d{1,3}?[-.\s]?\(?\d{1,3}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}$/;
  if (!phoneRegex.test(phoneInput.value.trim())) {
    errorPhone.textContent = 'Please enter a valid phone number.';
    return false;
  } else {
    errorPhone.textContent = '';
    return true;
  }
}

function validateMessage() {
    let messageInput = document.querySelector('input[name="message"]');// assuming you have an input field with this ID
    let errorMessage = document.querySelector('#error-message'); // assuming you have an element to display the error message
  
    let messageValue = messageInput.value.trim();
  
    // Check if the message is empty
    if (messageValue === '') {
      errorMessage.textContent = 'Please enter a message.';
      return false;
    }
  
    // Check if the message only contains alphabets, numbers, and spaces
    let messageRegex = /^[a-zA-Z0-9\s]+$/;
    if (!messageRegex.test(messageValue)) {
      errorMessage.textContent = 'Message can only contain alphabets, numbers, and spaces.';
      return false;
    }
  
    // If all checks pass
    errorMessage.textContent = '';
    return true;
  }

// Form submission handler
async function handleSubmit(event) {
  event.preventDefault();

  const isNameValid = validateName();
  const isEmailValid = validateEmail();
  const isPhoneValid = validatePhone();
  const isMessageValid = validateMessage();

  if (isNameValid && isEmailValid && isPhoneValid && isMessageValid) {
    try {
      // Use Nodemailer to send email
      alert("hello")
    } catch (error) {
      console.error('Error sending email:', error);
    }
  }
}

// Event listeners
nameInput.addEventListener('change', validateName);
nameInput.addEventListener('blur', validateName);
emailInput.addEventListener('change', validateEmail);
emailInput.addEventListener('blur', validateEmail);
phoneInput.addEventListener('change', validatePhone);
phoneInput.addEventListener('blur', validatePhone);
messageInput.addEventListener('change', validateMessage);
messageInput.addEventListener('blur', validateMessage);
sendButton.addEventListener('click', handleSubmit);