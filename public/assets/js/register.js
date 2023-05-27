$(document).ready(()=>{
    
    $('#add-post').submit((e)=>{
        e.preventDefault()
        let dataArticle = $("#add-post")[0]
        let articleForm = new FormData(dataArticle)
        articleForm.append('cover',$("#cover").prop("files")[0])
        
        $.ajax({
            url:"http://localhost/alphablog/src/controllers/addpost.ctrl.php",
            type:"POST",
            dataType: "script",
            cache: false,
            contentType: false,
            processData: false,
            data: articleForm,
            success:function(data){
                console.log(data);
                let reponse = JSON.parse(data);
                if (reponse.status === true) {
                    $("#add-post")[0].reset();
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