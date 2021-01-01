function REGJISTRIMI() { 
    var name = document.forms["Formaperregjister"]["Emri"]; 
    var email = document.forms["Formaperregjister"]["Email"]; 
    var phone = document.forms["Formaperregjister"]["Telefoni"]; 
    var what = document.forms["Formaperregjister"]["Lloji"]; 
    var password = document.forms["Formaperregjister"]["Password"]; 
    var address = document.forms["Formaperregjister"]["Adresa"]; 

    if (name.value == "") { 
        window.alert("Ju lutem shkruani emrin."); 
        name.focus(); 
        return false; 
    } 

    if (address.value == "") { 
        window.alert("Ju lutem shkruani adresën."); 
        address.focus(); 
        return false; 
    } 

    if (email.value == "") { 
        window.alert( 
          "Ju lutem shkruani një email valide."); 
        email.focus(); 
        return false; 
    } 

    if (phone.value == "") { 
        window.alert( 
          "Ju lutem shkruani numrin e telefonit."); 
        phone.focus(); 
        return false; 
    } 

    if (password.value == "") { 
        window.alert("Ju lutem shkruani passwordin."); 
        password.focus(); 
        return false; 
    } 

    if (what.selectedIndex < 1) { 
        alert("Ju lutem shkruani kategorinë së cilës i përkisni."); 
        what.focus(); 
        return false; 
    } 

    return true; 
} 