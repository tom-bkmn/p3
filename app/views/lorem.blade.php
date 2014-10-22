@extends('_masterLorem')

@section('title')
    Developer's Best Friend
@stop

@section('bodyContent_1')
     This is the Lorem text generator.  Use the text box below to enter a number for the number of paragraphs of Lorem text.
     
     <!-- Form controls: 
             1. Text box for a number 
             3. Button to generate the text.
     -->
     <form action="{{ url('loremTool') }}" method="POST">
        <div>
            <br>
            <br>
            <label for='numberOfParagraphs'>Please enter an integer from 1 to 10.</label><br>
            <input type="text" maxlength=2 size=1 name='numOfPara' id='numOfPara'>
            <br>
            <br>
            <input class="button" type='submit' value="Let's generate some Latin!">
        </div>
     </form>
@stop

@section('bodyContent_2')
    <?php 
        if(isset( $data['numOfPara'])){
            /* Validation - if the user enters a character other than a number
             * and the field is not empty set the error message.  
             * Zero is allowed, however.  
             */
            if (! is_numeric($data['numOfPara']) && $data['numOfPara'] != "" ) {
                echo "Please enter only a numeric value in the textbox.";
            } else {
                if( ! ($data['numOfPara'] > 0  && $data['numOfPara'] < 11 ) ) {
                    echo "Please enter only a numeric value between 1 and 10.";
                } else {
                    $generator = new Badcow\LoremIpsum\Generator();
                    $paragraphs = $generator->getParagraphs($data['numOfPara']);
                    echo implode('<p>', $paragraphs);
                 }
            }
        }
    ?>
@stop