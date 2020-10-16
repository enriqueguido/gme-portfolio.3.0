// TypeWriter Text
// ============================================ //

var container = document.getElementById('changeText');

var things = ["Hi, I'm Max", "I'm a Web Developer"];
var t = -1;
var thing = '';
var message = container.innerHTML;
var mode = 'write';
var delay = 800;

function updateText(txt) {
  container.innerHTML = txt;
}

function tick() {

  if(container.innerHTML.length == 0) {
    t++;
    // thing = things[Math.floor(Math.random() * things.length)];
    thing = things[t];
    message = '';
    mode = 'write';
  }

  switch(mode) {
    case 'write' :
      message += thing.slice(0, 1);
      thing = thing.substr(1);

      updateText(message);

      if(thing.length === 0 && t === (things.length - 1)) {
          window.clearTimeout(timeout);
          return;
      }

      if(thing.length == 0){
          mode = 'delete';
          delay = 800;
      } else {
          delay = 32 + Math.round(Math.random() * 40);
      }

      break;

    case 'delete' :
      message = message.slice(0, -1);
      updateText(message);

      if(message.length == 0)
      {
          mode = 'write';
          delay = 800;
      } else {
          delay = 32 + Math.round(Math.random() * 100);
      }
      break;
  }

  timeout = window.setTimeout(tick, delay);
}

var timeout = window.setTimeout(tick, delay);

// End of TypeWriter
// ========================================== //



$("#light").slick({
  dots: false,
  infinite: true,
  centerMode: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
