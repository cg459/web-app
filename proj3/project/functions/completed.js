function everythingFull() {
    var a = document.getElementById('title').value;
    var b = document.getElementById('message').value;
    var c= document.getElementById('deadline').value;
    if (a === '' && b === '' && c === '') {
        document.getElementById('replace').innerHTML = 'All fields are empty. You need to fill out at least one field'
    }else{
        document.getElementById('yeah5').innerHTML=' ';
    }
}
