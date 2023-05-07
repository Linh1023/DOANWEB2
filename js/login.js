function hienthi(){
    let a = document.getElementById('form');
    if(a.style.display == 'none'){
        a.style.display = 'block';
    }
    else{
        a.style.display = 'none';
    }
}

function tat(){
    let a = document.getElementById('form');
    a.style.display = 'none';
}

function hienthidangky(){
    let a = document.getElementById('form');
    a.style.display = 'none';
    let b = document.getElementById('formdk');
    b.style.display = 'block';
}

function hienthidangnhap(){
    let a = document.getElementById('formdk');
    a.style.display = 'none';
    let b = document.getElementById('form');
    b.style.display = 'block';
}