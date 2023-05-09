function hienthi(){
    let a = document.getElementById('form');
    let b = document.getElementById('formdk');
    if(b.style.display == 'block'){
        b.style.display = 'none';
    }
    if(a.style.display == 'none'){
        a.style.display = 'block';
    }
    else{
        a.style.display = 'none';
    }
}

function tatdn(){
    let a = document.getElementById('form');
    a.style.display = 'none';
}
function tatdk(){
    let a = document.getElementById('formdk');
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