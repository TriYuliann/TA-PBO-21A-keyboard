
document.querySelectorAll('.wj-gallery-box').forEach((el, i) => {
    setTimeout(() => {
      el.classList.add('wj-show-el');
      console.log('tess')
    }, (700 * (Math.exp(i * 0.30))) - 700);
  });
