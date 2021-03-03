//namevalidation starts
function name_validation(){
    'use strict';
    var name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    if(name_length<5 || name_length>25)
    {
    document.getElementById('name_err').innerHTML = 'Name must not be less than 5 characters and greater than 25 characters';
    name.focus();
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid name';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }
    //name validation ends


    //CPU validation starts
    function CPU_validation(){
    'use strict';
    var cpu_name = document.getElementById("cpu");
    var cpu_value = document.getElementById("cpu").value;
    var cpu_length = cpu_value.length;
    if(cpu_length < 4 || !cpu_length > 20)
    {
    document.getElementById('cpu_err').innerHTML = 'CPU must be 4 chracters long minimum and 20 characters maximum.';
    cpu_name.focus();
    document.getElementById('cpu_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('cpu_err').innerHTML = 'Valid CPU';
    document.getElementById('cpu_err').style.color = "#00AF33";
    }
    }
    //CPU validation ends


    //Date validation starts
    function date_validation(){
    'use strict';
    var dateReg = /^(\d{4})(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/;
    var date_name = document.getElementById("date");
    var date_value = document.getElementById("date").value;
    if(!date_value.match(dateReg))
    {
    document.getElementById('date_err').innerHTML = 'You must enter a Date in the format YYYY-MM-DD.';
    date_name.focus();
    document.getElementById('date_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('date_err').innerHTML = 'Valid date';
    document.getElementById('date_err').style.color = "#00AF33";
    }
    }
    //Date validation ends


    //price validation starts
    function price_validation(){
    'use strict';
    var priceformat = /^-?(\d{1,3})(\.\d{1,2})?$/;
    var price_name = document.getElementById("price");
    var price_value = document.getElementById("price").value;
    var price_length = price_value.length;
    if(!price_value.match(priceformat) || price_length === 0)
    {
    document.getElementById('price_err').innerHTML = 'This is not a valid price e.g "199.99" / "200" .';
    price_name.focus();
    document.getElementById('price_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('price_err').innerHTML = 'Valid Price';
    document.getElementById('price_err').style.color = "#00AF33";
    }
    }
    //price validation ends

    //category id validation starts
    function category_validation(){
        'use strict';
        var idformat = /^[1-4]$/;
        var id_name = document.getElementById("catID");
        var id_value = document.getElementById("catID").value;
        var id_length = id_value.length;
        if(!id_value.match(idformat) || id_length === 0)
        {
        document.getElementById('id_err').innerHTML = 'This is not a valid id the number has to be between 1-4.';
        id_name.focus();
        document.getElementById('id_err').style.color = "#FF0000";
        }
        else
        {
        document.getElementById('id_err').innerHTML = 'Valid Category ID';
        document.getElementById('id_err').style.color = "#00AF33";
        }
        }
        //category id validation ends