const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
  counter.innerText = '0';

  const updateCounter = () => {
      const target = +counter.getAttribute('data-target')
      const c = +counter.innerText

      // const increment = target / 200
      const increment = 10

      if(c < target) {
          counter.innerText = `${Math.ceil(c + increment)}`
          setTimeout(updateCounter, 50)
      } else {
          counter.innerText = target
      }
  }

  updateCounter()
})

// show and hide
function showDiv(divId) {
    var div = document.getElementById(divId);
    if (div) {
      div.style.display = 'block';
    }
  }

  function hideDiv(divId) {
    var div = document.getElementById(divId);
    if (div) {
      div.style.display = 'none';
    }
  }

