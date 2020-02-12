/*------------------------------------------------------------------------------
  Call
  ----------------------------------------------------------------------------*/

/**
 * Construct a new call of the fictional move function. It just bundles the
 * parameters one would pass to this function.
 *
 * @param {Number} n
 * The number of discs to move.
 *
 * @param {Number} source
 * The rod where the discs are on now. This has to be an integer between 0 and 2.
 *
 * @param {Number} target
 * The rod where the discs should be moved to. This has to be an integer between
 * 0 and 2.
 *
 * @param {Number} temp
 * The rod to be used for intermediate steps. This has to be an integer between
 * 0 and 2.
 */
function Call(n, source, target, temp) {
    this.n = n;
    this.source = source;
    this.target = target;
    this.temp = temp;
}


/**
 * Generates a string representation of this call. Note that this is subject to
 * change so do not rely on any format.
 *
 * @return {String}
 * A string representing this call.
 */
Call.prototype.toString = function() {
    return "move(" + this.n + ", " + this.source + ", " + this.target + ", " +
            this.temp + ")";
};

/*------------------------------------------------------------------------------
  Hanoi
  ----------------------------------------------------------------------------*/

/**
 * Contructs a new Tower of Hanoi environment.
 *
 * @param {Number} n
 * The number of discs. This has to be a natural number.
 */
 function Hanoi(n) {

    /**
     * Keeps track of the calls of the fictional move function.
     * @type {Array}
     */
    this.callStack = [];
    if (n > 0) {
        this.callStack.push(new Call(n, 0, 1, 2));
    }

    /**
     * The calls of the fictional move function that have been processed already.
     * @type {Array}
     */
    this.processedCalls = [];

    /**
     * The last move. If no disc was moved during the last function call, this
     * variable equals null.
     * @type {Object}
     */
    this.lastMove = null;

    /**
     * The number of moves so far.
     * @type {Number}
     */
    this.moveCount = 0;

    /**
     * The current state of the rods. Each rod is represented by a stack of
     * discs and each disc is represented by an integer; the greater the integer
     * the larger the disc.
     * @type {Array}
     */
    this.rods = [[], [], []];
    for (var i = n; i >= 1; i--) {
        this.rods[0].push(i);
    }
}

/**
 * Processes the function call on top of the call stack. If the stack is empty,
 * nothing happens.
 */
Hanoi.prototype.processNextCall = function() {
    if (this.callStack.length === 0) {
        return;
    }
    var call = this.callStack.pop();
    if (call.n === 1) {
        var disc = this.rods[call.source].pop();
        this.rods[call.target].push(disc);
        this.lastMove = new Move(call.source, call.target);
        this.moveCount++;
    } else {
        this.callStack.push(new Call(call.n - 1, call.temp, call.target, call.source));
        this.callStack.push(new Call(1, call.source, call.target, call.temp));
        this.callStack.push(new Call(call.n - 1, call.source, call.temp, call.target));
        this.lastMove = null;
    }
    this.processedCalls.push(call);
};

/**
 * Processes the function calls on top of the call stack until a disc is moved
 * or the stack is empty.
 */
Hanoi.prototype.processCallsTillMove = function() {
    if (this.callStack.length > 0) {
        do {
            this.processNextCall();
        } while (this.lastMove === null);
    }
}

/**
 * Reverses the last function call. All variables are set to their state before
 * this call happened. Nothing is changed if the fictional move function was not
 * called yet.
 */
Hanoi.prototype.undoLastCall = function() {
    if (this.processedCalls.length === 0) {
        return;
    }
    var call = this.processedCalls.pop();
    if (call.n === 1) {
        var disc = this.rods[call.target].pop();
        this.rods[call.source].push(disc);
        this.moveCount--;
    } else {
        this.callStack.pop();
        this.callStack.pop();
        this.callStack.pop();
    }
    this.callStack.push(call);

    // Restoring last move
    if (this.processedCalls.length === 0) {
        this.lastMove = null;
    } else {
        call = this.processedCalls[this.processedCalls.length - 1];
        if (call.n > 1) {
            this.lastMove = null;
        } else {
            this.lastMove = new Move(call.source, call.target);
        }
    }
}

/**
 * Reverses the last function calls until a disc is moved or all function calls
 * are reversed.
 */
Hanoi.prototype.undoCallsTillMove = function() {
    if (this.processedCalls.length > 0) {
        while (this.lastMove === null && this.processedCalls.length > 0) {
            this.undoLastCall();
        }
        if (this.processedCalls.length > 0) {
            this.undoLastCall();
        }
    }
}

/*------------------------------------------------------------------------------
  Move
  ----------------------------------------------------------------------------*/

/**
 * Constructs a new move of a disc.
 *
 * @param {Number} from
 * The number of the source rod. This has to be an integer between 0 and 2.
 * @param {Number} to
 * The number of the target rod. This has to be an integer between 0 and 2.
 */
function Move(from, to) {
    this.from = from;
    this.to = to;
}

/**
 * Creates a string representation of this move. Note that the format is subject
 * to change.
 *
 * @return {String}
 * A string representing this move.
 */
Move.prototype.toString = function() {
    return this.from + " to " + this.to;
}

/*------------------------------------------------------------------------------
  Graphics
  ----------------------------------------------------------------------------*/

/**
 * Draws the current state of the hanoi object to a canvas. The state includes
 * the call stack, the last call to the fictional move function, the last move,
 * the move count and the rods and discs.
 *
 * @param  {Object} hanoi
 * The hanoi object to draw.
 *
 * @param  {Object} context
 * The graphics context of the canvas.
 */
function draw(hanoi, context) {
    context.clearRect(0, 0, 750, 500);
    //drawCallStack(hanoi, context);
    //drawLastCall(hanoi, context);
    drawLastMove(hanoi, context);
    drawMoveCount(hanoi, context);
    drawRods(hanoi, context);
}

/**
 * Draws the current state of the call stack on the canvas.
 *
 * @param  {Object} hanoi
 * The hanoi object to draw.
 *
 * @param  {Object} context
 * The graphics context of the canvas.
 */
function drawCallStack(hanoi, context) {
    context.fillText("Call stack:", 510, 20);
    var n = hanoi.callStack.length;
    for (var i = 0; i < 17 && i < n; i++) {
        context.fillText(hanoi.callStack[n - i - 1].toString(), 510, 50 + 20 * i);
    }
    if (n > 17) {
        context.fillText("…", 510, 390);
    }
}

/**
 * Draws a string representation of the last call of the fictional move function
 * on the canvas. If there was no call yet, nothing is drawn.
 *
 * @param  {Object} hanoi
 * The hanoi object to draw.
 *
 * @param  {Object} context
 * The graphics context of the canvas.
 */
function drawLastCall(hanoi, context) {
    var s = "Last call: ";
    if (hanoi.processedCalls.length > 0) {
        s += hanoi.processedCalls[hanoi.processedCalls.length- 1].toString()
    }
    context.fillText(s, 510, 450);
}

/**
 * Draws a string representing the last move on the canvas. If no discs was
 * moved during the last call of the fictional move function, nothing is drawn.
 *
 * @param  {Object} hanoi
 * The hanoi object to draw.
 *
 * @param  {Object} context
 * The graphics context of the canvas.
 */
function drawLastMove(hanoi, context) {
    var s = "Last move: ";
    if (hanoi.lastMove !== null) {
        s += hanoi.lastMove.toString()
    }
    context.fillText(s, 260, 450);
}

/**
 * Draws the move count on the canvas.
 *
 * @param  {Object} hanoi
 * The hanoi object to draw.
 *
 * @param  {Object} context
 * The graphics context of the canvas.
 */
function drawMoveCount(hanoi, context) {
    context.fillText("Move count: " + hanoi.moveCount, 10, 450);
}

/**
 * Draws the current state of the rods and discs on the canvas.
 *
 * @param  {Object} hanoi
 * The hanoi object to draw.
 *
 * @param  {Object} context
 * The graphics context of the canvas.
 */
function drawRods(hanoi, context) {
    context.fillText("Rods:", 10, 20);
    context.lineCap = "round";
    var color = $("#disc-color").val();

    for (var i = 0; i < 3; i++) {

        // Peg
        context.lineWidth = 4;
        context.strokeStyle = "#912F00";
        context.beginPath();
        context.moveTo(85 + 150 * i, 50);
        context.lineTo(85 + 150 * i, 350);
        context.stroke();

        // Discs
        context.lineWidth = 1;
        context.strokeStyle = "#000000";

        for (var j = 0; j < hanoi.rods[i].length; j++) {
            context.fillStyle = compute_disc_color(color, 255 - 10 * hanoi.rods[i][j]);
            context.beginPath();
            context.rect(85 + 150 * i - 4 * hanoi.rods[i][j], 330 - 20 * j, 8 * hanoi.rods[i][j], 20);
            context.fill();
            context.stroke();
        }
    }

    // Labels
    context.fillStyle = "#000000";
    context.fillText("0", 80, 380);
    context.fillText("1", 230, 380);
    context.fillText("2", 380, 380);
}

/**
 * Generates a string representing an rgb color.
 *
 * @param  {String} color
 * The requested color.
 *
 * @param  {Number} shade
 * The requested shade of this color. This has to be an integer.
 */
function compute_disc_color(color, shade) {
    var discColor = "rgb(";

    // Red
    if (color === "red" || color === "yellow" || color === "magenta" || color === "white") {
        discColor += shade + ",";
    } else {
        discColor += 0 + ",";
    }

    // Green
    if (color === "green" || color === "yellow" || color === "cyan" || color === "white") {
        discColor += shade + ",";
    } else {
        discColor += 0 + ",";
    }

    // Blue
    if (color === "blue" || color === "cyan" || color === "magenta" || color === "white") {
        discColor += shade;
    } else {
        discColor += 0;
    }

    return discColor + ")";
}

/*------------------------------------------------------------------------------
  Main
  ----------------------------------------------------------------------------*/

$(document).ready(function() {

    // Disables the auto-previous, previous, next and auto-next buttons.
    $("#step-control button").prop("disabled", true);

    /**
     * The graphics context of the canvas to draw to.
     * @type {Object}
     */
    var context = document.getElementById("hanoi-canvas").getContext("2d");
    context.font = "normal 16px PT Serif";

    /**
     * The hanoi object to use for drawing and processing.
     * @type {Object}
     */
    var hanoi;

    /**
     * Indicates if the auto-previous or auto-next mode is enabled.
     * @type {Boolean}
     */
    var auto = false;

    /**
     * Returns the value of the timeout select element.
     *
     * @return {Number}
     * The requested timeout.
     */
    function get_timeout() {
        return parseInt($("#timeout").val(), 10);
    }

    /**
     * Automatically reverses calls to the fictive function move until the user
     * stops it or all calls are reversed.
     */
    function auto_previous() {
        if (auto) {
            if ($("#show-intermediate").is(":checked")) {
                hanoi.undoLastCall();
            } else {
                hanoi.undoCallsTillMove();
            }
            draw(hanoi, context);
        }

        if (hanoi.processedCalls.length > 0) {
            if (auto) {
                window.setTimeout(auto_previous, get_timeout());
            }
        } else {
            $("#step-control button").prop("disabled", false);
            auto = false;
        }
    }

    /**
     * Automatically prcesses the next call to the fictive move function until
     * the user stops it or all function calls are processed.
     */
    function auto_next() {
        if (auto) {
            if ($("#show-intermediate").is(":checked")) {
                hanoi.processNextCall();
            } else {
                hanoi.processCallsTillMove();
            }
            draw(hanoi, context);
        }

        if (hanoi.callStack.length > 0) {
            if (auto) {
                window.setTimeout(auto_next, get_timeout());
            }
        } else {
            $("#step-control button").prop("disabled", false);
            auto = false;
        }
    }

    $("#init").on("click", function() {
        auto = false;
        hanoi = new Hanoi(parseInt($("#numberDiscs").val(), 10));
        $("#step-control button").prop("disabled", false);
        draw(hanoi, context);
    });

    $("#auto-previous").on("click", function() {
        if (!auto) {
            $("#step-control button").prop("disabled", true);
            $(this).prop("disabled", false);
            auto = true;
            auto_previous();
        } else {
            $("#step-control button").prop("disabled", false);
            auto = false;
        }
    });

    $("#previous").on("click", function() {
        if ($("#show-intermediate").is(":checked")) {
            hanoi.undoLastCall();
        } else {
            console.log("previous");
            hanoi.undoCallsTillMove();
        }
        draw(hanoi, context);
    });

    $("#next").on("click", function() {
        if ($("#show-intermediate").is(":checked")) {
            hanoi.processNextCall();
        } else {
            hanoi.processCallsTillMove();
        }
        draw(hanoi, context);
    });

    $("#auto-next").on("click", function() {
        if (!auto) {
            $("#step-control button").prop("disabled", true);
            $(this).prop("disabled", false);
            auto = true;
            auto_next();
        } else {
            $("#step-control button").prop("disabled", false);
            auto = false;
        }
    });

    $("#disc-color").on("change", function() {
        draw(hanoi, context);
    });
});
