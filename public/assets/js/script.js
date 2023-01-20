
function calcul(){
  
    var question1, question2, question3, question4, question5;
    var score1 = 0;
    var score2 = 0;
    var score3 = 0;
    var score4 = 0;
    var score5 = 0;
    for(var j=1; j<7; j++){
        question1 = document.getElementsByName("log"+j);
        for(var i=0; i < question1.length; i++){
        if (question1[i].checked){
            score1 = score1 + (question1[i].value);
        }
    }
    }
    for(var j=1; j<4 ; j++){
        question2 = document.getElementsByName("Dec"+j);
        for(var i=0; i < question2.length; i++){
        if (question2[i].checked){
            score2 = score2 + (question2[i].value);
        }
    }
    }
    for(var j=1; j<4 ;j++){
        question3 = document.getElementsByName("Ach"+j);
        for(var i=0; i < question3.length; i++){
        if (question3[i].checked){
            score3 = score3 + (question3[i].value);
        }
    }
    }
    for(var j=1; j<4 ;j++){
        question4 = document.getElementsByName("Trans"+j);
        for(var i=0; i < question4.length; i++){
        if (question4[i].checked){
            score4 = score4 + (question4[i].value);
        }
    }
    }
    for(var j=1; j<4 ;j++){
        question5 = document.getElementsByName("Alim"+j);
        for(var i=0; i < question5.length; i++){
        if (question5[i].checked){
            score5 = score5 + (question5[i].value);
        }
    }
    }
    var score1Element = document.getElementById("resultat1");
    score1Element.innerHTML = "Votre score total(en tonne) est : " + score1;
    var score2Element = document.getElementById("resultat2");
    score2Element.innerHTML = "Votre score total(en tonne) est : " + score2;
    var score3Element = document.getElementById("resultat3");
    score3Element.innerHTML = "Votre score total(en tonne) est : " + score3;
    var score4Element = document.getElementById("resultat4");
    score4Element.innerHTML = "Votre score total(en tonne) est : " + score4;
    var score5Element = document.getElementById("resultat5");
    score5Element.innerHTML = "Votre score total(en tonne) est : " + score5;

    var vtotal= document.getElementById("vtotale");
    var total= score1 + score2 + score3 + score4 +score5
    if(total > 2){
        vtotal.innerHTML = "Vous êtes au dessus la valeur raisonnable";
    }
}


document.getElementsByClassName("button").onclick = calcul();
