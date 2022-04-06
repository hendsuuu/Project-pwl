const txtElement = ['Student','Junior Programmer','Gabuters'];
let count = 0;
let txtindex =0;
let currenttxt = '';
let words = '';

(function ngetik(){
    if(count == txtElement.length){
        count = 0;
    }
    currenttxt = txtElement[count];

    words = currenttxt.slice(0,++txtindex);
    document.querySelector('.ngetik').textContent = words;
    document.querySelector('.ngetik').style.color = '#ff5500';
    
    if(words.length == currenttxt.length){
        count++;
        txtindex =0;
    }

    setTimeout(ngetik,500);
})();