 // aca esta la funcion java script que cambia el color del navbar
 window.addEventListener('scroll', function () { //aca se crea la funcion scroll
     let header = document.querySelector('#menu'); // aca le pedimos que busque el id menu
     let windowPosition = window.scrollY >395; //aca le damos la distancia que tiene que recorrer el nav para cambiar de color
     header.classList.toggle('scrolling-active',windowPosition); //aca llamamos el css que se encarga de darle el color al nav
 })

 