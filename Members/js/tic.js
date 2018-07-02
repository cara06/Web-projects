$(document).ready(function() {
    var currentPlayer,
        playerSymbol,
        opponentSymbol,
        winningOptions = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [2, 4, 6],
            [0, 4, 8]
        ],
        currentBoard = [0, 0, 0, 0, 0, 0, 0, 0, 0];
    //Check if a player has won the game or draw
    function checkWin(board) {
        //Get the amount of selected tiles on the board
        var tilesActive = board.reduce(function(prev, curr) {
            return Math.abs(prev) + Math.abs(curr);
        });
        //Compare board with winningOptions
        var result = winningOptions.map(function(winningCombs) {
            return winningCombs.map(function(winnerTile) {
                return board[winnerTile];
            }).reduce(function(previous, current) {
                return previous + current;
            });
        }).filter(function(total) {
            return Math.abs(total) === 3;
        });
        //Return result if game is finished	
        if (result[0] === 3) {
            return "x";
        } else if (result[0] === -3) {
            return "o";
        } else if (tilesActive === 9) {
            return "draw";
        } else {
            return false;
        }
    }

    function sumArray(arr) {
        var sum = arr.reduce(function(prev, curr) {
            return prev + curr;
        });
        return sum;
    }

    function aiTurn(board) {
        //Loop winning options
        var combo = winningOptions.map(function(winningCombs, i) {
            //Loop the tiles in the options
            return winningCombs.map(function(winnerTile, j) {
                //Return the board on winning combination positions
                return board[winnerTile];
            });
        });
        var winPosition = [];
        var blockPosition = [];
        //Loop the values of each position
        var matched = combo.map(function(combValues, i) {
            //If it adds up to -2, push to winPosition
            if (sumArray(combValues) === -2) {
                winPosition.push(i);
                return combValues;
                //If it adds up to 2, push to blockPosition	
            } else if (sumArray(combValues) === 2) {
                blockPosition.push(i);
                return combValues;
            }
        });
        var selectArray = [];
        //Sort the matched arrays so that -2 comes first.
        matched.forEach(function(match) {
            if (match !== undefined && sumArray(match) === -2) {
                selectArray.unshift(match);
            } else if (match !== undefined && sumArray(match) === 2) {
                selectArray.push(match);
            }
        });

        var whichCombo;
        //If there is a chance to win, pick winPosition
        if (winPosition.length >= 1) {
            whichCombo = winningOptions[winPosition[0]];
            //Else pick blockPosition	
        } else {
            whichCombo = winningOptions[blockPosition[0]];
        }
        //Find the emptyPosition 
        var tileToPlace;
        if (selectArray.length >= 1) {
            var emptyPos = selectArray[0].indexOf(0);
            //Place tile in the empty position
            tileToPlace = whichCombo[emptyPos];
        } else if (board[4] === 0) {
            tileToPlace = 4;
        } else {
            tileToPlace = board.indexOf(0);
        }
        return tileToPlace;
    }

    function playerTurn() {
        //Set the symbol colors
        var playerColor,
            opponentColor;
        if (playerSymbol === "X") {
            playerColor = "#78C0A8";
            opponentColor = "#F0A830";
        } else {
            playerColor = "#F0A830";
            opponentColor = "#78C0A8";
        }

        //Add X for user and switch current player
        if (currentPlayer === 1) {
            currentPlayer = -1;
            $(this).find("p").text(playerSymbol).css("color", playerColor);
            currentBoard[this.id] = 1;
            $(this).off("click");
        }

        //Then let the AI take a turn and switch back	 
        if (currentPlayer === -1) {
            currentPlayer = 1;
            var blockOrWinPos = aiTurn(currentBoard);
            $("#" + blockOrWinPos).find("p").text(opponentSymbol).css("color", opponentColor);
            currentBoard[blockOrWinPos] = -1;
            $("#" + blockOrWinPos).off("click");
        }

        //Check status of game
        var endGame = checkWin(currentBoard);
        var $endTitle = $(".modal-content h3");
        //Show modal if game is finished
        if (endGame) {
            if (endGame === 'x') {
                $endTitle.text("Player X wins!");
            } else if (endGame === "o") {
                $endTitle.text("Player O wins!");
            } else {
                $endTitle.text("Draw!");
            }
            $('.endmodal').modal('show');
        }
    }

    function newGame() {
        //Clear all the event handlers
        $(".tile").off("click");
        //Clear current board IDs
        currentBoard = [0, 0, 0, 0, 0, 0, 0, 0, 0];
        //Clear tiles of marks
        $(".tile").find("p").text("");
        //Set up new event listener for the tiles
        $(".tile").on("click", playerTurn);
        //Player turn
        currentPlayer = 1;
    }

    //--------Event Listeners---------

    //Show the startmodal
    $('.startmodal').modal('show');

    //Buttons to select symbol inside startmodal
    $("#O").on("click", function() {
        playerSymbol = "O";
        opponentSymbol = "X";
        $('.startmodal').modal('hide');
        newGame();
    });

    $("#X").on("click", function() {
        playerSymbol = "X";
        opponentSymbol = "O";
        $('.startmodal').modal('hide');
        newGame();
    });

    //Reset button inside endmodal	
    $("#reset").on("click", function() {
        newGame();
        $('.endmodal').modal('hide');
    });
});