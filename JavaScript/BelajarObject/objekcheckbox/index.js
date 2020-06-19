function radio_box(form){
    var ket ="";
    var ket2 ="";
    if (form.bola.checked == true)
    {
        ket = "Bola";
    }
    if(form.tv.checked == true)
    {
        ket2 ="Tv";
    }
    
    alert('hobi anda adalah '+ket2+' '+ ket)
    
}