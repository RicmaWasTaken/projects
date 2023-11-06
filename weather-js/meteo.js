function getID(id){
    return document.getElementById(id);
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

let ville
let regex = /^[a-zA-Z]+$/;
let icon
var key = [YOUR_API_KEY_HERE]

function testing(){
    getID('ville').value = capitalizeFirstLetter(getID('ville').value); //capitalise first letter of input
    ville = getID('ville').value.trim().replace(/\s/g, "") //remove spaces
    console.log(ville); //simple log for debug
    if (ville == ""){ //check if empty
        alert('Insert a place name');
    } else if (regex.test(ville) == false){ //check there's only letters
        alert('Check that your search contains letters only')
    } else { //if all is good
        ville = ville.replaceAll(' ', '&');
        console.log(ville);
        fetch('https://api.openweathermap.org/data/2.5/weather?q=' + ville + '&units=metric&appid=' + key)
        .then(function (response) {
            if (response.ok) { //check for response 
                return response.json();
            } else {
                alert('Insert a real place')
            }
        })
        .then(function (data) {
            console.log(data);
            getID('temp').innerHTML = parseInt(data.main.temp);
            getID('tempmax').innerHTML = parseInt(data.main.temp_max);
            getID('tempmin').innerHTML = parseInt(data.main.temp_min);
            icon = data.weather[0].icon;
            getID('icon').setAttribute("src", "http://openweathermap.org/img/w/" + icon + ".png")
            getID('resultats').style.display = "flex"
        })
    }
}

window.onload = function(){
    getID('ville').addEventListener("keydown", function (e) {
        if (e.code === "Enter") {  //checks whether the pressed key is "Enter"
            testing();
        }
    });
    getID('resultats').style.display = "none";
}
