<?php 
  session_start();
?>

<?php
    $host = "localhost";
    $username = "root";
    $password = "password";
    $db = "aral";

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $db);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    } else {
      if (isset($_POST["courseName"]) && $_POST["courseDescription"] && $_POST["courseAuthor"]) {

        // Validate the inputs
        function validate($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);

          return $data;
        }

        $courseName = validate($_POST["courseName"]);
        $courseDescription = validate($_POST["courseDescription"]);
        $courseAuthor = validate($_POST["courseAuthor"]);
        $courseURL = validate($_POST["courseURL"]);

        $sql = "INSERT INTO Courses (course_name, course_description, course_author, course_url, course_img) VALUES ('$courseName', '$courseDescription', '$courseAuthor', '$courseURL')";

        $result = mysqli_query($conn, $sql);

        if($result) {
          header("Location: profile.php");
          exit();
        }
      }
  }  
  
?>
<?php include 'header.php' ?>
<style> 
        input[type=text] {
        width: 15%;
        padding: 5px 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        }

        input[type=text]:focus {
        border: 3px solid #555;
        }
</style>
  <body>

  <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="index.php" class="az-logo"><span></span> Aral - Online Learning Course Management</a>
          <a href="#" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.php" class="az-logo"><span></span> Aral</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
        
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
          <div class="az-header-message">
            <a href="#"><i class="typcn typcn-messages"></i></a>
          </div><!-- az-header-message -->
         
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="https://via.placeholder.com/500" alt="">
                </div><!-- az-img-user -->
                <h6>User</h6>
                
              </div><!-- az-header-profile -->

              <a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="signin.php" class="dropdown-item"><i class="typcn typcn-upload-outline"></i> Sign In</a>
              <a href="signup.php" class="dropdown-item"><i class="typcn typcn-user-add-outline"></i> Create Account </a>
            
              <a href="signout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="az-content-left az-content-left-profile">

          <div class="az-profile-overview">
            <div class="az-img-user">
              <img src="assets/img/face10.jpg" alt="">
            </div><!-- az-img-user -->
            <div class="d-flex justify-content-between mg-b-20">
              <div>
                <h5 class="az-profile-name"><?php echo $_SESSION['userName']; ?></h5>
                
              </div>
              <div class="btn-icon-list">
                <button class="btn btn-indigo btn-icon"><i class="typcn typcn-plus-outline"></i></button>
                <!-- <button class="btn btn-primary btn-icon"><i class="typcn typcn-message"></i></button> -->
              </div>
            </div>

            
            <hr class="mg-y-30">

            <label class="az-content-label tx-13 mg-b-20">Websites &amp; Social Channel</label>
            <div class="az-profile-social-list">
              <div class="media">
                <div class="media-icon"><i class="icon ion-logo-github"></i></div>
                <div class="media-body">
                  <span>Github</span>
                  <a href="">github.com/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="icon ion-logo-twitter"></i></div>
                <div class="media-body">
                  <span>Twitter</span>
                  <a href="">twitter.com/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="icon ion-logo-linkedin"></i></div>
                <div class="media-body">
                  <span>Linkedin</span>
                  <a href="">linkedin.com/in/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
              <div class="media">
                <div class="media-icon"><i class="icon ion-md-link"></i></div>
                <div class="media-body">
                  <span>My Portfolio</span>
                  <a href="">bootstrapdash.com/<?php echo $_SESSION['userName'] ?></a>
                </div>
              </div><!-- media -->
            </div><!-- az-profile-social-list -->

          </div><!-- az-profile-overview -->

        </div><!-- az-content-left -->
        <div class="az-content-body az-content-body-profile">
          <nav class="nav az-nav-line">
            <a href="profile.php" class="nav-link">Overview</a>
            <a href="addCourse.php" class="nav-link">Add a Course</a>
            <a href="quiz.php" class="nav-link active">Take a Quiz</a>
            <a href="xmlHtml.php" class="nav-link">XML Data Parsed</a>
          
          </nav>

          <div class="card-body">

          <!-- Code for the quiz -->
            <div class="section" id="classes">
                <h2>Take the quiz:</h2>

                <div class="article">
                    <div id="quiz"></div>
                    <br />
                    <button id="submit" class="btn btn-az-secondary">Get Results</button>
                    <br />
                    <div id="results"></div>
                </div>

            </div>
          <script>
        // Create a JSON object that contains the questions and the answers
        var myQuestions = [
            {
                question: "What does a strong tag do?",
                answers: {
                    a: 'Increase the size of the text',
                    b: 'Does an emphasis effect on the text',
                    c: 'Moves the text on top of a page',
                    d: 'Bolds the text to show importance'
                },
                correctAnswer: 'd'
            },
            {
                question: "Where should the title element appear in an HTML5 document?",
                answers: {
                    a: 'Nested inside the p tag',
                    b: 'Nested inside the body tag',
                    c: 'Nested inside the head tag',
                    d: 'Nested inside the footer tag'
                },
                correctAnswer: 'c'
            },
            {
                question: "Which is NOT an HTML input type?",
                answers: {
                    a: 'tel',
                    b: 'email',
                    c: 'gender',
                    d: 'date'
                },
                correctAnswer: 'c'
            },
            {
                question: "Who has the highest priority between the style sheets?",
                answers: {
                    a: 'Inline Style Sheet',
                    b: 'Internal Style Sheet',
                    c: 'External Style Sheet',
                    d: 'Absolute Style Sheet'
                },
                correctAnswer: 'a'
            },
            {
                question: "Which CSS concept is one of the most important?",
                answers: {
                    a: 'Embedded Style Sheet',
                    b: 'Bold tag',
                    c: 'Box Model',
                    d: 'Paragraph tag'
                },
                correctAnswer: 'c'
            },
            {
                question: "What does the writeln method do?",
                answers: {
                    a: 'Draws a line on the website.',
                    b: 'Writes a line of HTML5 text on the HTML5 document.',
                    c: 'Creates a box on the website.',
                    d: 'Writes a solid black line in the browser.'
                },
                correctAnswer: 'b'
            },
            {
                question: "What does window.alert() do?",
                answers: {
                    a: 'Creates an alert sound for the website.',
                    b: 'Does an emphasis animation on all of the HTML texts.',
                    c: 'Signals/alerts the user with a "pop-up" window.',
                    d: 'Closes the browser.'
                },
                correctAnswer: 'c'
            },
            {
                question: "What is an onclick event?",
                answers: {
                    a: 'Event occurs when you hover over an HTML element.',
                    b: 'Event occurs when you click on an HTML element.',
                    c: 'Event occurs when you right-click on an HTML element.',
                    d: 'Event occurs when you highlight on an HTML element'
                },
                correctAnswer: 'b'
            },
            {
                question: "Which JavaScript event is NOT mouse-related?",
                answers: {
                    a: 'keyup',
                    b: 'onclick',
                    c: 'onmouseup',
                    d: 'oncontextmenu'
                },
                correctAnswer: 'a'
            },
            {
                question: "Which JavaScript event is NOT keyboard-related?",
                answers: {
                    a: 'onkeydown',
                    b: 'onclick',
                    c: 'onkeypress',
                    d: 'onkeyup'
                },
                correctAnswer: 'b'
            },
            {
                question: "What does XML stand for?",
                answers: {
                    a: 'eXtensive Markup Language',
                    b: 'eXternal Materal Link',
                    c: 'eXtraordinary Meta Logic',
                    d: 'eXternal Meta Link'
                },
                correctAnswer: 'a'
            },
            {
                question: "Which of the following is false?",
                answers: {
                    a: 'Every XML element does not need to be properly closed.',
                    b: 'White spaces are preserved.',
                    c: 'XSL formats outputs and transforms XML documents.',
                    d: 'XML is open-source.'
                },
                correctAnswer: 'a'
            },
            {
                question: "What does AJAX stand for?",
                answers: {
                    a: 'Asynchronous JSON and XSL',
                    b: 'Asynchronous JavaScript and XML',
                    c: 'Asynchronous Java and XSLT',
                    d: 'Asynchronous JavaScript and XSL'
                },
                correctAnswer: 'b'
            },
            {
                question: "What object is important when sending a request to the server?",
                answers: {
                    a: 'XMLHttpRequest object',
                    b: 'XMLGetRequest object',
                    c: 'XMLPostRequest object',
                    d: 'XMLGrabRequest object'
                },
                correctAnswer: 'b'
            },
            {
                question: "The term Ajax as coined by?",
                answers: {
                    a: 'James Naismith',
                    b: 'Brandan Eich',
                    c: 'Guido van Rossum',
                    d: 'Jesse James Garrett'
                },
                correctAnswer: 'd'
            }
        ];

        // Work variables
        var quizContainer = document.getElementById('quiz');
        var resultsContainer = document.getElementById('results');
        var submitButton = document.getElementById('submit');

        // Call the generateQuiz function
        generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

        // generateQuiz function code
        function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

            function showQuestions(questions, quizContainer){
                // we'll need a place to store the output and the answer choices
                var output = [];
                var answers;

                // iterate through every question, for each question.
                for(var i = 0; i < questions.length; i++){
                    
                    // initialize list of answers
                    answers = [];

                    // grab the letter from the answers
                    for(letter in questions[i].answers){

                        // add answer choices as radio buttons
                        answers.push(
                            '<label>'
                                + '<input type="radio" name="question'+ i + '" value="' + letter + '">'
                                + letter + ': '
                                + questions[i].answers[letter]
                            + '</label><br/>'
                        );
                    }

                    // add this question and its answers to the output
                    output.push(
                        '<div class="question">' + questions[i].question + '</div>'
                        + '<div class="answers">' + answers.join('') + '</div>'
                    );
                }

                // finally combine our output list into one string of html and put it on the page
                quizContainer.innerHTML = output.join('');
            }


            // Function for quiz
            function showResults(questions, quizContainer, resultsContainer){
                
                // gather answer containers from our quiz
                var answerContainers = quizContainer.querySelectorAll('.answers');
                
                // keep track of user's answers
                var userAnswer = '';
                var numCorrect = 0;
                
                // for each question...
                for(var i = 0; i < questions.length; i++){

                    // find selected answer
                    userAnswer = (answerContainers[i].querySelector('input[name=question' + i + ']:checked')||{}).value;
                    
                    // if answer is correct
                    if(userAnswer === questions[i].correctAnswer){
                        // add to the number of correct answers
                        numCorrect++;
                        
                        // color the answers green
                        answerContainers[i].style.color = 'green';
                    }
                    // if answer is wrong or blank
                    else{
                        // color the answers red
                        answerContainers[i].style.color = 'red';
                    }
                }

                // show number of correct answers out of total
                resultsContainer.innerHTML = "<b>Your Result: " + numCorrect + ' out of ' + questions.length + " (" + ((numCorrect/questions.length) * 100) + "%)" + ". You can change your answer on your mistakes and keep trying until you get the correct answer!</b>";
            }

            // show questions right away
            showQuestions(questions, quizContainer);
            
            // on submit, show results
            submitButton.onclick = function(){
                showResults(questions, quizContainer, resultsContainer);
            }

        }
    </script>
           
           
              </div>
            </div>
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include 'footer.php' ?>

  </body>
</html>
