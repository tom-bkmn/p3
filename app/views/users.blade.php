@extends('_masterUsers')

@section('title')
    Developer's Best Friend
@stop

@section('bodyContent_1')
        This is the Random User Generator 
@stop

@section('bodyContent_2')
     <!-- 1. Text box for a number 
             2. Two checkboxes
             3. Button to make it happen
                 4 ui controls total
     -->
    <form action="{{ url('generateUsers') }}" method="POST">
        <div>
            <label for='numberOfUsers'>Please enter the number for how many users to generate.  Maximum value is allowed is 99.</label><br>
            <input type="text" maxlength=2 size=1 name='numberOfUsers' id='numberOfUsers' >
            <br>
            <br>
            <label for='includeBirthdate'>Include a Birthdate?</label><br>
            <input type='checkbox' name='includeBirthdate' id='includeBirthdate'>
            <br>
            <br>            
            <label for='includeProfile'>Include a Profile?</label><br>
            <input type='checkbox' name='includeProfile' id='includeProfile' value='1'>
            <br>
            <br>
            <input class="button" type='submit' value="Let's generate some People!">
        </div>
     </form>
@stop
@section('bodyContent_3')
    <?php 
        if(isset( $data['numberOfUsers'])){
            for ($i = 1; $i <= $data['numberOfUsers']; $i++) {
                $faker = Faker\Factory::create();
                $genderSelect = rand (0 , 1);
                $gender = "";
                if ($genderSelect) {
                    $gender = "female";         
                } else {
                    $gender = "male";
                }

                $firstName = $faker->firstName($gender);
                $lastName = $faker->lastName;
                echo $firstName . " " . $lastName . "<br/>";
                echo $faker->address."<br/>";
	 if (isset($data['includeBirthdate'])) {
                       echo "Birthdate: ".$faker->date($format='m-d-Y')."<br/>";
	 }
	 if (isset($data['includeProfile']) ) {
                       $profile = new ProfileGenerator($firstName, $lastName, $gender);
	     echo "Profile: ". $profile->getProfile() ."<br/>";
	 }
                echo"<br/>";
            }
        }
    ?>
@stop


