let elem_username = document.getElementById('username')
let elem_email = document.getElementById('email')
let elem_telefono = document.getElementById('telefono')
let elem_codfiscale = document.getElementById('codfiscale')
let elem_pass = document.getElementById('password')
let elem_check_pass = document.getElementById('checkPassword')

elem_username.onchange = () => {
    console.log('ciao');
    if (elem_username.value.length >= 8)
        elem_username.style.backgroundColor = ' #77dd81';
    else
        elem_username.style.backgroundColor = ' #FFFFFF';
}


elem_email.onchange = () => {
    if (elem_email.value.length >= 5)
        elem_email.style.backgroundColor = ' #77dd81';
    else
        elem_email.style.backgroundColor = ' #FFFFFF';
}

elem_telefono.onchange = () => {

    if (elem_telefono.value.length == 9 && elem_telefono.value.match(/^[0-9]/))
        elem_telefono.style.backgroundColor = ' #77dd81';
    else
        elem_telefono.style.backgroundColor = ' #FFFFFF';
}

elem_codfiscale.onchange = () => {
    if (elem_codfiscale.value.length == 16 && elem_codfiscale.value.match(/^[A - Z]{ 6}\d{ 2}[A - Z]\d{ 2}[A - Z]\d{ 3}[A - Z]$/) )
        elem_telefono.style.backgroundColor = ' #77dd81';
    else
        elem_telefono.style.backgroundColor = ' #FFFFFF';
}



