// Calculator
var currencySave
const depositRange = document.querySelector('.control__dep')
const daysRange = document.querySelector('.control__days')
const resultSum = document.querySelector('.output__earn')
const resultRev = document.querySelector('.output__revenue')
const resultProf = document.querySelector('.output__profitability')
const euroCounty = [
  'AT',
  'CH',
  'DE',
  'LI',
  'LU',
  'BE',
  'CZ',
  'ES',
  'FR',
  'GR',
  'HU',
  'IT',
  'NL',
  'PL',
  'PT',
  'RO',
  'RS',
  'HR',
  'SK',
  'SL',
  'DK',
  'FI',
  'NO',
  'SE',
]

fetch('https://amos-mamaya.fun/geo')
  .then(response => (response.ok ? response.json() : Promise.reject(response.statusText)))
  .then(data => {
    if (euroCounty.includes(data.country_code)) {
      currencySave = '€'
      localStorage.setItem('currency', currencySave)
    } else {
      currencySave = '€'
      localStorage.setItem('currency', currencySave)
    }
  })
  .catch(error => {
    console.log(`Something went wrong... Status: ${error}`)
    currencySave = '€'
    localStorage.setItem('currency', currencySave)
  })

function updateAllInputResults(data) {
  const sum = depositRange.value
  const days = daysRange.value
  let coeficient = days / 12
  let profitability = sum / 4

  if (days > 30) {
    coeficient *= 8
    profitability *= 2
  }

  coeficient++

  resultSum.innerText = `${localStorage.getItem('currency')}${Math.round(sum * 8 * coeficient)
    .toString()
    .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}`
  resultRev.innerText = `${localStorage.getItem('currency')}${(Math.round(sum * 8 * coeficient) - sum)
    .toString()
    .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}`
  resultProf.innerText = `${Math.round(profitability)}%`
}
$('.control__dep').ionRangeSlider({
  min: 250,
  max: 10000,
  from: 5250,
  prefix: '<span class="currency">€</span>',
  onChange: function (data) {
    updateAllInputResults(data)
  },
})

$('.control__days').ionRangeSlider({
  min: 1,
  max: 90,
  from: 45,
  postfix: ' days',
  onChange: function (data) {
    updateAllInputResults(data)
  },
})

const scrollToCalc = document.querySelector('.scrollToCalc')
const calculator = document.querySelector('.calculator')
scrollToCalc.addEventListener('click', e => {
  e.preventDefault()
  calculator.scrollIntoView({
    block: 'center',
    behavior: 'smooth',
  })
})

const scrollToForm = document.querySelectorAll('.scrollToForm')
const form2 = document.getElementById('myform2')

scrollToForm.forEach(item => {
  item.addEventListener('click', e => {
    e.preventDefault()
    form2.scrollIntoView({
      block: 'center',
      behavior: 'smooth',
    })
  })
})

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
}
