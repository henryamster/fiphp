var btn = document.getElementById('submit');
document.getElementById('itemName').focus();
//btn.addEventListener('click', checkForm);
function checkForm() {
    resetBorders();
    var itemName = document.getElementById('itemName');
    var itemDesc = document.getElementById('itemDescription');
    var upc = document.getElementById('upc');
    var cPrice = document.getElementById('cPrice');;
    var adPrice = document.getElementById('adPrice');
    var bulk = document.getElementById('bulk').checked;
    var item = {};
    var alert = document.getElementById('alert');
    item.itemDesc= validate(itemDesc);
    item.itemName = validate(itemName);
    item.upc = validate(upc);
    item.cPrice = parseFloat(validate(cPrice));
    item.adPrice = parseFloat(validate(adPrice));
    var err = "";
    var valid = true;
    if (item.itemName == "") {
        itemName.style.border = "12px solid red";
        itemName.focus();
        err += "Please enter a valid item name. ";
        alert.innerHTML = err;
        return valid = false;

    }
    
       if (item.itemDesc == "") {
        itemDesc.style.border = "12px solid red";
        itemDesc.focus();
        err += "Please enter a valid item description. ";
        alert.innerHTML = err;
        return valid = false;

    }

    if (item.upc == '') {
        upc.style.border = "12px solid red";
        upc.focus();
        err += "Please enter a valid upc. ";
        alert.innerHTML = err;
        return valid = false;

    }

    if (item.cPrice == '' || !checkforNumber(item.cPrice)) {
        cPrice.style.border = "12px solid red";
        cPrice.focus();
        err += "Please enter a valid current price. ";
        alert.innerHTML = err;
        return valid = false;
    }

    if (item.adPrice == '' || !checkforNumber(item.adPrice)) {
        adPrice.style.border = "12px solid red";
        adPrice.focus();
        err += "Please enter a valid ad price. ";
        alert.innerHTML = err;
        return valid = false;
    }

    return valid;
}

function checkforEmpty(val) {
    //returns true if value is not empty
    return (val.value != "");
}

function checkforNumber(val) {
    return (typeof val == 'number') ? val : NaN;
}

function validate(val) {
    return (checkforEmpty(val.value)) ? val.value : false;
}

function resetBorders() {
    var ta= document.getElementById('itemDescription');
    var b = document.getElementsByTagName('input');
    for (var i = 0; i < b.length; i++) {
        b[i].style.border = "6px solid yellow";
    }
    ta.style.border = "6px solid yellow";
}