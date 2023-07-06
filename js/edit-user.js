
const userEditForm = document.querySelector(".edit-user-modal");
const userEditBtn = document.querySelectorAll('.edit-user-btn');
const userUpdateBtn = document.querySelector(".update-user-btn");


// form Id's
let userId  = document.querySelector('#prev_user_id');
let prev_password  = document.querySelector('#prev_user_password');
let prev_avatar  = document.querySelector('#prev_avatar');

let firstname  = document.querySelector('#firstname');
let lastname  = document.querySelector('#lastname');
let school  = document.querySelector('#school');
let stdClass  = document.querySelector('#student-class');
let age  = document.querySelector('#age');
let gender  = document.querySelector('#gender');
let country  = document.querySelector('#country');
let riwayat  = document.querySelector('#riwayat');
let username  = document.querySelector('#username');
let category  = document.querySelector('#category');
let biography  = document.querySelector('#biography');


// let password  = document.querySelector('#password');




userEditForm.onsubmit = (e) => {
    e.preventDefault(); //preventing from from submitting
}



userEditBtn.forEach(btn => {
    btn.onclick = () => {
        let user_id = btn.getAttribute('id');

        console.log(user_id);
        let xhr = new XMLHttpRequest();
        let url = "../php/fetch-edit-user.php?id="+user_id;

        xhr.open('GET', url, true)
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    
                        try {
                            let datas = JSON.parse(data);

                            userId.value = datas.id;
                            prev_avatar.value = datas.avatar;
                            prev_password.value = datas.userpassword;

                            firstname.value = datas.firstname;
                            lastname.value = datas.lastname;
                            school.value = datas.school;
                            stdClass.value = datas.class;
                            age.value = datas.age;
                            gender.value = datas.gender;
                            country.value = datas.country;
                            riwayat.value = datas.riwayat;
                            username.value = datas.username;
                            category.value = datas.category_id;
                            biography.value = datas.biography;
                            
                            
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



userUpdateBtn.onclick = () => {
    
    // let's start Ajax 
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "../php/edit-user-logic.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                
                if (data === "success") {
                    
                    location.href = "../backend/manage-users.php";
                } else {
                    console.log(data);

                }
                
            }
        }
    }
    let formData = new FormData(userEditForm); //creating new formData object
    xhr.send(formData);
}


