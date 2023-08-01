<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advices</title>
</head>
<body>
    <main>
        <div style="width: 100%;text-align:center; padding-top:3px; padding-bottom: 3px; background-color:rgb(79, 16, 138)">
            <h1 style="color: rgb(255, 255, 255); font-family:Arial, Helvetica, sans-serif">Life advices</h1>
        </div>
        <div style="margin-top:40px; text-align:center;">
            <fieldset style="width: 30%; margin:auto; padding:30px;">
                <legend style="color: blueviolet; font-weight:bold; font-family:Arial, Helvetica, sans-serif">** Enter a number and get a Life advice **</legend>
                <form action="/get-advices-one" method="get">
                    <h2><span style="color: rgb(29, 24, 34); font-weight:bold; font-family:Arial, Helvetica, sans-serif">Your number ?</span></h2><br>
                    <input required style=" height:30px; padding: 5px; font-size:20px; text-align:center; border-radius:10px; border: 3px solid rgb(110, 88, 154)" type="number" name="id"><br><br><br>
                    <input style="padding:12px; font-size:16px; font-weight:bold; color:white; background-color:rgb(96, 9, 183); border-radius:10px;" type="submit" value="Watch Result">
                    
                </form>
                <br>
                <a style="color: blueviolet; font-weight:bold;" href="/get-advices">Get random 100 advices</a>
                <p style="font-size:16px; font-weight:bold;">Result :</p>
                @isset($message)
                    <p style="font-size:16px; font-weight:bold;">Your number : {{$number}}</p>
                @endisset
                <h3 style="font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                    @isset($message)
    
                    {{$message['message']}}
    
                    @endisset
                </h3>
            </fieldset>
        </div>
    </main>


</body>
</html>