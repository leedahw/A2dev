//~~~~~~~~~~~~~~~table js~~~~~~~~~~~~~~~~//
let tds = document.getElementsByTagName("td");
let tableTitleEl = document.getElementById("#table-title");

let months = ["April","May","June","July","August","September"];
let visitors = [16,80,36,44,7,8];

for (i=0; i<visitors.length; i++){

tds[i].appendChild(months[i]&visitors[i]);

};