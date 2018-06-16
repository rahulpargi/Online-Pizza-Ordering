// functions assigned to onchange properties
document.getElementById('size').onchange = function() {
    // access form and value properties via this (keyword)
    var form = this.form;
    var total = parseFloat( this.value ) + parseFloat( form.elements['toppings_tot'].value );
    form.elements['total'].value = formatDecimal(total);
};

document.getElementById('toppings').onchange = function() {
    var form = this.form;
    form.elements['toppings_tot'].value = 0; // reset toppings total
    
    // getSelectedOptions function handles select-multiple
    // pass select list (this) and callback function
    getSelectedOptions( this, calcToppingsTotal );
    
    // add toppings total and size price to get total
    var tops_tot = parseFloat( form.elements['toppings_tot'].value );
    var size_price = parseFloat( form.elements['size'].value );
    form.elements['total'].value = formatDecimal(tops_tot + size_price );
};

// called for each selected option, adding its value to toppings total
function calcToppingsTotal(opt) {
    // get reference to hidden toppings total field
    var tot_fld = opt.form.elements['toppings_tot'];
    var val = parseFloat( tot_fld.value );
    // add value of opt to total
    tot_fld.value = val + parseFloat( opt.value );
}

// handles selected options in a select-multiple
function getSelectedOptions(sel, fn) {
    var opts = [], opt;
    
    for (var i=0, len=sel.options.length; i<len; i++) {
        opt = sel.options[i];
        if ( opt.selected ) {
            opts.push(opt);
            if (fn) {
                fn(opt);
            }
        }
    }
    return opts;
}

// format val to n number of decimal places
// modified version of Danny Goodman's (JS Bible)
function formatDecimal(val, n) {
    n = n || 2;
    var str = "" + Math.round ( parseFloat(val) * Math.pow(10, n) );
    while (str.length <= n) {
        str = "0" + str;
    }
    var pt = str.length - n;
    return str.slice(0,pt) + "." + str.slice(pt);
}