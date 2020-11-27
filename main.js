let submitDataEl = document.getElementById("#submit-data");

let name = document.getElementById("#name");
let emailAddress = document.getElementById("#emailAddress");
let interests = document.getElementById("#interests");
let userRole = document.getElementById("#userRole");

submitDataEl.addEventListener("click", submitDataEv, false);

function submitDataEv(event){
    console.log(name.value); //see if function is working ;)

    var xhr = new XMLHttpRequest(); 
    xhr.onreadystatechange = function(e){     
        console.log(xhr.readyState);     
        if(xhr.readyState === 4){        
            console.log("CHECK DB TABLE");// modify or populate html elements based on response.
           } 
    };
    
    const requestData = 'name=${form.name.value}&email=${form.emailAddress.value}&userRoles=${form.roles.value}';


    xhr.open("POST", "process-contact-form.php", true); 
    //true means it is asynchronous 
    // Send variables through the url
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(requestData);
}


function showDataEv(event){
    console.log("let's show data");
    var xhr = new XMLHttpRequest(); 
xhr.onreadystatechange = function(e){     
	console.log(xhr.readyState);     
	if(xhr.readyState === 4){        
        console.log(xhr.responseText);// modify or populate html elements 
        //based on responseText = string    
        //convert string to native object for DOM maniuplation
        var response = JSON.parse(xhr.responseText); 
        console.log(response);
        //console.log(response[i].name); //name is column Name

        //DOM MANIPULATION
        let responseDataEl= document.querySelectorAll("#submission-data");
        for (var i=0; i<response.length; i++){
            //create elements
        let columnNames = ["name","emailAddress", "interests", "userRole"];
        let pTag = document.createElement("p");

        let submission = document.createTextNode(response[i].columnNames[i]);
        pTag.appendChild(submission); //<p>submission data</p>

        //show in html page
        responseDataEl.appendChild(pTag);

        }
    }
}
    
    xhr.open("GET", "contact-form.php", true); //true=asynchronus
    xhr.send();
}


