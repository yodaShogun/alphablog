Notification.requestPermission().then(perm=>{
    if(perm === "granted"){
        const notifyUser = new Notification("AlphaAcademy Notification",{
            body:"New Article Released",

        })

        // window.addEventListener("load",()=>{
        //     alert(notifyUser)
        // })
    }
})

