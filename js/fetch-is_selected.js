

let selectedQuestion; 
let btnId;

setInterval(() =>{
    // let's start Ajax 
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("GET", "php/fetch-selected-question.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                
                try {
                    let datas = JSON.parse(data);
                    
                    datas.forEach( item => {

                        let selectedValue = item.is_selected;
                        let selectedrowId = item.id; 

                        questionBtn.forEach(btn => {
                            btnId = btn.getAttribute('id');
                            
                                if( (selectedrowId ===  btnId) && (selectedValue === "1")){
                                    
                                    btn.disabled = true;
                                    btn.classList.remove("question_no");
                                    btn.classList.add("disable_no");
                                    }
                            });
                    });
                        
                    
                } catch (error) {
                    console.log(error);
                }
                
            }
        }
    }

     xhr.send(); //sending the form data to php

      }, 300); // this function will run after every 500ms








