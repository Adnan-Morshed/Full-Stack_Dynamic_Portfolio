menu = document.querySelector('nav').children;

for (let i = 0; i < menu.length; i++) {
    menu[i].addEventListener('click', function(event) {
      alert(`You clicked on: ${event.target.innerText}`);
    });
}
// Get the Contact button and the message element
const contactBtn = document.querySelector('.contact-btn');
const messageEl = document.getElementById('message');

// Add click event listener only to Contact button
contactBtn.addEventListener('click', function (e) {
  e.preventDefault(); // Prevent jump to #contact
  messageEl.textContent = "Thanks for contacting!";
});

