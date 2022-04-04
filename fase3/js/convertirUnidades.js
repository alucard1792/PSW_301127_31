function conversor_unidades(){
    var a = document.f1.a.value;
    var b = document.f1.b1.value;
    var x = document.f1.b2.value;
    var r = document.f1.c.value;

    r = (parseFloat(a) * parseFloat(b))/parseFloat(x);
    document.f1.c.value = r;
}