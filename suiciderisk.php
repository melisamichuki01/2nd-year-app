<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depression Assessment</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="form-container">
        <form>
            <p>
            <h1>Select a radio button and click on Submit to get the result.</h1>
            </p>
            <div class="section-1">

                    <h3>Over the last 2 weeks, how often have you been bothered by any of the following problems?</h3>
                    <label for="question1">1.Little interest or pleasure in doing things</label>
                    <input type="radio" id="radio_1" name="question1" value="0">0
                    <input type="radio" id="radio_2" name="question1" value="1">1
                    <input type="radio" id="radio_3" name="question1" value="2">2
                    <input type="radio" id="radio_4" name="question1" value="3">3
                    <br>


                    <label for="question2">2. Feeling down, depressed, or hopeless</label>
                    <input type="radio" name="question2" value="0">0
                    <input type="radio" name="question2" value="1">1
                    <input type="radio" name="question2" value="2">2
                    <input type="radio" name="question2" value="3">3
                    <br>



                    <label for="question3">3. Trouble falling or staying asleep, or sleeping too much</label>
                    <input type="radio" name="question3" value="0">0
                    <input type="radio" name="question3" value="1">1
                    <input type="radio" name="question3" value="2">2
                    <input type="radio" name="question3" value="3">3
                    <br>



                    <label for="question4">4. Feeling tired or having little energy</label>
                    <input type="radio" name="question4" value="0">0
                    <input type="radio" name="question4" value="1">1
                    <input type="radio" name="question4" value="2">2
                    <input type="radio" name="question4" value="3">3
                    <br>



                    <label for="question5">5. Poor appetite or overeating</label>
                    <input type="radio" name="question5" value="0">0
                    <input type="radio" name="question5" value="1">1
                    <input type="radio" name="question5" value="2">2
                    <input type="radio" name="question5" value="3">3
                    <br>



                    <label for="question6">6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down</label>
                    <input type="radio" name="question6" value="0">0
                    <input type="radio" name="question6" value="1">1
                    <input type="radio" name="question6" value="2">2
                    <input type="radio" name="question6" value="3">3
                    <br>



                    <label for="question7">7. Trouble concentrating on things, such as reading the newspaper or watching television</label>
                    <input type="radio" name="question7" value="0">0
                    <input type="radio" name="question7" value="1">1
                    <input type="radio" name="question7" value="2">2
                    <input type="radio" name="question7" value="3">3
                    <br>

                    <label for="question8">8. Moving or speaking so slowly that other people could have noticed. Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual</label>
                    <input type="radio" name="question8" value="0">0
                    <input type="radio" name="question8" value="1">1
                    <input type="radio" name="question8" value="2">2
                    <input type="radio" name="question8" value="3">3
                    <br>

                    <label for="question9">9. Thoughts that you would be better off dead, or of hurting yourself in some way</label>
                    <input type="radio" name="question9" value="0">0
                    <input type="radio" name="question9" value="1">1
                    <input type="radio" name="question9" value="2">2
                    <input type="radio" name="question9" value="3">3
                    <br>


                    <label for="question10">10. If you checked off any problems, how often do you have any of the problems?</label>
                    <input type="radio" name="question10" value="0">0
                    <input type="radio" name="question10" value="1">1
                    <input type="radio" name="question10" value="2">2
                    <input type="radio" name="question10" value="3">3
                    <br>

                    <button type="button" onclick="displayRadioValue()">Submit</button>

                    <br>

                    <div id="result"></div>
            </div>
            
        </form>
    </div>
  <script src="js\results.js" ></script>  
</body>
</html>