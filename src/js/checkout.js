var randomstring = Math.random().toString(36).slice(-8);
if(document.querySelector('#account_password')){
    document.querySelector('#account_password').value = randomstring;
}