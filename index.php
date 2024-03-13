
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Parse json data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
	<style type="text/css" media="screen">
		body{
			margin-top: 40px;
		}
	</style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="store.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <label for="jsonFile">Upload File</label>
                        <input type="file" name="jsonFile" id="jsonFile">
                        <input class="button-primary" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>