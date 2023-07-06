const form = document.querySelector(".signin-form"),
signinBtn = document.querySelector(".signin-btn");
let errorText = document.querySelector(".error-txt");


form.onsubmit = (e) =>{
    e.preventDefault(); //preventing from from submitting
}

signinBtn.onclick = () =>{
    // let's start Ajax 
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "./php/signin-logic.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if (data === "adminsuccess") {

                    location.href = "backend/index.php";
                    // console.log(data);
                } else if(data === "usersuccess") {
                    
                    location.href = "user-category.php";
                }
                else{
                    errorText.textContent = data; 
                    errorText.style.display = "block";
                    errorText.classList.remove("matched");
                    console.log(data);
                }
            }
        }
    }
    let formData =  new FormData(form); //creating new formData object
    xhr.send(formData); //sending the form data to php
}