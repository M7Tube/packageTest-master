<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>file_1668722854505</title>
</head>

<body>

    <img width="83" height="69" src="data:image/png;base64, {!! base64_encode(file_get_contents('../storage/app/images/' . $data['title_page']['icon'])) !!}" />
    <br />
    <h1>{{ $data['title_page']['title'] }}</h1>
</body>

</html>
