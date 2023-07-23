$(document).ready(()=>{
    
    $('#add-sub').submit((e)=>{
        
        e.preventDefault()
        let dataCategory = $('#add-sub')[0]
        let formCategory = new FormData(dataCategory)

        $.ajax({
            url:"https://alpha-academy.eksponansyel.com/src/controllers/addsub.ctrl.php",
            type:"POST",
            dataType: "script",
            cache: false,
            contentType: false,
            processData: false,
            data: formCategory,
            success:function(data){
                console.log(data);
                let reponse = JSON.parse(data);
                if (reponse.status === true) {
                    $("#add-sub")[0].reset();
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