const conpass = document.getElementById('confirm_password');
const submit = document.getElementById('submit');

let d = document, [inputs, knapp] = [
    d.querySelectorAll('[type="email"], [type="password"]'),
    d.querySelector('#submit')];
    knapp.disabled = true;

for (i = 0; i < inputs.length; i++) {
  submit.classList.remove("btn-light");
  inputs[i].addEventListener('input',() => {
    let values = [];
    inputs.forEach(v => values.push(v.value));
    knapp.disabled = values.includes('');
  });
}

submit.classList.add("btn-success");



