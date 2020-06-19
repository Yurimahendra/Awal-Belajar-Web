function radio_box(form){
    var ket ="";
    var ket2 ="";
    if (form.wanita.checked == true)
    {
        ket = "Wanita";
    }
    if(form.pria.checked == true)
    {
        ket2 ="Pria";
    }
    
    alert('anda adalah seorang '+ket2+''+ ket)
    
}