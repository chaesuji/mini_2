function chkDuplicationId(){
    const id = document.getElementById('id');
    const url = "/api/user?id=" + id.value;
    // let apiData = null;

    // API 
    fetch(url)
    .then(data => {
        // Response Status 확인 (200번 외에는 에러 처리)
		if(data.status !== 200) {
			throw new Error(data.status + ' : API Response Error' );
		}
		return data.json();
    })
        // return data.json();})
    .then(apiData => {
        const errMsgId = document.getElementById('errMsgId');
        if(apiData["flg"] === "1"){
            errMsgId.innerHTML = apiData["msg"];
        }else{
            errMsgId.innerHTML = "";
        }
    })
    .catch(error => alert(error.message))
}