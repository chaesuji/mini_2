function chkDuplicationId(){
    const id = document.getElementById('id');
    const url = "/api/user?id=" + id.value;
    let apiData = null;

    // API 
    fetch(url)
    .then(data => {return data.json();})
    .then(apiData => {
        const errMsgId = document.getElementById('errMsgId');
        if(apiData["flg"] === "1"){
            errMsgId.innerHTML = apiData["msg"];
        }else{
            errMsgId.innerHTML = "";
        }
    })
}

const chkbtn = document.querySelector('#chkbtn');
const nameip = document.querySelector('#name');
const idip = document.querySelector('#id');
const pwip = document.querySelector('#pw');
const pwchkip = document.querySelector('#pwchk');

chkbtn.addEventListener('click', () => {
    nameip.innerHTML = nameip.value;
    idip.innerHTML = "";
    pwip.innerHTML = pwip.value;
    pwchkip.innerHTML = pwchkip.value;
});