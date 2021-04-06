// let form = document.querySelector('form');
// document.addEventListener('DOMContentLoaded', () => forms[0].submit());
// document.addEventListener('DOMContentLoaded', () => form.submit());
// form.submit()
//-----------------------------------------------------------------------------
// let date = new Date;
// let hours = date.getHours();
// let minutes = date.getMinutes();

// console.log(`Текущее время: ${hours} часов ${minutes} минут`);


let date = new Date;
let hours = date.getHours();
let minutes = date.getMinutes();
let formInput = document.querySelector
                ("form > input[type=hidden]:nth-child(1)");
let val = formInput.value;   
   
let formInputDT = `${val} ${hours}h ${minutes}min`                 
formInput.value = formInputDT;
let form = document.querySelector('form');
document.addEventListener('DOMContentLoaded', () => form.submit());

// console.log(formInputDT);









