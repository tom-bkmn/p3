@extends('_masterUsers')

@section('title')
    Developer's Best Friend
@stop

@section('bodyContent_1')
     This is the Random Users Generator 

     <!-- 1. Text box for a number 
             2. Two checkboxes
             3. Button to make it happen
                 4 ui controls total
     -->
    <form action="{{ url('generateUsers') }}" method="POST">
        <div>
            <label for='numberOfUsers'>Please enter the number for how many users to generate.  Maximum value is allowed is 99.</label><br>
            <input type="text" maxlength=2 size=1 name='numberOfUsers' id='numberOfUsers'>
            <br>
            <br>
            <label for='appendANumber'>Include a Birthdate?</label><br>
            <input type='checkbox' name='appendANumber' id='appendANumber'>
            <br>
            <br>            
            <label for='appendACharacter'>Include a Profile?</label><br>
            <input type='checkbox' name='appendACharacter' id='appendACharacter'>
            <br>
            <br>
            <input class="button" type='submit' value="Let's generate some People!">
        </div>
     </form>
@stop
@section('bodyContent_2')
    <?php 
        if(isset( $data)){
            $faker = Faker\Factory::create();
            $name = $faker->name;
            echo $name."<br/>";
            echo $faker->address."<br/>";
            echo $name."  is a mean hippie with a weakness for high-end audio amplifiers and transducers."."<br/>";
        }
    ?>
@stop


