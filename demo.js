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
    image.src = "javascriptlogo.svg";
}

function resetImage(image){
    image.src = "html5logo.png";
}

function getLogs() {
    var values = [];
    var keys = Object.keys(localStorage);
    var i = keys.length;
    for (x = 0; x < 100; x++) {
        if (x > i)
            break;
        if (typeof(keys[x]) != "undefined") {
            console.log(keys[x]);
            console.log(localStorage.getItem(keys[x]));
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
        if (url.href.includes("demo2.html")) {
            window.location = "demo2.html";
            console.log(button1.id);
            switch (button1.id) {
                case /button1/:
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
            console.log("Log in was successful.");
            document.cookie = "userName = "+userNameInput.value;
            console.log(document.cookie);
        }
        else {
            console.log("You've entered an incorrect Username or Password, please try again.");
        }
}





