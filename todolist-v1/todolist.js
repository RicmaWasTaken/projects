function getid(id){
    return (document.getElementById(id));
}
/*function getclass(class){
    return (document.getElementsByClassName(class));
}*/

var ajouts = 0;

function ajouter(){
    var input = getid("input").value
    if (ajouts == 0){
        getid("paper").innerHTML = "";
        getid("paper").innerHTML = '<input type="checkbox" class="taches"> <label>' + input + '</label> <br>';
        ajouts = ajouts + 1;
        console.log("ajouts = 0");
        getid("input").value = "";
    }
    else{
        getid("paper").innerHTML = getid("paper").innerHTML + '<input type="checkbox" class="taches"> <label>' + input + '</label> <br>';
        ajouts = ajouts + 1;
        console.log("ajouts > 0");
        getid("input").value = "";
    }  
}

function reset(){
    getid("paper").innerHTML = "";
}