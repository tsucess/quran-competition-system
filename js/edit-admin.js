
const adminEditForm = document.querySelector(".edit-admin-modal");
const adminEditBtn = document.querySelectorAll('.edit-admin-btn');
const adminUpdateBtn = document.querySelector(".update-admin-btn");


// form Id's
let adminId  = document.querySelector('#prev_admin_id');
let prev_password  = document.querySelector('#prev_admin_password');
let prev_avatar  = document.querySelector('#prev_avatar');

let firstname  = document.querySelector('#firstname');
let lastname  = document.querySelector('#lastname');
let username  = document.querySelector('#username');

// let password  = document.querySelector('#password');




adminEditForm.onsubmit = (e) => {
    e.preventDefault(); //preventing from from submitting
}



adminEditBtn.forEach(btn => {
    btn.onclick = () => {
        let admin_id = btn.getAttribute('id');

        console.log(admin_id);
        let xhr = new XMLHttpRequest();
        let url = "../php/fetch-edit-admin.php?id="+admin_id;

        xhr.open('GET', url, true)
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    
                        try {
                            let datas = JSON.parse(data);

                            adminId.value = datas.id;
                            firstname.value = datas.firstname;
                            lastname.value = datas.lastname;
                            username.value = datas.username;
                            prev_avatar.value = datas.avatar;
                            prev_password.value = datas.userpassword;
                            
                            console.log(data);
                            
                        } catch (error) {
                            console.log(error);
                        }
                      
                        
                }
            }
        }
        xhr.send();

    }
});



adminUpdateBtn.onclick = () => {
    
    // let's start Ajax 
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "../php/edit-admin-logic.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                
                if (data === "success") {
                    
                    location.href = "../backend/manage-admin.php";
                } else {
                    console.log(data);

                }
                
            }
        }
    }
    let formData = new FormData(adminEditForm); //creating new formData object
    xhr.send(formData);
}


