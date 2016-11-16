function log(name, content, entryDate){
    this.logName = name;
    this.logContent = content;
    this.logDate = entryDate;
}
function checkTags(content){
    if(content.search('<') >= 0) {
        return true;
    }
    else{
        return false;
    }
}
function checkContent(content){
    return Boolean(content);
}

log.prototype.save=function(){
    localStorage.save(this.logName, JSON.stringify(this));
}

function createLog() {
    if (document.getElementById("textArea") == null) {
        alert("TextArea doesn't exist on page.");
    }
    else {
        var content = document.getElementById("textArea").value;
        var hasContent = checkContent(content);
        if (hasContent) {
            var hasTags = checkTags(content);
            if (hasTags) {
                alert("You have entered < > tags, please remove them.")
            }
            else {
                var promptResponse = prompt("Name your Log:");
                var date = new Date();
                alert(date);
                var logEntry = new log(promptResponse, content, date);
                localStorage.setItem(promptResponse, JSON.stringify(logEntry));
                var retrieveLog = JSON.parse(localStorage.getItem(promptResponse));
                document.getElementById("contentOutput").innerText = retrieveLog.logContent;
                document.getElementById("nameOutput").innerText = retrieveLog.logName;
                document.getElementById("dateOutput").innerText = retrieveLog.logDate;
            }
        }
        else
        {
            alert("No Content");
        }
    }
}

function setImage(image){
    image.src = "img/png/javascriptlogo.svg";
}

function resetImage(image){
    image.src = "img/png/html5logo.png";
}

function getLogs() {
    var values = new Array();
    var keys = Object.keys(localStorage);
    var i = keys.length;
    for (x = 0; x < 100; x++) {
        if (x > i)
            break;
        if (typeof(keys[x]) != "undefined") {
            console.log(keys[x]);
            values.push(JSON.parse(localStorage.getItem(keys[x])));
        }
        console.log(values);
        with(values[0]){
            console.log(logName);
        }
    }
}
    /*while(i--){
     if(typeof(keys[i])!="undefined"){
     console.log(keys[i]);
     console.log(localStorage.getItem(keys[i]));
     }*/
    /*do {
     if (typeof(keys[i]) != "undefined") {
     console.log(keys[i]);
     console.log(localStorage.getItem(keys[i]));
     }
     } while (i--){
     }*/
    /*for(x=0;x<i;x++){
     if(typeof(keys[x])!="undefined"){
     console.log(keys[x]);
     console.log(localStorage.getItem(keys[x]));
     }*/

function getUrl(button1) {
    var url = window.location;
    console.log(url);
    if (url.href.includes("demo.html")) {
        window.location = "demo2.html";
        console.log(button1.id);
        switch (button1.id) {
            case /button1/:
                console.log("This is button 1");
                break;
            case /button2/:
                console.log("This is button 2");
                break;
        }
    }
}

    function goBack() {
        window.history.back();
    }

    function getBrowser() {
        alert(navigator.userAgent);
    }

    function checkUser() {
        event.preventDefault();
        var form = document.getElementById("logIn");
        var inputs = form.getElementsByTagName("input");
        var userNameInput = inputs[0];
        var userPasswordInput = inputs[1];
        console.log(userNameInput.value);
        console.log(userPasswordInput.value);
        if (userNameInput.value == "Matt" && userPasswordInput.value == "Password01") {
            alert("Log in was successful.");
            document.cookie = "userName = "+userNameInput.value;
            console.log(document.cookie);
                window.location = "demo2.html";
        }
        else {
            alert("Username or Password invalid, please try again.");
        }
}

function randomNumber() {
    document.getElementById("mathRandom").innerHTML = Math.floor(Math.random() * 10) + 1
}
function check() {
    document.getElementById("myCheck").checked = true;
}

function uncheck() {
    document.getElementById("myCheck").checked = false;
}

function selectGender(){
    if(document.getElementById("male").checked){
      alert("You are male.");
    }
    else if(document.getElementById("female").checked){
        alert("You are female.")
    }
}

function dropDownList(dropDown)
{
    dropDown.value="0";
}

function changeColour() {
    document.getElementById("h6Change").style.color = "red";
}

function changeText(){
    document.getElementById("p1").innerHTML = "The text has been changed.";
}


