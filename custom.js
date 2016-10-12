
    <!--Google Maps-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

    <div id="map"></div>
    <script>
var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLZ9L9y3FPhCU0fcWVoyI6Cw7KL3AAr4&callback=initMap"
async defer></script>

<script>
function init_map() {

    var var_location = new google.maps.LatLng(55.132903, -6.656119);

    var var_mapoptions = {
        center: var_location,

        zoom: 14
    };

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
    });

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var_marker.setMap(var_map);

}

google.maps.event.addDomListener(window, 'load', init_map);
</script>

<!-- Animations init-->
<script>
new WOW().init();
</script>
<!-- Tooltips -->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
$(document).ready(function() {
    $("#hide").click(function () {
        $("h6").hide();
    });
    $("#show").click(function () {
        $("h6").show();
    });
});
</script>
<script>
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
        alert("Text Box doesn't exist.");
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
        else {
            alert("No Content");
        }
    }
</script>
<script>
$(function () {

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});
</script>
<script src="validator.js"></script>
    <script src="contact.js"></script>

    <script>

    jQuery(document).ready(function() {

        var offset = 250;

        var duration = 300;

        jQuery(window).scroll(function() {

            if (jQuery(this).scrollTop() > offset) {

                jQuery('.back-to-top').fadeIn(duration);

            } else {

                jQuery('.back-to-top').fadeOut(duration);

            }

        });

        &nbsp;

        jQuery('.back-to-top').click(function(event) {

            event.preventDefault();

            jQuery('html, body').animate({scrollTop: 0}, duration);

            return false;

        });

    });

</script>
