var btn = document.getElementById('submit');
//btn.addEventListener('click', checkForm);
function checkForm() {
  resetBorders();
    var itemName = document.getElementById('itemName');
    var upc = document.getElementById('upc');
    var cPrice = document.getElementById('cPrice');;
    var adPrice = document.getElementById('adPrice');
    var bulk = document.getElementById('bulk').checked;
    var item = {};

    item.itemName = validate(itemName);
    item.upc = validate(upc);
    item.cPrice = validate(cPrice);
    item.adPrice = validate(adPrice);

    var valid = true;
    if (item.itemName == "") {
        itemName.style.border = "12px solid red";
        itemName.focus();
        return valid = false;
    }

    if (item.upc == '') {
        upc.style.border = "12px solid red";
        upc.focus();
        return valid = false;
    }

    if (item.cPrice == '') {
        cPrice.style.border = "12px solid red";
        cPrice.focus();
        return valid = false;
    }

    if (item.adPrice == '') {
        adPrice.style.border = "12px solid red";
        adPrice.focus();
        return valid = false;
    }
return valid;
}

function checkforEmpty(val) {
    //returns true if value is not empty
    return (val.value != "");
}

function checkforNumber(val) {
    return (typeof val.value == 'number');
}

function validate(val) {
    return (checkforEmpty(val.value)) ? val.value : false;
}

function resetBorders(){
     var b= document.getElementsByTagName('input');
    for (var i = 0; i < b.length;i++){
        b[i].style.border= "6px solid yellow";
    }
}