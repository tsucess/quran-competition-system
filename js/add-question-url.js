const questionUrlform = document.querySelector('.add-question-url-modal');
const addUrlbtn = document.querySelector('.add-url-btn');
// const errorText = document.querySelector('.error-txtmodal');


questionUrlform.onsubmit = (e) =>{
    e.preventDefault(); // preventing form from submitting;
}

addUrlbtn.onclick = () =>{

    // ajax start's here 
    let url = "../php/add-question-url-logic.php";
    let method = "POST";

    let XHR = new XMLHttpRequest();
    XHR.open(method, url, true);
    XHR.onload = () =>{

        if(XHR.readyState === XMLHttpRequest.DONE){
            if(XHR.status === 200){
                let data = XHR.response;
                if(data === "success"){
                    errorText.classList.add("matched");
                    errorText.textContent = "Question Link successully Uploaded";
                    errorText.style.display = "block";
                    location.href = "manage-questions.php";
                    console.log(data);
                } else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                  
                    console.log(data);

                }

            }
        }

    }
    // send the form data through ajax to php 
    let formData = new FormData(questionUrlform);
    XHR.send(formData);
}