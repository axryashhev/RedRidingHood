// Total seconds to wait
    var seconds = 0;
    var minutes = 0;

    function countup() {
        console.log('Working');
        if(seconds < 60)
            seconds = seconds + 1;
        else {
            minutes = minutes + 1;
            seconds = 0;
        }

        if (minutes == 5) {
            alert('TimeOut');
        } else {
            // Update remaining seconds
            // if (minutes < 10) minutes = "0" + minutes;
            // if (seconds < 10) seconds = "0" + seconds;

            document.getElementById("timer").innerHTML = minutes + ':' + seconds;
            // Count down using javascript
            window.setTimeout("countup()", 1000);
        }
    }

    // Run countdown function
    countup();
