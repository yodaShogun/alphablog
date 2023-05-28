$(document).ready(()=>{
    
    $('#register-form').submit((e)=>{
        e.preventDefault()
        let registrationData = $("#register-form")[0]
        let registrationForm = new FormData(registrationData)
        registrationForm.append('profile',$("#profile").prop("files")[0])
        
        $.ajax({
            url:"http://localhost/alphablog/src/controllers/userRegistration.ctrl.php",
            type:"POST",
            dataType: "script",
            cache: false,
            contentType: false,
            processData: false,
            data: registrationForm,
            success:function(data){
                console.log(data);
                let reponse = JSON.parse(data);
                if (reponse.status === true) {
                    $("#register-form")[0].reset();
                    Toastify({
                        text: reponse.message,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                    }).showToast();
                    window.location.replace("http://localhost/alphablog/views/login.php")
                } else {
                    Toastify({
                        text: reponse.message,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        style: {
                        background:
                            "linear-gradient(to right,  rgba(255,0,0,1), rgba(255,0,0,0.5))",
                        },
                    }).showToast();
                }
            }
        })
    })
})