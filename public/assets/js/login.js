$(document).ready(()=>{
    
    $('#granted').submit((e)=>{
        e.preventDefault()
        let dataLogin = $("#granted")[0]
        let loginForm = new FormData(dataLogin)
        $.ajax({
            url:"http://localhost/alphablog/src/controllers/loginUser.ctrl.php",
            type:"POST",
            dataType: "script",
            cache: false,
            contentType: false,
            processData: false,
            data: loginForm,
            success:function(data){
                console.log(data);
                let reponse = JSON.parse(data);
                if (reponse.status === true) {
                    $("#granted")[0].reset();
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
                    window.location.replace("http://localhost/alphablog/views/admin")
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