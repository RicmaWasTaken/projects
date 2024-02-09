let ville
let regex = /^[a-zA-Z\s]+$/;
let icon
var apiData

function displayResults(){
    if(apiData){
        getID('ville').placeholder = 'ex: ' + apiData.name;
        getID('temp').innerHTML = parseInt(apiData.main.temp);
        getID('tempmax').innerHTML = parseInt(apiData.main.temp_max);
        getID('tempmin').innerHTML = parseInt(apiData.main.temp_min);
        icon = apiData.weather[0].icon;
        getID('icon').setAttribute("src", "http://openweathermap.org/img/w/" + icon + ".png")
        getID('resultats').style.display = "flex"
    }
}

window.onload = function(){
    getID('ville').addEventListener("keydown", function (e) {
        if (e.code === "Enter") {  //checks whether the pressed key is "Enter"
            processForm();
        }
    });
    getID('resultats').style.display = "none";
    if(apiData){
        displayResults()
    }
}

function getID(id){
    return document.getElementById(id);
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function verif(valeur){
    if(valeur == ""){
        alert('renseignez une ville');
    }else if(regex.test(ville) == false){
        alert('vérifiez que votre recherche ne contient que des lettres');
    }else{
        return true
    }
}

function processForm(){
    ville = getID('ville').value.trim();
    if(verif(ville) == true){
        ville = encodeURIComponent(ville);
        getID('ville').value = ville
    }else{
        alert('ville n\'a pas passé la verif')
    }
    // Continue with form submission
    getID('formulaire').submit()
}

 //------------------------------------------
