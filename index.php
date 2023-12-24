<!DOCTYPE html>
<html lang="en">
<head>

    <SCRIPT language=JavaScript>

        <!-- http://www.spacegun.co.uk -->

        var message = "This page is no longer active";
        
        function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

        if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

        document.onmousedown = rtclickcheck;

    </SCRIPT>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Tag Describer</title>
    <link rel="icon" type="image/png" href="styleImages/icon.png"/>
    <link rel="stylesheet" href="style.css">
    <style>
        

    </style>
</head>
<body>

    <!-- content -->

    <div id="tag-describer">
    
        <h3>Hey guys how can I help you</h3>
        <hr>

        <input type="text" id="tag-input" placeholder="Enter HTML tag & CSS tag">
        <textarea id="tag-description" readonly></textarea>
        <button onclick="describeTag()">Describe Tag</button>
        <marquee><h6>Created by ABHISHEK PRAMUDITHA</h6></marquee>

    </div>

    <!-- script.js file link the page -->

    <script src="script.js"> </script>
   
</body>
</html>
