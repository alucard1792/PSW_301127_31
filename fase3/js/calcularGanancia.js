   
    function calcular_ganancia(){
        var vr_compra = parseFloat(document.frm_ganancia.vr_compra.value);
        var utilidad = parseFloat(document.frm_ganancia.utilidad.value);
        var iva = parseFloat(document.frm_ganancia.iva.value);
        document.frm_ganancia.ganancia.value = vr_compra * (utilidad/100)
        document.frm_ganancia.vr_venta.value = vr_compra * (((utilidad+iva)/100)+1)
    }
