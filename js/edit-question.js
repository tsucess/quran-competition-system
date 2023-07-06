
const questionEditForm = document.querySelector(".edit-question-modal");
const questionEditBtn = document.querySelectorAll('.edit-question-btn');
const questionUpdateBtn = document.querySelector(".update-question-btn");


// form Id's
let questionId  = document.querySelector('#prev_question_id');
let question  = document.querySelector('#question2');
let questionUrl  = document.querySelector('#question-url');
let category  = document.querySelector('#category2');




questionEditForm.onsubmit = (e) => {
    e.preventDefault(); //preventing from from submitting
}



questionEditBtn.forEach(btn => {
    btn.onclick = () => {
        let cate_id = btn.getAttribute('id');

        let xhr = new XMLHttpRequest();
        let url = "../php/fetch-edit-question.php?id="+cate_id;

        xhr.open('GET', url, true)
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    
                        try {
                            let datas = JSON.parse(data);

                            questionId.value = datas.id;
                            category.value = datas.category_id;
                             question.value = datas.question;
                             questionUrl.value = datas.question_url;

                             if(question.value === "NULL"){
                                questionUrl.classList.add('show');
                                question.classList.remove('show');
                            } else {
                                question.classList.add('show');
                                questionUrl.classList.remove('show');

                             }
                            
                            //  question.innerHTML = question.value;
                            
                        } catch (error) {
                            console.log(error);
                        }
                      
                        
                }
            }
        }
        xhr.send();

    }
});



questionUpdateBtn.onclick = () => {
    
    // let's start Ajax 
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "../php/edit-question-logic.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                
                if (data === "success") {
                    
                    location.href = "../backend/manage-questions.php";
                } else {
                    console.log(data);

                }
                
            }
        }
    }
    let formData = new FormData(questionEditForm); //creating new formData object
    xhr.send(formData);
}


