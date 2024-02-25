<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Add something</h1>
<form>
@csrf
<input type="text" name="name" placeholder="name of new member">
<input type="text" name="name" placeholder="name of new student">
<input type="text" name="name" placeholder="name of new staff">
<input type="text" name="name" placeholder="name of new cleaner">
<select name="nami_id" id="">
    @foreach ($namis as $item)
    <option value="">{{ $item->name }}</option>  
    @endforeach

   
 
</select>
<textarea name="descprition" id="" cols="30" rows="10"></textarea>
</form>
</body>
</html>