const loginBox = document.querySelector('.login');
const joinBox = document.querySelector('.join');

const loginTab = document.querySelector('.login__tab');
const joinTab = document.querySelector('.join__tab');

const clickLoginTab = (e) => {
  console.log(e);
  loginBox.target.classList.add('show');
  joinBox.classList.remove('show');
};

const clickJoinTab = (e) => {
  joinBox.target.classList.add('show');
  loginBox.classList.remove('show');
};

loginTab.addEventListener('click', clickLoginTab);
joinTab.addEventListener('click', clickJoinTab);
