<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a mf item to the database</h1>
    <form method="post" action="{{route('gift.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Gift item</label>
            <input type="text" name="name" placeholder="">
        </div>
        <div>
            <label for="unit_price">Unit Price</label>
            <input type="text" name="unit_price" placeholder="">
        </div>
        <div>
            <label for="units_owned">Units owned</label>
            <input type="text" name="units_owned" placeholder="">
        </div>
        <div>

        <input type="submit" value="Save a gift item"> 
        </div>
    </form>
</body>
</html>