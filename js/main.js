let overlay=document.querySelector(".overlay-login");
let btn_login=document.querySelector(".btn-open").addEventListener("click",function(){
    overlay.classList.add("d-block")
    let overlay_close=document.querySelector(".overlay-close1").addEventListener("click",function(){
        overlay.classList.remove("d-block")
    })
})
let overlay_sign_up=document.querySelector(".overlay-sign-up");
let overlay_sign_up_close=document.querySelector(".overlay-close2")
let btn_sign_up=document.querySelector(".btn-sign-up").addEventListener("click",function(){
    overlay_sign_up.classList.add("d-block");
    overlay_sign_up_close.addEventListener("click",function(){
        overlay_sign_up.classList.remove("d-block");
    })
})
let sign_up_in_login_modal=document.querySelector(".sign_up_pop_up").addEventListener("click",function(){
    overlay_sign_up.classList.add("d-block");
    overlay_sign_up_close.addEventListener("click",function(){
        overlay_sign_up.classList.remove("d-block");
    })
});
function ajaxCallBack(ime_fajla,objekat,rezultat){
    $.ajax({
        url:"/moj%20sajt/pages/"+ime_fajla,
        method:"post",
        data:objekat,
        success:rezultat,
        error:function(xhr){
            console.log(xhr);
        }
    })
}

//regular expressions 
let regexName = /^[A-ZŠĐŽĆČ][a-zšđžćč]{2,15}(\s[A-ZŠĐŽĆČ][azšđžćč]{2,15})?$/;
let regexEmail=/^([a-z]{3,11}(\d)*)(\.)?([a-z]{3,11}(\d)*)\@(gmail.com|hotmail.com|yahoo.com|outlook.com)$/;
 let regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
 let regexFullName = /^([A-ZŠĐŽĆČ][a-zšđžćč]{2,15})\s([A-ZŠĐŽĆČ][a-zšđžćč]{2,15}){0,2}$/;
 let regexAddress = /^[\w\.]+(,?\s[\w\.]+){2,8}$/;
 let regexSubject=/^[A-zšđžćč]{3,}$/

 var brGresaka;
let sign_in_button=document.querySelector("#sign-in").addEventListener("click",ProveraPodaka);
 function ProveraPodaka(){
    brGresaka=0;
    let first_name=document.querySelector("#first_name");
    let last_name=document.querySelector("#last_name");
    let email=document.querySelector("#email2");
    let password=document.querySelector("#password2");
    let re_password=document.querySelector("#re-password");
    ValidateRegex(first_name,regexName);
    ValidateRegex(last_name,regexName);
    ValidateRegex(email,regexEmail);
    ValidateRegexPasswordRePassword(regexPassword,password,re_password);
    if(brGresaka==0){
        let objekat={
            "first_name":first_name.value,
            "last_name":last_name.value,
            "email":email.value,
            "password":password.value,
            "btn":true
        }
        ajaxCallBack("register.php",objekat,function(rezultat){
            console.log(rezultat);
        })
    }
    else{
       alert("Ima gresaka");
    }

    
    function ValidateRegexPasswordRePassword(regex,password,re_password){
        if(!regex.test(password.value)){
          brGresaka++;
          password.classList.add(".border border-danger");
        }
        if(password.value!=re_password.value){
            brGresaka++;
            re_password.nextElementSibling.classList.remove("d-none");
            re_password.classList.add(".border border-danger");
        }
        
    }
}
 function DohvatanjePodataka(){
    brGresaka=0
    let input_name=document.getElementById("fullname");
    let input_email=document.getElementById("emailcontact");
    let input_subject=document.getElementById("subject");
    let text_area=document.getElementById("textarea");
    ValidateRegex(input_name,regexFullName);
    ValidateRegex(input_email,regexEmail);
    ValidateRegex(input_subject,regexSubject);
    ValidateTextArea(text_area);
    console.log(brGresaka)
    if(brGresaka==0){
        
        
    }
    else{
    
    }
}

function ProveraRadioButtonListe(niz){
    let upozorenje=document.querySelector("#upozorenje1");
    var pomocna="";
    for(var element of niz){
        if(element.checked){
            pomocna=element.value;
        }
    }
    if(pomocna==""){
        upozorenje.classList.remove("d-none");

    }
    else{
        upozorenje.classList.add("d-none");
        return pomocna;
    }
}
function ProveraCheckBoxListe(niz){
    let pomocni_niz=[];
    let upozorenje=document.querySelector("#upozorenje2");
    for(var element of niz){
        if(element.checked){
            pomocni_niz.push(element.value);
        }
    }
    if(pomocni_niz.length==0){
        upozorenje.classList.remove("d-none");
    }
    else{
        upozorenje.classList.add("d-none");
        return  pomocni_niz;
    }
}
function ValidateRegex(input,regex){
    if(regex.test(input.value)){
        input.nextElementSibling.classList.add("d-none");
    }
    else{
        
        input.nextElementSibling.classList.remove("d-none");
        brGresaka++;
    }
}
function ValidateTextArea(textarea){
    if(textarea.value==""){
        brGresaka++
        textarea.nextElementSibling.classList.remove("d-none");
    }
    else{
        textarea.nextElementSibling.classList.add("d-none");
    }
}
//let button_submit=document.querySelector(".submit").addEventListener("click",ProveraPodatakaLogin)

function ProveraPodatakaLogin(){
    brGresaka=0;
    let email_input=document.querySelector("#exampleInputEmail1");
    let password_input=document.querySelector("#exampleInputPassword1");
    ValidateRegex(email_input,regexEmail);
    ValidateRegex(password_input,regexPassword);
    if(brGresaka==0){
       return true;
    }
    else{
        return false;
    }
}


if(document.location.href.includes("/contact.php")){
    
    let contact_submit=document.getElementById("contactsubmit").addEventListener("click",DohvatanjePodataka);







}
console.log(document.location.href);
if(document.location.href.includes("/shop.php")){
 function Filtriranje(){
    let input_value=DohvatanjeUnetogStringa();
    console.log(input_value);
    let brand_id=DohvatanjeNiza("brands li input");
    let gender_id=DohvatanjeNiza("gender li input");
    console.log(brand_id);
    console.log(gender_id);
    let objekat={
        "brand":brand_id,
        "gender":gender_id,
        "pretraga":input_value
    }
    ajaxCallBack("logic.php",objekat,function(rezultat){
        IspisProizvoda(rezultat);
    })
 }
    $(document).on("click","#brands li input",Filtriranje);
    $(document).on("click","#gender li input",Filtriranje);
    $(document).on("blur","#search",Filtriranje);

    function DohvatanjeNiza(x){
        let pomocni_niz=[];
        console.log(x);
        $('#'+x+':checked').each(function(){
            console.log("usao");
            pomocni_niz.push($(this) .val());
    })
    console.log(pomocni_niz);
    return pomocni_niz;
}
function DohvatanjeUnetogStringa(){
    let input_value=document.querySelector("#search").value;
    console.log(input_value)
    if(input_value!=undefined){
        return input_value;
    }
}
function IspisProizvoda(niz){
    console.log(niz);
    let html="<h1>No products for that filters</h1>";
    if(niz.length==0){
        $(".left-ads-display").html(html);    
    }
    else{
        $(".left-ads-display").html(niz);
    }
    alert("RADI")
   
}
}
if((document.location.href.includes("/poll.php"))){
    let anketa_button=document.querySelector("#poll-asnwers-send").addEventListener("click",DohvatanjePodatakaAnkete);
function DohvatanjePodatakaAnkete(){
    brGresaka=0;
    let nizCheckboxova=document.getElementsByName("pitanja");
    let nizRadioButtona=document.getElementsByName("pitanjeradio");
    var niz_checkbox_vrednosti=[];
    var radio_value="";
    radio_value=ProveraRadioButtonListe(nizRadioButtona);
    niz_checkbox_vrednosti=ProveraCheckBoxListe(nizCheckboxova);
    if(niz_checkbox_vrednosti!=undefined && radio_value!=undefined){
        let objekat={
            "checkbox":niz_checkbox_vrednosti,
            "radio":radio_value,
            "btnKlik":true
        }    
    ajaxCallBack("obrada-ankete.php",objekat,function(rezultat){
        if(rezultat){
            document.querySelector("#messagePoll").classList.remove("d-none");
        }
    })
    }
}
}




