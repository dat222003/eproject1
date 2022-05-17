let parameters = {
    count : false,
    letters : false,
    numbers : false,
    special : false
}
let strengthBar = document.getElementById("strength-bar");
let msg = document.getElementById("msg");

function strengthChecker(){
    let password = document.getElementById("password_new_1").value;

    parameters.letters = (/[A-Za-z]+/.test(password));
    parameters.numbers = (/[0-9]+/.test(password));
    parameters.special = (/[!\"$%&/()=?@~`\\.\';:+=^*_-]+/.test(password));
    parameters.count = (password.length > 7);

    let barLength = Object.values(parameters).filter(value=>value);


    strengthBar.innerHTML = "";
    for( let i in barLength){
        let span = document.createElement("span");
        span.classList.add("strengthpattern");
        strengthBar.appendChild(span);
    }

    let spanRef = document.getElementsByClassName("strengthpattern");
    for( let i = 0; i < spanRef.length; i++){
        switch(spanRef.length - 1){
            case 0 :
                spanRef[i].style.background = "#ff3e36";
                msg.textContent = "Your password is very weak";
                break;
            case 1:
                spanRef[i].style.background = "#ff691f";
                msg.textContent = "Your password is weak";
                break;
            case 2:
                spanRef[i].style.background = "#ffda36";
                msg.textContent = "Your password is good";
                break;
            case 3:
                spanRef[i].style.background = "#0be881";
                msg.textContent = "Your password is strong";
                break;
        }
    }
}

function show_password_old(){
    var x = document.getElementById("password_old");
    var y = document.getElementById("hide_old");
    var z = document.getElementById("show_old");
    if(x.type === 'password'){
        x.type = "text";
        z.style.display = "none";
        y.style.display = "block";
    }else{
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}
function show_password_new(){
    var pass1 = document.getElementById("password_new_1");
    var pass2 = document.getElementById("password_new_2");
    var y = document.getElementById("hide_new");
    var z = document.getElementById("show_new");
    if(pass1.type === 'password' || pass2.type === 'password'){
        pass1.type = "text";
        pass2.type = "text";
        z.style.display = "none";
        y.style.display = "block";
    }else{
        pass1.type = "password";
        pass2.type = "password";
        z.style.display = "block";
        y.style.display = "none";
    }
}
