let contrastButton = document.querySelectorAll("#contrastbutton")[0];
// let heading1 = document.getElementsByTagName('h1');
// let heading2 = document.getElementsByTagName('h2');
// let heading3 = document.getElementsByTagName('h3');
// let link = document.getElementsByTagName('a');
// let article = document.getElementsByClassName('indivArticle');
// let background1 = document.getElementsByClassName('featuredArticle');
// let background2 = document.getElementsByTagName('section');

//let array = [heading1,heading2,heading3,link,article,background1,background2,contrastButton];

contrastButton.onclick= function contrastFunc() {
    document.body.style.backgroundImage = "none";
    document.body.style.backgroundColor="#FFF";
    document.body.style.color= "blue";
    document.body.style.fontSize= "24px";
    document.body.style.lineHeight= "2rem";
    document.body.style.letterSpacing= ".1rem";
    
    // for(let i = 0; i < heading2.length; i++) {
    //     heading2[i].style.color="F5D76E";
        
    //     for(let i=0; i<heading1.length; i++){ 
    //     heading1[i].style.color="#F5D76E";
        
    //         for (let i = 0; i < link.length; i++){
    //             link[i].style.color= "red";

    //             for (let i=0; i<article.length; i++){
    //                 article[i].style.backgroundColor= "black";

    //                 for (let i=0; i<background1.length;i++){
    //                     background1[i].style.backgroundColor="black";

    //                     for (let i=0; i<background2.length;i++){
    //                         background2[i].style.backgroundColor="black";    
    //                     }
    //                 }
    //             }
    //         }
    //     }
    // }

}

contrastButton.ondblclick= function constrastOff(){
        document.body.style.backgroundImage="url('./imgs/map.png')";
        document.body.style.backgroundColor="";  
        document.body.style.color="";
        document.body.style.fontSize="";
        document.body.style.lineHeight="";
        document.body.style.letterSpacing="";

}
