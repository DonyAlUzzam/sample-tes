
cekRemote = () =>{
    $('#fulltime').is(':checked')
}


moreJob = () =>{
    $("#show_more").addClass('d-none')
    $("#show_less").removeClass('d-none')
}

lessJob = () =>{
   $("#show_more").removeClass('d-none')
   $("#show_less").addClass('d-none')

}

$(document).ready(function () {
    if(window.location.search == '?page=all'){
        $("#show_more").addClass('d-none')
        $("#show_less").removeClass('d-none')
    }else{
        $("#show_more").removeClass('d-none')
        $("#show_less").addClass('d-none')
    }
                    
})



