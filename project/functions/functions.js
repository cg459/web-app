
const init = function(){
	
    document.getElementById('button-send').addEventListener('click', send);
}




const send = function(ev){
    ev.preventDefault(); 
    ev.stopPropagation();
    
    let fails = validate();
   
    if(fails.length === 0){
      
        document.getElementById('form-user').submit();
    }else{
        
        fails.forEach(function(obj){
            let field = document.getElementById(obj.input);
            field.parentElement.classList.add('error');
            field.parentElement.setAttribute('data-errormsg', obj.msg);
        })
    }
}

	
	let email = document.getElementById('input-email');
	let password = document.getElementById('input-password');
    let first = document.getElementById('input-first');
    let last = document.getElementById('input-last');
	let number = document.getElementById('input-number');
	let bday = document.getElementById('input-birthday');


    
    if( first.value === "" ){
        failures.push({input:'input-first', msg:'Required Field'})
    }  

    if( last.value === "" ){
        failures.push({input:'input-last', msg:'Required Field'})
    } 
    if( email.value === ""){
        failures.push({input:'input-email', msg:'Required Field'})
    }
	if( password.value === ""){
        failures.push({input:'input-password', msg:'Required Field'})
    }
	if( number.value === ""){
        failures.push({input:'input-number', msg:'Required Field'})
    }
    if( bday.value === ""){
        failures.push({input:'input-birthday', msg:'Required Field'})
    }
    

    return failures;
}

 	 
 	
 