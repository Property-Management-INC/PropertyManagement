// Lines 0 - 4 written by William Hilton
// Appends alert feedback messages to website forms

let label = document.getElementsByClassName("msg")[0];
label.textContent = "Invalid username or password";
label.style.color = 'red';