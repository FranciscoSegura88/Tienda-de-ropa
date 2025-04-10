let btn_hombre = document.getElementById('btn_hombre');
let btn_mujer = document.getElementById('btn_mujer');
let btn_ninos = document.getElementById('btn_ninos');
let btn_ofertas = document.getElementById('btn_ofertas');
let cards = document.getElementsByClassName('card');
let subcategorias = document.querySelectorAll('.subcategoria');

btn_hombre.addEventListener('click', function(){
  for(let i = 0; i < cards.length; i++){
    if(cards[i].classList.contains('hidden')){
      cards[i].classList.remove('hidden');
    }
  }
  for(let i = 0; i < cards.length; i++){
    if(!cards[i].classList.contains('hombre')){
      cards[i].classList.add('hidden');
    }
  }
});

btn_mujer.addEventListener('click', function(){
  for(let i = 0; i < cards.length; i++){
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

//Subcategorias

for(let i = 0; i < subcategorias.length; i++){
  subcategorias[i].addEventListener('change', function(){
    let subSeleccionadas = [];
    for(let j = 0; j < subcategorias.length; j++){
      if(subcategorias[j].checked){
        subSeleccionadas.push(subcategorias[j].dataset.sub);
      }
    }

    if(subSeleccionadas.length === 0){
      for(let k = 0; k < cards.length; k++){
        cards[k].classList.remove('hidden');
      }
      return;
    }

    for(let k = 0; k < cards.length; k++){
      let mostrar = false;
      for(let l = 0; l < subSeleccionadas.length; l++){
        if(cards[k].classList.contains(subSeleccionadas[l])){
          mostrar = true;
          break;
        }
      }
      if(mostrar){
        cards[k].classList.remove('hidden');
      }else{
        cards[k].classList.add('hidden');
      }
    }
  });
}
