@extends('_masterLorem')

@section('title')
    Developer's Best Friend
@stop

@section('bodyContent_1')
     This is the Lorem Generator
     <!-- 1. Text box for a number 
             2. Button to make it happen

<form action="{{ url('/loremTool') }}" method="POST">
    <input type="text" name="foo" value="bar" />
    <input type="text" name="baz" value="boo" />
    <input type="submit" value="Send" />
</form>
     -->

     <form action="{{ url('loremTool') }}" method="POST">
        <div>
            <label for='numberOfParagraphs'>Please enter an integer for the number of paragraphs.  The maximum is 10.</label><br>
            <input type="text" maxlength=2 size=1 name='numOfPara' id='numOfPara' value='2'>
            <br>
            <br>
            <input class="button" type='submit' value="Let's generate some Latin!">
        </div>
     </form>
@stop

@section('bodyContent_2')
    <?php 
         if(isset( $data)){
             print_r($data); }
    ?>
@stop