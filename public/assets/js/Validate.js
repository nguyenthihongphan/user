$('#validation').validate({
    onforcusout:false,
    onkeyup:false,
    onclick:false,
    rules:{
        "fisrtname":{
            required: true,
            maxlength:15,
        },
        "lastname":{
            required: true,
            maxlength:15,
        },
        "email":{
            required: true,
            email:true,
            valid_email:true,
        },
        "phone":{
            required: true,
            number:true,
            matches:"[0-9]+",minlength:10,
            digits:true,
        },
        "password":{
            required: true,
            minlength:8,
        },
        "re_password":{
            required: true,
            maxlength:15,
            equalTo:"#password",
        },
        "address":{
            required: true,
            minlength:2,
        },
        "birth":{
            required: true,
            date:true,
            minAge:10,
        },
    },
    messages:{
        "firstname":{
            required: "Firstname is required",
            minlength:"Please enter up to 15 characters",
        },
        "lastname": {
            required: "Lastname is required",
            minlength: "Please enter at least 8 characters"
        },
        "email": {
            required: "Email is required",
        },
        "password": {
            required: 'Password is required',
            minlength: "Please enter at least 8 characters"
            },
        "re-password": {
            equalTo: " Please enter your correct password",
            minlength: "Please enter at least 8 characters"				
            },
        "address": {
            required: "Address is required",
            maxlength: "Please enter up to 20 characters"
                },
        "phone": {
            required: "Phone is required",
            maxlength: 'Please enter up to 10 characters',
            digits: "Please type number only"
        },
    },
    highlight: function(element) {
        $(element).css('text', '#ffdddd');
    },
    unhighlight: function(element) {
        $(element).css('text', '#ffffff');
    }
})