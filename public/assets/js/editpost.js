$(document).ready(()=>{
    
    $('#edit-post').submit((e)=>{
        e.preventDefault()
        let dataEdit = $("#edit-post")[0]
        let editForm = new FormData(dataEdit)
        $.ajax({
            url:"http://localhost/alphablog/src/controllers/editpost.ctrl.php",
            type:"POST",
            dataType: "script",
            cache: false,
            contentType: false,
            processData: false,
            data: editForm,

            success:function(data){
                let reponse = JSON.parse(data);
                if (reponse.status === true) {
                    $("#edit-post")[0].reset();
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
                    location.reload()
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