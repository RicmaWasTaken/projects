/* TASKS 
- Clock //DONE
- Life Bars  //DONE
- Remove projectile after collision //DONE
- Remove random projectiles after killing a player //DONE
- Transform when hit while initiating jump
- Multiple characters 
- Multiple Arenas
- Pause menu
- God mode ?
- Mobile Adapt //DONE
*/

//---------------------------------//
//Variables et fonctions générales
//---------------------------------//

async function startGame(){
    gameLoop();
    clockUpdate();
    enemyLoop();
}
async function endGame(playerStatus){
    gameRunning = false
    clock.innerHTML = 0;
    hide(player1);
    hide(player2);
    var endingMessage = getID('ending-message');
    if(playerStatus == "winner"){
        endingMessage.textContent = "You win :)";
    }else if(playerStatus == "loser"){
        endingMessage.textContent = "You lose :(";
    }else{
        console.error(`Player status is ${playerStatus}`);
    }
    showFlex(gameOverDiv);
}
async function restartGame(){
    hide(gameOverDiv);
    healthPlayer1 = 100;
    healthPlayer2 = 100;
    resetLifeBars();
    show(player1);
    show(player2);
    restartClock();
    gameRunning = true;
    startGame();
}

function getID(id){
    return document.getElementById(id);
}
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
let loopTest = 1;
var player1Rect
var player2Rect
var mainScreenRect

//game status vars 
var gameRunning = true;
//general consts 
const player1 = getID('player1');
const player2 = getID('player2');
const atkbtn = getID('atk-button');
const ultbtn = getID('ult-button');
const defbtn = getID('def-button');
const gameOverDiv = getID('game-over');
const tryAgainButton = getID('try-again');
const mobileAttackButton = getID('mobile-atk');
const mobileJumpButton = getID('mobile-jump');
//projectiles
let projectiles = document.querySelectorAll('.projectile');
const projectileTime = 700;
var projectilesLTR = document.getElementsByClassName("ltr");
var projectilesRTL = document.getElementsByClassName("rtl");
//health
const lifeBarPlayer1 = getID("lifebar-player-1");
const lifeBarPlayer2 = getID("lifebar-player-2");
var lifeCellsPlayer1 = Array.from(lifeBarPlayer1.querySelectorAll('div'));
var lifeCellsPlayer2 = Array.from(lifeBarPlayer2.querySelectorAll('div'));
var healthPlayer1 = 100; 
var healthPlayer2 = 100;
//lifeCellsPlayer1[0].remove();


// Convert the NodeList to an array
//var lifebarArray = Array.from(lifebarDivs);

// Now, lifebarArray contains all the child div elements
//console.log(lifebarArray);
//jumping
const jumpHeight = 150; //100% = 1x character height
var isJumping1 = false;
var isJumping2 = false;
//attacks
var isAttacking1 = false;
var isAttacking2 = false;
var attackCooldown = false;
var attackDelay = 1000; //in ms
//time & clock
const clock = getID('clock');
const initialClock = 30
var clockCounter = initialClock;

//game loop functions and checks
async function gameLoop(){
    if(gameRunning){
        await delay(20)
        checkCollisions(); 
        player1Rect = player1.getBoundingClientRect();
        player2Rect = player2.getBoundingClientRect();
        mainScreenRect = getID('main-screen').getBoundingClientRect();
        checkForDeaths();
        checkLifeBars();
        gameLoop();
    }
}

//clock functions 
async function clockUpdate(){
    if(clockCounter <= 0){
        gameRunning = false
        endGame("loser");
    }
    if(gameRunning){
        clockCounter = clockCounter - 1;
        clock.innerHTML = clockCounter;
        await delay(1000);
        //console.log(clockCounter);
        clockUpdate();
    }
}
function restartClock(){
    clockCounter = initialClock;
    clock.innerHTML = clockCounter;
}

//collision functions 
function checkCollisions() {
    // collision
    projectiles = document.querySelectorAll('.projectile');
    projectiles.forEach((projectile) => {
        const projectileRect = projectile.getBoundingClientRect();
        const projectileId = projectile.getAttribute('data-projectile-id');
        const hasCollided = projectile.getAttribute(`data-collided-${projectileId}`) === 'true';

        if (!hasCollided) {
            if (
                projectileRect.left < player1Rect.right &&
                projectileRect.right > player1Rect.left &&
                projectileRect.top < player1Rect.bottom &&
                projectileRect.bottom > player1Rect.top
            ) {
                // Collision with character1
                //console.log(`Projectile ${projectileId} hit character1`);
                shake(player1);
                healthPlayer1 -= 10;
                //console.log(`Player 1 Health: ${healthPlayer1}`);
                projectile.setAttribute(`data-collided-${projectileId}`, 'true');
                projectile.remove();
            }

            if (
                projectileRect.left < player2Rect.right &&
                projectileRect.right > player2Rect.left &&
                projectileRect.top < player2Rect.bottom &&
                projectileRect.bottom > player2Rect.top
            ) {
                // Collision with character2
                //console.log(`Projectile ${projectileId} hit character2`);
                shake(player2);
                healthPlayer2 -= 10;
                //console.log(`Player 2 Health: ${healthPlayer2}`);
                projectile.setAttribute(`data-collided-${projectileId}`, 'true');
                projectile.remove();
            }
        }
    });
}

//jumping functions
async function jump(player) {
    if(gameRunning){
        if (player == player1) {
            if (!isJumping1) {
                isJumping1 = true;
                jumpAction(player);
                await delay(700);
                isJumping1 = false;
            }
        } else if (player == player2) {
            if (!isJumping2) {
                isJumping2 = true;
                jumpAction(player);
                await delay(700);
                isJumping2 = false;
            }
        } else {
            console.log(player);
        }
    }
} 
async function jumpAction(player) {
    if(player == player1){
        player.style.transform = `scaleX(-1) translateY(-${jumpHeight}%)`;
        await delay(300);
        player.style.transform = `scaleX(-1) translateY(0)`;
    }else{
        player.style.transform = `translateY(-${jumpHeight}%)`;
        await delay(300);
        player.style.transform = `translateY(0)`;
    }
}

async function shake(player){
    player.classList.add('shake');
    await delay(200);
    player.classList.remove('shake');
}
 //attacking functions
async function attack(player){
    if(gameRunning){
        let newProjectile = document.createElement('div');
        if (player == player2) {
            if (!isAttacking1) {
                isAttacking1 = true;
                attackAction(player, newProjectile);
                await delay(attackDelay);
                isAttacking1 = false;
            }
        } else if (player == player1) {
            if (!isAttacking2) {
                isAttacking2 = true;
                attackAction(player, newProjectile);
                await delay(attackDelay);
                isAttacking2 = false;
            }
        } else {
            console.error('attack() not working');
        }
        await delay(500); // 2 seconds cooldown
    }
}

async function attackAction(player, projectile) {
    if (player == player2) {
        //console.log('player 1 attacked!');
        projectile.classList.add('projectile', 'ltr');
        projectile.style.top = player1Rect.top - mainScreenRect.top + (player1Rect.height/3) + 'px'; // Adjust the starting position
        getID('main-screen').appendChild(projectile);
        await delay(500);
        projectile.remove();
    } else if (player == player1) {
        //console.log('player 2 attacked!');
        projectile.classList.add('projectile', 'rtl');
        projectile.style.top = player2Rect.top - mainScreenRect.top + (player2Rect.height/3) + 'px'; // Adjust the starting position
        getID('main-screen').appendChild(projectile);
        await delay(500);
        projectile.remove();
    } else {
        console.error('attackAction error')
    }
}

//kill & death functions
function kill(player){
    hide(player);
    if(player == player1){
        Array.from(projectilesLTR).forEach(function (element) {
            element.remove();
          });
    }
    if(player == player2){
        Array.from(projectilesRTL).forEach(function (element) {
            element.remove();
          });
    }
}
function checkForDeaths(){
    if(healthPlayer1 == 0){
        kill(player1);
        endGame("loser");
    }
    if(healthPlayer2 == 0){
        kill(player2);
        endGame("winner");
    }
}

//lifebar functions
function checkLifeBars(){
    if(healthPlayer1 <= 0){
        removeHealth(lifeCellsPlayer1,0);//0th place in array
    } else if(healthPlayer1 <= 10){
        removeHealth(lifeCellsPlayer1,1);
    } else if(healthPlayer1 <= 20){
        removeHealth(lifeCellsPlayer1,2);
    } else if(healthPlayer1 <= 30){
        removeHealth(lifeCellsPlayer1,3);
    } else if(healthPlayer1 <= 40){
        removeHealth(lifeCellsPlayer1,4);
    } else if(healthPlayer1 <= 50){
        removeHealth(lifeCellsPlayer1,5);
    } else if(healthPlayer1 <= 60){
        removeHealth(lifeCellsPlayer1,6);
    } else if(healthPlayer1 <= 70){
        removeHealth(lifeCellsPlayer1,7);
    } else if(healthPlayer1 <= 80){
        removeHealth(lifeCellsPlayer1,8);
    } else if(healthPlayer1 <= 90){
        removeHealth(lifeCellsPlayer1,9);
    } 
    if(healthPlayer2 <= 0){
        removeHealth(lifeCellsPlayer2,0);//0th place in array
    } else if(healthPlayer2 <= 10){
        removeHealth(lifeCellsPlayer2,1);
    } else if(healthPlayer2 <= 20){
        removeHealth(lifeCellsPlayer2,2);
    } else if(healthPlayer2 <= 30){
        removeHealth(lifeCellsPlayer2,3);
    } else if(healthPlayer2 <= 40){
        removeHealth(lifeCellsPlayer2,4);
    } else if(healthPlayer2 <= 50){
        removeHealth(lifeCellsPlayer2,5);
    } else if(healthPlayer2 <= 60){
        removeHealth(lifeCellsPlayer2,6);
    } else if(healthPlayer2 <= 70){
        removeHealth(lifeCellsPlayer2,7);
    } else if(healthPlayer2 <= 80){
        removeHealth(lifeCellsPlayer2,8);
    } else if(healthPlayer2 <= 90){
        removeHealth(lifeCellsPlayer2,9);
    } 
}

function removeHealth(lifeBar,a){
    if(lifeBar == lifeCellsPlayer1){
        colorBackground(lifeBar[a], "white");
    }else if(lifeBar == lifeCellsPlayer2){
        colorBackground(lifeBar[a], "white");
    }else{
        console.error(`lifeBar has benn set as : ${lifeBar}`);
    }
}
function resetLifeBars(){
    var elements = document.getElementsByClassName("life-cell")
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = '#26bd00';
    }
}

//enemy functions / AI 
function generateLowRandomNumber(){
    return Math.round(Math.random());
}

async function enemyLoop(){
    let enemyJump = generateLowRandomNumber();
    let enemyAttack = generateLowRandomNumber();
    if (enemyJump == 0){
        jump(player2);
        await delay(100);//more randomness and mid-air attacks
    }
    if (enemyAttack == 0){
        attack(player1);
    }
    await delay(500);
    enemyLoop();
}


//functions onload and listeners
window.onload = function(){
    tryAgainButton.addEventListener('click', function(){
        restartGame();
    });
    mobileAttackButton.addEventListener('click', function(){
        attack(player2);
    });
    mobileJumpButton.addEventListener('click', function(){
        jump(player1);
    });
    document.addEventListener('keydown', async function(event) {
        if (event.code === 'Space' || event.key === ' ' || event.keyCode === 32) {
            jump(player1);
        }
        if (event.code === 'Enter'){
            attack(player2);
        }
      });
      startGame();
}

//testing and debugging 
async function lol(){
    /*console.log('0s');
    await delay(2800);
    attack(player2);
    console.log('test p1');
    await delay(0);
    attack(player1);
    console.log('test p2');
    console.log(generateLowRandomNumber());
    console.log('-');
    await delay(500);
    lol();*/
    await delay(2000);
    kill(player1);
}

