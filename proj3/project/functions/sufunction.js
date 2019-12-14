function everythingFull() {
    var a = document.getElementById('input-email').value;
    var b = document.getElementById('input-password').value;
    var c = document.getElementById('input-first').value;
    var d = document.getElementById('input-last').value;
    var e = document.getElementById('input-major').value;
    var f = document.getElementById('input-college').value;


    if (a === '' ) {
        document.getElementById('replace1').innerHTML = 'The Email Field is empty. Please fill it out';
    }if(b === "")
    {
        document.getElementById('replace2').innerHTML = 'The Password Field is empty. Please fill it out';
    }if(c ==="")
    {
        document.getElementById('replace3').innerHTML = 'The First Name Field is empty. Please fill it out';
    }
    if(d ==="")
    {
        document.getElementById('replace4').innerHTML = 'The Last Name Field is empty. Please fill it out';
    }
    if(e ==="")
    {
        document.getElementById('replace5').innerHTML = 'The Major Field is empty. Please fill it out';
    }
    if(f ==="")
    {
        document.getElementById('replace6').innerHTML = 'The college Field is empty. Please fill it out';
    }
}

function emailReg() {
    var a = document.getElementById('input-email').value();
    const b = /(\w+)+\@+\w+(\.)+\w+/;
    var testing = b.test(a);
    if (testing === false){
        document.getElementById('required7').innerHTML= "please enter a correct email";
    }else{
        document.getElementById('required7').innerHTML= "";

    }
}
