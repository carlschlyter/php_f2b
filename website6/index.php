<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search user</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
    function showSuggestion(str){
        if(str.length == 0){
            document.getElementById('output').innerHTML == '';

        } else {
            //Ajax request
            
        }
    }    
    </script>
</head>
<body>
    <div class="container">
        <h1>Search users</h1>
        <form>
            Search user: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestion: <span id="output" style="font-wight:bold"></span></p>
    </div>
    
</body>
</html>