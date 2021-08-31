(function() {
    //Projects accordion add Event listener
var acc = document.getElementsByClassName("Projects__Tab-Box-Title");
var i,boxes,links;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {

    if(hasclass(this.parentElement,"Projects__Tab-Boxes-Active")){

        this.parentElement.className=this.parentElement.className.replace(" Projects__Tab-Boxes-Active","");
        this.parentElement.querySelector('.Projects__Tab-Box-Toggle').className= this.parentElement.querySelector('.Projects__Tab-Box-Toggle').className.replace("Projects__Tab-Box-Toggle-Active","");

    }else{

        boxes = document.getElementsByClassName("Projects__Tab-Boxes");
    for (i = 0; i < boxes.length; i++) {
        boxes[i].className = boxes[i].className.replace(" Projects__Tab-Boxes-Active", "");
        boxes[i].querySelector('.Projects__Tab-Box-Toggle').className= boxes[i].querySelector('.Projects__Tab-Box-Toggle').className.replace(" Projects__Tab-Box-Toggle-Active","");
    }
    this.parentElement.className+=" Projects__Tab-Boxes-Active";
    this.parentElement.querySelector('.Projects__Tab-Box-Toggle').className+=" Projects__Tab-Box-Toggle-Active";


    }
  });
}


//file inputs add event listener
var fileinputs = document.getElementsByClassName("Register-Form__fileinput");
var fileinputscount;
for (fileinputscount = 0; fileinputscount < fileinputs.length; fileinputscount++) {
    fileinputs[fileinputscount].addEventListener("change", function() {
        if(this.files[0].size>1024000){
            this.value=null;
            this.nextElementSibling.className="Register-Form__input-error-msg Register-Form__input-error-msg--active";
            addFormPara(this.nextElementSibling,"فایل بزرگتر از حد مجاز است");
            this.parentElement.className=("Register-Form__fileinput-box Register-Form__fileinput-box--danger")
            this.parentElement.querySelector('p').innerHTML="";
        }else{
            this.nextElementSibling.className="Register-Form__input-error-msg";
            addFormPara(this.nextElementSibling,"حداکثر حجم مجاز فایل  1 مگابایت باشد");
            this.parentElement.className="Register-Form__fileinput-box Register-Form__fileinput-box--active";
            var fullPath =this.value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
        addFormPara(this.parentElement.querySelector('p'),filename);
    }
        }
    });
  }
 })();






//meeting structure function
  function openMStab(evt, TabName) {
    var i, MStabcontent, MStablinks;
    MStabcontent = document.getElementsByClassName("Meeting-structure__Content-Boxes");
    for (i = 0; i < MStabcontent.length; i++) {
        MStabcontent[i].style.display = "none";
    }
    MStablinks = document.getElementsByClassName("Meeting-structure__Tab-Button");
    for (i = 0; i < MStablinks.length; i++) {
        MStablinks[i].className = MStablinks[i].className.replace(" Meeting-structure__Tab-Button--active", "");
    }
    document.getElementById(TabName).style.display = "block";
    evt.currentTarget.className += " Meeting-structure__Tab-Button--active";
  }
function hasclass(element,cName){
    return element.classList.contains(cName)
}

//Projects tabs function
function openTab(evt, TabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("Projects__Tab");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName(" Projects__Tabs-Buttons-links");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" Projects__Tabs-Buttons-links-active", "");
    }
    document.getElementById(TabName).style.display = "block";
    evt.currentTarget.className += " Projects__Tabs-Buttons-links-active";
  }

  function addFormPara(selector,text) {
    selector.innerHTML=text;
}

function openOptions(selector){
    selector.parentElement.className="Register-Form__select Register-Form__select--active";
    selector.style.display="none";
    selector.parentElement.querySelector('.Register-Form__options-box').style.display="block";

}
(function() {
    var opt = document.getElementsByClassName("Register-Form__option");
    var i,options;
for (i = 0; i < opt.length; i++) {
    opt[i].addEventListener("click", function() {
        var pelement=this.parentElement;
        var gpelement=pelement.parentElement;
        pelement.setAttribute("style","display:none;");
        gpelement.querySelector('.Register-Form_type-selected').style.display="block";
        gpelement.querySelector('.Register-Form_type-selected').innerHTML=this.innerHTML;
        pelement.querySelector('.Register-Form__select-val').value=this.innerHTML;
    });
  }
})();

(function() {

for (var i = 0; i < document.getElementsByClassName("Register-Form__input").length; i++) {
    document.getElementsByClassName("Register-Form__input")[i].addEventListener("keyup", Register_form_validate)
  }
for ( var i = 0; i < document.getElementsByClassName("Register-Form__fileinput").length; i++) {
    document.getElementsByClassName("Register-Form__fileinput")[i].addEventListener("change",Register_form_validate)
}
})();

//Register form required fields validate
function Register_form_validate(){
    var errors=0;

    for(var i=0;i< document.getElementsByClassName('Register-Form__input--required').length;i++){
        if( document.getElementsByClassName('Register-Form__input--required')[i].value==""){
            errors++
        }
    }
    for(var i=0;i< document.getElementsByClassName('Register-Form__fileinput--required').length;i++){
        if( document.getElementsByClassName('Register-Form__fileinput--required')[i].value==""){
            errors++
        }
    }
    if(errors==0){
        document.getElementById('Register-form__submitbtn').className="Register-Form__submit-btn Register-Form__submit-btn--active";
        document.getElementById('Register-form__submitbtn').addEventListener("click",Register_form_final_validate);

    }else{
        document.getElementsByClassName('Register-Form__submit-btn').className="Register-Form__submit-btn";
    }

}

function Register_form_final_validate(){
    var errors=0;

    for(var i=0;i< document.getElementsByClassName('Register-Form__input').length;i++){
        if( document.getElementsByClassName('Register-Form__input')[i].value.length > 60){
            document.getElementsByClassName('Register-Form__input')[i].nextElementSibling.className="Register-Form__input-error-msg Register-Form__input-error-msg--active"
            document.getElementsByClassName('Register-Form__input')[i].nextElementSibling.innerHTML="تعداد کاراکتر باید کمتر از 60 باشد";
            document.getElementsByClassName('Register-Form__input')[i].classList+=" Register-Form__input--error";
            }else{
                document.getElementsByClassName('Register-Form__input')[i].nextElementSibling.innerHTML="";
                document.getElementsByClassName('Register-Form__input')[i].classList.remove("Register-Form__input--error");

            }
        }
        if(errors==0){

            for(var i=0;i< document.getElementsByClassName('Register-Form__input-email').length;i++){
                if(!validateEmail(document.getElementsByClassName('Register-Form__input-email')[i].value)){
                    document.getElementsByClassName('Register-Form__input-email')[i].classList+=" Register-Form__input--error";
                    document.getElementsByClassName('Register-Form__input-email')[i].nextElementSibling.className="Register-Form__input-error-msg Register-Form__input-error-msg--active";
                    document.getElementsByClassName('Register-Form__input-email')[i].nextElementSibling.innerHTML="فرمت ایمیل اشتباه است";
                    errors++
                }else{
                   // document.getElementsByClassName('Register-input-email')[i].classList.remove("Register-Form__input--error");
                    document.getElementsByClassName('Register-Form__input-email')[i].nextElementSibling.className="Register-Form__input-error-msg";
                    document.getElementsByClassName('Register-Form__input-email')[i].nextElementSibling.innerHTML="";
                }
            }
            for(var i=0;i< document.getElementsByClassName('Register-Form__input-phone').length;i++){
                if(validatePhone(document.getElementsByClassName('Register-Form__input-phone')[i].value )){

                    document.getElementsByClassName('Register-Form__input-phone')[i].classList+=" Register-Form__input--error";
                    document.getElementsByClassName('Register-Form__input-phone')[i].nextElementSibling.className="Register-Form__input-error-msg Register-Form__input-error-msg--active";
                    document.getElementsByClassName('Register-Form__input-phone')[i].nextElementSibling.innerHTML="شماره تلفن باید به صورت عددی باشد";
                    errors++
                }else{
                    document.getElementsByClassName('Register-Form__input-phone')[i].classList.remove("Register-Form__input--error");
                    document.getElementsByClassName('Register-Form__input-phone')[i].nextElementSibling.className="Register-Form__input-error-msg";
                    document.getElementsByClassName('Register-Form__input-phone')[i].nextElementSibling.innerHTML="";

                }
            }
 }
 if(errors==0){

     document.getElementById('Register_Form').submit();
 }


}
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function validatePhone(phone){
    const re = /\D/;
    return re.test(String(phone).toLowerCase());
}




//gallery function




function gallery_slide(slctor,position){
    if(position==1){
        var slct=document.getElementsByClassName('Footer-gallery__boxes')[0].style.right;
        var right=Math.abs(parseInt(slct.replace(/px/,"")));
        var lenght=document.getElementsByClassName('Footer-gallery__boxes-item').length*120;
    if(lenght!=right+840){
        document.getElementsByClassName('Footer-gallery__boxes')[0].style.right=(parseInt(slct.replace(/px/,""))-120)+"px";
        slctor.parentElement.querySelector('.Footer-gallery__boxes-right-sign').className="Footer-gallery__boxes-right-sign";
    }else{
        slctor.classList+=" Footer-gallery__boxes-left-sign--deactive";
    }
    }
    if(position==0){
        if(document.getElementsByClassName('Footer-gallery__boxes')[0].style.right!="0px"){
        var slct2=document.getElementsByClassName('Footer-gallery__boxes')[0].style.right;
        document.getElementsByClassName('Footer-gallery__boxes')[0].style.right=(parseInt(slct2.replace(/px/,""))+120)+"px";
        slctor.parentElement.querySelector('.Footer-gallery__boxes-left-sign').className="Footer-gallery__boxes-left-sign";
        }else{
            slctor.classList+=" Footer-gallery__boxes-right-sign--deactive";
        }
     }


}



