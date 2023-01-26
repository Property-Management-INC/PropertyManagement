// Get current date and append to footer

window.onload = () => {
    let cDate = document.getElementById("cDate");
    let date = new Date();
    cDate.textContent = date.getFullYear();
}