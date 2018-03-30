var menu = document.getElementById('menu');
var hideable = document.getElementById('hideableMenu');
menu.addEventListener('click', toggleMenu);
window.addEventListener('resize', () => { 
if (window.innerWidth> 960) { hideable.style.display = 'flex';}
if (window.innerWidth< 960){hideable.style.display = 'none';}
});
function toggleMenu(){
    var hideable = document.getElementById('hideableMenu');
    if (hideable.style.display == 'none'){
        hideable.style.display = 'flex';
    }
    else{
        hideable.style.display = 'none';
    }
}




