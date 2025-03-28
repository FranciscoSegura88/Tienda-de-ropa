let btn_hombre = document.getElementById('btn_hombre');
let btn_mujer = document.getElementById('btn_mujer');
let btn_ninos = document.getElementById('btn_ninos');
let btn_ofertas = document.getElementById('btn_ofertas');

let cards = document.getElementsByClassName('card'); //Obtengo todos los items

btn_hombre.addEventListener('click', function(){
  for(let i = 0; i < cards.length; i++){ //Recorro todos los items
    if(cards[i].classList.contains('hidden')){ //Si el item esta oculto
      cards[i].classList.remove('hidden'); //Lo muestro
    }
  }
  for(let i = 0; i < cards.length; i++){ //Recorro todos los items
    if(!cards[i].classList.contains('hombre')){ //Si el item no es de la categoria hombre
      cards[i].classList.add('hidden'); //Lo oculto
    }
  }
});

btn_mujer.addEventListener('click', function(){
  for(let i = 0; i < cards.length; i++){ //Lo mismo
    if(cards[i].classList.contains('hidden')){
      cards[i].classList.remove('hidden');
    }
  }

  for(let i = 0; i < cards.length; i++){
    if(!cards[i].classList.contains('mujer')){
      cards[i].classList.add('hidden');
    }
  }
});

btn_ninos.addEventListener('click', function(){
  for(let i = 0; i < cards.length; i++){
    if(cards[i].classList.contains('hidden')){
      cards[i].classList.remove('hidden');
    }
  }

  for(let i = 0; i < cards.length; i++){
    if(!cards[i].classList.contains('ninos')){
      cards[i].classList.add('hidden');
    }
  }
});

btn_ofertas.addEventListener('click', function(){
  for(let i = 0; i < cards.length; i++){
    if(cards[i].classList.contains('hidden')){
      cards[i].classList.remove('hidden');
    }
  }

  for(let i = 0; i < cards.length; i++){
    if(!cards[i].classList.contains('trend')){
      cards[i].classList.add('hidden');
    }
  }
});

