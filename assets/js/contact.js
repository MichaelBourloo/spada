let button = document.getElementById('btn5');
let modal = document.getElementById('modal');

const smoothScrollTo = (endY, duration = 400) => {
    const startY = window.pageYOffset,
    distanceY = endY - startY,
    startTime = new Date().getTime();
    
    const easeIn = (time, from, distance, duration) => {
        if ((time /= duration / 2) < 1) {
            return distance / 2 * time * time * time * time + from;
        } else {
        return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
    }
    }
    
    const timer = setInterval(() => {
        const time = new Date().getTime() - startTime,
      newY = easeIn(time, startY, distanceY, duration);
      if (time >= duration) {
        clearInterval(timer);
    }
    scrollTo(0, newY);
    }, 1000/60);
}

button.addEventListener('click', function() {
    modal.classList.toggle('show');
    smoothScrollTo((window.innerHeight * 1.25), 1000);     
});




