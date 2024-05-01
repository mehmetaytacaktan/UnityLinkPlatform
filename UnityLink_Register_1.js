let swtch = 0;
function alignRegister() {
    let items = document.querySelectorAll('.create-acc');
    for (let i = 0; i < items.length; i++) {
        items[i].classList.toggle('create-acc-clicked');
    }
    switch (swtch % 2) {
        case 0: document.getElementById('reverseTxt').innerHTML = `Already have an account? <span style="color:blue" onclick="alignRegister()">Sign in</span>`;
            document.getElementById('reverseBtn').innerText = 'CREATE ACCOUNT';
            swtch++; break;
        case 1: document.getElementById('reverseTxt').innerHTML = `Don\'t have any account? <span style="color:blue" onclick="alignRegister()">Create Account</span>`;
            document.getElementById('reverseBtn').innerText = 'SIGN IN';
            swtch++; break;
    }    
}
document.getElementById('announcer').addEventListener('click', function () {
    if (document.getElementById('announcer').checked)
        document.getElementsByName('Name')[0].placeholder = 'Organisation Name';
    else
        document.getElementsByName('Name')[0].placeholder = 'Name';
});