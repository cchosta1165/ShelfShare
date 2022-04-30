document.getElementById('bookbtn').addEventListener('click',
function(){
    document.querySelector('.bg-modal').style.display='flex'
});

document.querySelector('.close').addEventListener('click',
function(){
    document.querySelector('bookbtn').style.display='none'
});