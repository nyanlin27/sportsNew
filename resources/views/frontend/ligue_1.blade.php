@extends('frontend_master')
@section('content')

<!-- 
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    

          <div class="container  mt-5 border">
             
            
            <div class="row ">
            @foreach($matches as $match)
                <div class="col-md-6 p-5  border">
                   <div class="row">
                        <div class="col-xs-6 border-right pr-5 ">
                            <img src="{{ $match->team->photo }}" style="width: 50px;" ><p class="d-inline-block pl-2" style="font-size:1rem;">{{ $match->team->name }}</p>
                            <br><br>
                            <img src="{{ $match->otherteam->photo }}" style="width: 50px;" ><p class="d-inline-block pl-2">{{ $match->team->othername }}</p>
                        </div>
                    
                    <div class="col-xs-6 pl-5 pt-2">
                        
                         <p class=" pt-2">{{ $match->match_date }}</p>
                         
                         <p class=" pt-4">{{ $match->match_time }}</p>
                        
                    </div>
                   </div>
                </div>
            @endforeach
               
            </div>

          

           
          </div>

       
</body>
</html> -->

@endsection