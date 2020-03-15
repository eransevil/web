



function validateForm() {
        
    var b = document.forms["applyForm"]["first_name"].value;
    var c = document.forms["applyForm"]["last_name"].value;
    var d = document.forms["applyForm"]["email"].value;
    var e = document.forms["applyForm"]["password"].value;
    var f = document.forms["applyForm"]["category"].value;
    var g = document.forms["applyForm"]["about"].value;
    var h = document.forms["applyForm"]["image"].value;



    if (h == "" || b == "" ||c == "" ||d == "" ||e == "" ||f == "" ||g == "") {
        alert("נא למלא את כל השדות");
        return false;
    }
    
}

    
    

    





