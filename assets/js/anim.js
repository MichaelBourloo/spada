// var hi = anime ({
//     targets: '#hi',
//     translateX: 280,
//     duration: 3000,
// });

// // Fonction exécutée au redimensionnement
// function animation() {
//     var hi = document.getElementById('hi');
//     if("matchMedia" in window) { // Détection
//       if(window.matchMedia("(min-width:600px)").matches) {
//         targets: '#hi',
//         translateX: 280,
//         duration: 3000,
//       } else {
//         targets: '#hi',
//         translateX: 60,
//         duration: 3000,
//       }
//     }
//   }
//   // On lie l'événement resize à la fonction
//   window.addEventListener('resize', animation, false);

// var spada = anime ({
//     targets: '#spada',
//     translateX: 170,
//     duration: 3000,
// });

var myStats = {
    Motivation: '0%',    
}
  
var JSobjectProp = anime ({
    targets: myStats,
    Motivation: '200%',   
    easing: 'linear',
    duration: 15000,
    round: 1,
    update: function() {
      var el = document.querySelector('#experience pre');
      el.innerHTML = JSON.stringify(myStats);
    }
});