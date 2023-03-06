const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.querySelector('#name').value;
  const email = document.querySelector('#email').value;
  const phone = document.querySelector('#phone').value;
  const date = document.querySelector('#date').value;
  const time = document.querySelector('#time').value;

  console.log(`Name: ${name}`);
  console.log(`Email: ${email}`);
  console.log(`Phone: ${phone}`);
  console.log(`Date: ${date}, Time: ${time}`);
});
