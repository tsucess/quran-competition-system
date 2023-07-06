let table = document.querySelector('#edit-feature');
let cells = table.querySelectorAll(' #edit-feature tbody td');


cells.forEach( cell => {
        cell.onclick = function (){
                
                if(this.hasAttribute('data-clicked')){
                        return;
                    }
                    
            this.setAttribute('data-clicked', 'yes');
            this.setAttribute('data-text', this.textContent);
            let user_id = this.parentElement.getAttribute('id');
            let id = this.getAttribute('id');

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('name', id);
            input.value = this.textContent;
            input.style.width = this.offsetWidth - (this.clientLeft * 2) + "px";
            input.style.height = this.offsetHeight - (this.clientTop * 2) + "px";
            input.style.border = "0px";
            input.style.fontFamily = "inherit";
            input.style.fontSize = "inherit";
            input.style.textAlign = "inherit";
            input.style.backgroundColor = "LightGoldenRodYellow";
            
            input.onblur = function(){
                let td = input.parentElement;
                let orig_text = input.parentElement.getAttribute('data-text');
                let current_text = this.value;
                
                if(orig_text != current_text){
                    // there are changes in the cells text 
                    // save our new data to db using ajax 
                    td.removeAttribute('data-clicked');
                    td.removeAttribute('data-text');
                    td.innerHTML = current_text;
                    td.style.cssText = "padding: 5px";
                    // console.log(orig_text + ' is changed to ' + current_text);

                }else{
                    td.removeAttribute('data-clicked');
                    td.removeAttribute('data-text');
                    td.innerHTML = orig_text;
                    td.style.cssText = "padding: 5px";
                    // console.log('No changes made');
                }



                let  score;
                let comment;

                if(id === "score"){
                     score = current_text;
                     comment = 'NULL';

                } else if(id === "comment") {
                    comment = current_text;
                } else{
                    return;
                }
          
                  // Ajax to Update scores and comment column
                      let xhr = new XMLHttpRequest(); //creating XML object
                      xhr.open("POST", "../php/update-result-logic.php", true);
                      xhr.onload = () => {
                          if (xhr.readyState === XMLHttpRequest.DONE) {
                              if (xhr.status === 200) {
                                  let data = xhr.response;
          
                                  if (data === "success") {
                                      console.log('Result updated successfully');
                                      
                                  } else {
                                      console.log(data);
                                  }
                                  
                              }
                          }
                      }
                      
                      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                      xhr.send('id=' + user_id +'&score=' + score + '&comment=' + comment);

            }
            this.textContent = " ";
            this.style.cssText = "padding: 0px 0px";
            this.append(input);
            this.firstElementChild.select();
        }
});


