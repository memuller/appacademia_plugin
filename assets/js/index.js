require('babel-polyfill')

const test = () => {
  console.log('Hey!')
}
window.test = test;
