<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<title>Jake</title>
</head>
<body>
<div>
Our current score is: <span id="spanner"></span>
</div>
<script>

var url        = 'http://hacker-olympics-london.herokuapp.com/leaderboard.json';
var teamNumber = '14';

$(document).ready(function() {
    $.get(url, function(data) {
        $('#spanner').text(data[teamNumber].points);
    });
});
</script>
</body>
