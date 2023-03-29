// filter
$(document).ready(function () {
  $('.filter-item').click(function () {
    const value = $(this).attr('data-filter');
    if (value == 'semua') {
      $('.post-box').show('1000');
    } else {
      $('.post-box')
        .not('.' + value)
        .hide('1000');
      $('.post-box')
        .filter('.' + value)
        .show('1000');
    }
  });
  // Menambahkan aktif button
  $('.filter-item').click(function () {
    $(this).addClass('active-filter').siblings().removeClass('active-filter');
  });
});

// // Counting animation: Beranda
// let valueDisplays = document.querySelectorAll('.num');
// let interval = 5000;

// valueDisplays.forEach((valueDisplays) => {
//   let startValue = 0;
//   let endValue = parseInt(valueDisplay.getAttribute('data-val'));
//   let duration = Math.floor(interval / endValue);
//   let counter = setInterval(function () {
//     startValue += 1;
//     valueDisplay.textContent = startValue;
//     if (startValue == endValue) {
//       clearInterval(counter);
//     }
//   }, duration);
// });

$('.count').each(function () {
  var $this = $(this),
    countTo = $this.attr('data-count');
  $({ countNum: $this.text() }).animate(
    {
      countNum: countTo,
    },
    {
      duration: 5000,
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum + '+');
      },
    }
  );
});

$('.galeri').magnificPopup({
  delegate: 'a',
  type: 'image',
  galeri: {
    enabled: true,
  },
});
