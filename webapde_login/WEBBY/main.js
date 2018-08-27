var canvas, stage;
var pet, fsteak, ball, heart, affection, hunger;
var affectionCount = 0,
    hungerCount = 0,
    timeCount = 0,
    hatch = false,
    kill = false;

function init() {
  console.log("init function called...");
  stage = new createjs.Stage("gameCanvas");
  createjs.Touch.enable(stage); // Touch optimization (without it, clicking is too laggy for spam tapping)

  window.addEventListener("resize", handleResize); // If the window is resized, make size responsive

  pet = new createjs.Bitmap("img/egg.png");
  fsteak = new createjs.Bitmap("img/steak.png");
  ball = new createjs.Bitmap("img/ball.png");

  pet.addEventListener("click", function(event) {
      console.log("affection raised...");
      affectionCount += 5;
  });
  fsteak.addEventListener("click", function(event) {
      console.log("pet fed...");
      if (hatch == true && kill == false)
          feedPet();
  });
  ball.addEventListener("click", function(event) {
      console.log("pet played with...");
      if (hatch == true && kill == false) {
          affectionCount += 150;
          hungerCount += 15;
      }
  });

  createjs.Ticker.on("tick", tick);

  affection = stage.addChild(new createjs.Text("", "70px Arial", "#ffffff"));
  affection.lineHeight = 15;
  affection.textBaseline = "top";
  affection.x = affection.y = 20;

  hunger = stage.addChild(new createjs.Text("", "70px Arial", "#ffffff"));
  hunger.lineHeight = 15;
  hunger.textBaseline = "top";
  hunger.x = affection.x;
  hunger.y = affection.y + 80;

  handleResize(); // Call the resize function to size the canvas on load
}

function handleResize() {
  var w = window.innerWidth - 2;
  var h = window.innerHeight - 2;
  stage.canvas.width = w;
  stage.canvas.height = h;

  if (w < 700) { // Resize the images and font if screen too small (mobile)
      pet.scaleX = 0.8;
      pet.scaleY = 0.8;
      fsteak.scaleX = 0.8;
      fsteak.scaleY = 0.8;
      ball.scaleX = 0.8;
      ball.scaleY = 0.8;
      ball.x = stage.canvas.width - 70;
      affection.font = "45px Arial";
      hunger.font = "45px Arial";
      hunger.y = affection.y + 50;
  } else { // Resize the images and font back to normal otherwise
      pet.scaleX = 1;
      pet.scaleY = 1;
      fsteak.scaleX = 1.3;
      fsteak.scaleY = 1.3;
      ball.scaleX = 1.2;
      ball.scaleY = 1.2;
      ball.x = stage.canvas.width - 100;
      affection.font = "70px Arial";
      hunger.font = "70px Arial";
      hunger.y = affection.y + 80;
  }

  if (hatch == false) {
      pet.x = stage.canvas.width / 2 - pet.scaleX * 200 / 2;
  } else {
      pet.x = stage.canvas.width / 2 - pet.scaleX * 222 / 2;
  }
  pet.y = stage.canvas.height / 2;

  fsteak.x = 20;
  fsteak.y = stage.canvas.height - fsteak.scaleX * 88;

  ball.y = stage.canvas.height - ball.scaleY * 90;

  stage.addChild(pet, fsteak, ball);
  stage.update();
}

function hatchPet() {
  createjs.Tween.removeTweens(pet);
  stage.removeChild(pet);

  pet = new createjs.Bitmap("img/botamon1.png");
  pet.addEventListener("click", function(event) {
      affectionCount = affectionCount + 5;
  });

  hatch = true;
  handleResize();
}

function feedPet() {
  if (hungerCount < 0.5) {
      hungerCount = 0;
      affectionCount -= 20;
  } else if (hungerCount < 20) {
      hungerCount = 0;
      affectionCount += 25;
  } else {
      hungerCount -= 20;
      affectionCount += 50;
  }
}

function killPet() {
  createjs.Tween.removeTweens(pet);
  stage.removeChild(pet);

  pet = new createjs.Bitmap("img/botamon3.png");

  kill = true;
  handleResize();
}

function tick(event) {
  affection.text = "Affection: " + Math.round(affectionCount);
  hunger.text = "Hunger: " + Math.round(hungerCount) + "%";
  document.title = "Affection: " + Math.round(affectionCount) + " Hunger: " + Math.round(hungerCount) + "%";

  if (affectionCount >= 50 && hatch == false) {
      createjs.Tween.get(pet, {
              loop: true
          }) // Soon-to-hatch animation
          .to({
              x: pet.x + 5
          }, 1)
          .to({
              x: pet.x - 5
          }, 1);
  }
  if (affectionCount > 100 && hatch == false) {
      hatchPet();
  }
  if (hatch == true && kill == false) {
      affectionCount -= 0.01;
  }
  if (hatch == true && kill == false) {
      hungerCount += 0.02;
  }
  if (hatch == true) {
      if (affectionCount < 0 || hungerCount > 100) {
          killPet();
      }
  }
  stage.update(event);
}
