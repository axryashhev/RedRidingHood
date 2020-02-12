// Total seconds to wait
    var seconds = 0;
    var minutes = 0;

    function reset_timer() {
        seconds = 0;
        minutes = 0;
    }

    function countup() {
        console.log('Working');
        if(seconds < 59)
            seconds = seconds + 1;
        else {
            minutes = minutes + 1;
            seconds = 0;
        }

        let out_minutes = minutes;
        let out_seconds = seconds;

        if (minutes == 5) {
            document.location.href = "GameOver.html";
        } else {
            // Update remaining seconds
            if (minutes < 10) out_minutes = "0" + out_minutes;
            if (seconds < 10) out_seconds = "0" + out_seconds;

            document.getElementById("timer").innerHTML = out_minutes + ':' + out_seconds;
            // Count down using javascript
            window.setTimeout("countup()", 1000);
        }
    }

    // Run countdown function
    countup();
