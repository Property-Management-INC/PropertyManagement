// Get current date and append to copyright span in footer

window.onload = () => {
    let cDate = document.getElementById("cDate");
    let date = new Date();
    cDate.textContent = date.getFullYear();
}