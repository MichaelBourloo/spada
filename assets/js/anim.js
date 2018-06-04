var hi = anime ({
    targets: '#hi',
    translateX: 280,
    duration: 3000,
});

var spada = anime ({
    targets: '#spada',
    translateX: 170,
    duration: 3000,
});

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