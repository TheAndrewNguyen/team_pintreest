<x-app-layout>

<html>
  <head>
  	<title>Snake Game</title>
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">

  </head>
  <body>

    <canvas id="snakeboard" width="450" height="450"></canvas>

    <style>
	
      #snakeboard {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </body>

  <script>
    const board_border = 'black';
    var board_background = "lightgreen";
    const snake_col = 'brown';
    const snake_border = 'darkblue';
    const apple_col = 'blue'
    const apple_border = 'black'
    
    let snake = [      
      {x: 100, y: 200},
      {x: 50, y: 200},
      {x: 0, y: 200}]

    let fruit_x = 300;
    let fruit_y = 200;

    let changing_direction = false;
    let dx = 50;
    let dy = 0;
    
    
    var snakeboard = document.getElementById("snakeboard");
    var snakeboard_ctx = snakeboard.getContext("2d");
    // Start game
    main();
    
    document.addEventListener("keydown", change_direction);    

    function main() {
	if (has_game_ended()) return
	
	changing_direction = false;
    setTimeout(function onTick() {
    clear_board();
		
	if(snake[0].x == fruit_x && snake[0].y == fruit_y){
		fruit_spawn();
		const head = {x: snake[0].x + dx, y: snake[0].y + dy};
		snake.unshift(head);
		}
		
	else move_snake();
	draw_fruit();
    drawSnake();
		
        // Call main again
        main();
      }, 150)
    }
	
	
	function grow() {
		
		return;
	}
	
	function fruit_spawn() {

		fruit_x = Math.floor((Math.random() * (9)))*50;
		fruit_y = Math.floor((Math.random() * (9)))*50;
		

		for (let i = 0; i < snake.length; i++) {
        		if (snake[i].x === fruit_x && snake[i].y === fruit_y){
				fruit_spawn();
				return;}

				}
			draw_fruit();
			return;

		}
	function draw_fruit() {
	 snakeboard_ctx.fillStyle = apple_col;
	 
      		 snakeboard_ctx.strokestyle = apple_border;
      		 snakeboard_ctx.fillRect(fruit_x, fruit_y, 50, 50);
      		 snakeboard_ctx.strokeRect(fruit_x , fruit_y, 50, 50);
			 return;
			}
		

		




 // draw a border around the canvas
 
    function clear_board() {
		
		for (let i = 0; i < 450; i +=50){
			for (let j = 0; j < 450; j +=50){
				snakeboard_ctx.fillStyle = board_background;
				snakeboard_ctx.fillRect(i, j, 50, 50);
		  
				if ((i+j)%100 == 0){
					board_background = 'green';
				}
				else {
					board_background = 'lightgreen';
				}
			}
		}
			snakeboard_ctx.fillSyle = 'green';
			snakeboard_ctx.fillRect(0,0,50,50);
			//snakeboard_ctx.lineWidth = 5;
			snakeboard_ctx.strokestyle = 'black';
		snakeboard_ctx.strokeRect(0,0,snakeboard.width, snakeboard.height);
	}
    
    
    function drawSnake() {
	snakeboard_ctx.fillStyle = snake_col;
    snakeboard_ctx.strokestyle = snake_border;
    snakeboard_ctx.fillRect(snake[0].x, snake[0].y, 50, 50);
	snakeboard_ctx.strokeRect(snake[0].x, snake[0].y, 50, 50);
      
	//   for(let i = 1; i < snake.length; i++){
	  
	//   if (snake[i-1].x != snake[i].x && )snake[i-1{
	// 	snakeboard_ctx.fillRect(snakePart.x, snakePart.y+10, 50, 40);
	// 	snakeboard_ctx.strokeRect(snakePart.x, snakePart.y+10, 50, 40);
	// 	}
		
	// 	}
	}
function has_game_ended() {
      for (let i = 4; i < snake.length; i++) {
        if (snake[i].x === snake[0].x && snake[i].y === snake[0].y) return true
      }
      const hitLeftWall = snake[0].x < 0;
      const hitRightWall = snake[0].x > snakeboard.width - 10;
      const hitToptWall = snake[0].y < 0;
      const hitBottomWall = snake[0].y > snakeboard.height - 10;
      return hitLeftWall || hitRightWall || hitToptWall || hitBottomWall
    }


    function move_snake() {
      const head = {x: snake[0].x + dx, y: snake[0].y + dy};
      snake.unshift(head);
      snake.pop();
    }
function change_direction(event) 
{  
   const LEFT_KEY = 37;
   const RIGHT_KEY = 39;
   const UP_KEY = 38;
   const DOWN_KEY = 40;
 
	if(changing_direction) return;
	changing_direction = true; 

   const keyPressed = event.keyCode;
   const goingUp = dy === -50;
   const goingDown = dy === 50;
   const goingRight = dx === 50;  
   const goingLeft = dx === -50;
 
     if (keyPressed === LEFT_KEY && !goingRight)
     {    
          dx = -50;
          dy = 0;  
     }
 
     if (keyPressed === UP_KEY && !goingDown)
     {    
          dx = 0;
          dy = -50;
     }
 
     if (keyPressed === RIGHT_KEY && !goingLeft)
     {    
          dx = 50;
          dy = 0;
     }
 
     if (keyPressed === DOWN_KEY && !goingUp)
     {    
          dx = 0;
          dy = 50;
     }
}
    
  </script>
</html>


</x-app-layout>

