# Using setTimeout
```
<!DOCTYPE html>
<html>
<head>
	<title>Page Reload after 10 seconds</title>
</head>
<body>
<h2>Hello</h2>
</body>
<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },10000);
</script>
</html>
```
# Using setInterval
```
<!DOCTYPE html>
<html>
<head>
	<title>Page Reload after 10 seconds</title>
</head>
<body>
<h2>Hello</h2>
</body>
<script type="text/javascript">
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 10000);
</script>
</html>
```
# Using Meta
```
<!DOCTYPE html>
<html>
<head>
	<title>Page Reload after 10 seconds</title>
	<meta http-equiv="refresh" content="10" />
</head>
<body>


<h2>Hello</h2>


</body>
</html>
```
