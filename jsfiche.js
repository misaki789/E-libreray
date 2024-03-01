
// let messageAlert=document.querySelector('.login-form-contairer');
// for (let i = 0; i < 3; i++) {
//   if (i== 1){
//   document.querySelector('#message-alert').onclick=()=>{
//     alert("Your password is incorrect ! you have 2 chance") 
//   }
// }
//   if(i==2){
//     document.querySelector('#message-alert').onclick=()=>{
//       alert("Your password is incorrect ! you have 1 chance") 
//     }
//   }
// }
let element = document.getElementById("message-alert");

for (let i = 0; i < 3; i++){
    if(i==1){
        element.addEventListener("click", clickFct);
        function clickFct() {
        alert("Your password is incorrect ! you have 2 chance");}
    }
    if(i==2){
        element.addEventListener("click", clickFct);
        function clickFct() {
           alert("Your password is incorrect ! you have 1 chance");}
        }
    if (i==3){
        element.addEventListener("click", clickFct);
        function clickFct(){
            for(let j= 30; j=0; i--){
                alert(j);window.setInterval(function(){
                    console.log(time-=1)
                    
            }
        }
    }
    

}

//  let time=31;

setTimeout("clickFct()", 1000)









