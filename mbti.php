<?php include('inc/server.php'); 
//if uer not logged user cant access this

if (empty($_SESSION['username'])) {
    header('location:check.php');

}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Myers-Briggs Type Indicator Test</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700'><link rel="stylesheet" href="assets/css/mbti.css">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Favicon  -->
    <link rel="icon" href="assets/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top " style="font-size: 1.5rem;">


        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="assets/images/logo2.png" alt="alternative" style="width: 80%;height: 80%;"> </a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="types_log.php">Personality Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">|</a>
                </li>
                <li class="nav-item">
                <?php if (isset($_SESSION["username"])): ?>
                    <a class="nav-link page-scroll" href="index.php?logout='1'">Logout</a>
            <?php endif ?>   

                </li>
            </ul>
        </div>
    </nav> 
    <!-- end of navigation -->
    <br>
    <br>
<!-- partial:index.partial.html -->
<div class="container main-container">
	<div class="page-header">
        <h2 class="user" style = "text-transform:capitalize;">Welcome <?php echo $_SESSION['username']; ?> <br> let's Find Out What Type You belong To</h2>
    </div>
	<ol>
    	<li><strong>At a party do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q1" value="e">
    	            Interact with many, including strangers
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q1" value="i">
    	            Interact with a few, known to you
                </label>
            </div>
        </li>

    	<li><strong>Are you more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q2" value="s">
    	            Realistic than speculative
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q2" value="n">
    	            Speculative than realistic
                </label>
            </div>
        </li>

    	<li><strong>Is it worse to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q3" value="s">
    	            Have your “head in the clouds”
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q3" value="n">
    	            Be “in a rut”
                </label>
            </div>
        </li>

    	<li><strong>Are you more impressed by:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q4" value="t">
    	            Principles
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q4" value="f">
    	            Emotions
                </label>
            </div>
        </li>

    	<li><strong>Are more drawn toward the:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q5" value="t">
    	            Convincing
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q5" value="f">
    	            Touching
                </label>
            </div>
        </li>

    	<li><strong>Do you prefer to work:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q6" value="j">
    	            To deadlines
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q6" value="p">
    	            Just “whenever”
                </label>
            </div>
        </li>

    	<li><strong>Do you tend to choose:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q7" value="j">
    	            Rather carefully
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q7" value="p">
    	            Somewhat impulsively
                </label>
            </div>
        </li>

    	<li><strong>At parties do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q8" value="e">
    	            Stay late, with increasing energy
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q8" value="i">
    	            Leave early with decreased energy
                </label>
            </div>
        </li>

    	<li><strong>Are you more attracted to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q9" value="s">
    	            Sensible people
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q9" value="n">
    	            Imaginative people
                </label>
            </div>
        </li>

    	<li><strong>Are you more interested in:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q10" value="s">
    	            What is actual
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q10" value="n">
    	            What is possible
                </label>
            </div>
        </li>

    	<li><strong>In judging others are you more swayed by:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q11" value="t">
    	            Laws than circumstances
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q11" value="f">
    	            Circumstances than laws
                </label>
            </div>
        </li>

    	<li><strong>In approaching others is your inclination to be somewhat:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q12" value="t">
    	            Objective
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q12" value="f">
    	            Personal
                </label>
            </div>
        </li>

    	<li><strong>Are you more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q13" value="j">
    	            Punctual
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q13" value="p">
    	            Leisurely
                </label>
            </div>
        </li>

    	<li><strong>Does it bother you more having things:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q14" value="j">
    	            Incomplete
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q14" value="p">
    	            Completed
                </label>
            </div>
        </li>

    	<li><strong>In your social groups do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q15" value="e">
    	            Keep abreast of other’s happenings
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q15" value="i">
    	            Get behind on the news
                </label>
            </div>
        </li>

    	<li><strong>In doing ordinary things are you more likely to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q16" value="s">
    	            Do it the usual way
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q16" value="n">
    	            Do it your own way
                </label>
            </div>
        </li>

    	<li><strong>Writers should:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q17" value="s">
    	            Say what they mean and mean what they say
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q17" value="n">
    	            Express things more by use of analogy
                </label>
            </div>
        </li>

    	<li><strong>Which appeals to you more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q18" value="t">
    	            Consistency of thought
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q18" value="f">
    	            Harmonious human relationships
                </label>
            </div>
        </li>

    	<li><strong>Are you more comfortable in making:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q19" value="t">
    	            Logical judgments
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q19" value="f">
    	            Value judgments
                </label>
            </div>
        </li>

    	<li><strong>Do you want things:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q20" value="j">
    	            Settled and decided
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q20" value="p">
    	            Unsettled and undecided
                </label>
            </div>
        </li>

    	<li><strong>Would you say you are more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q21" value="j">
    	            Serious and determined
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q21" value="p">
    	            Easy-going
                </label>
            </div>
        </li>

    	<li><strong>In phoning do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q22" value="e">
    	            Rarely question that it will all be said
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q22" value="i">
    	            Rehearse what you’ll say
                </label>
            </div>
        </li>

    	<li><strong>Facts:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q23" value="s">
    	            Speak for themselves
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q23" value="n">
    	            Illustrate principles
                </label>
            </div>
        </li>

    	<li><strong>Are visionaries:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q24" value="s">
    	            somewhat annoying
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q24" value="n">
    	            rather fascinating
                </label>
            </div>
        </li>

    	<li><strong>Are you more often:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q25" value="t">
    	            a cool-headed person
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q25" value="f">
    	            a warm-hearted person
                </label>
            </div>
        </li>

    	<li><strong>Is it worse to be:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q26" value="t">
    	            unjust
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q26" value="f">
    	            merciless
                </label>
            </div>
        </li>

    	<li><strong>Should one usually let events occur:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q27" value="j">
    	            by careful selection and choice
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q27" value="p">
    	            randomly and by chance
                </label>
            </div>
        </li>

    	<li><strong>Do you feel better about:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q28" value="j">
    	            having purchased
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q28" value="p">
    	            having the option to buy
                </label>
            </div>
        </li>

    	<li><strong>In company do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q29" value="e">
    	            initiate conversation
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q29" value="i">
    	            wait to be approached
                </label>
            </div>
        </li>

    	<li><strong>Common sense is:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q30" value="s">
    	            rarely questionable
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q30" value="n">
    	            frequently questionable
                </label>
            </div>
        </li>

    	<li><strong>Children often do not:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q31" value="s">
    	            make themselves useful enough
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q31" value="n">
    	            exercise their fantasy enough
                </label>
            </div>
        </li>

    	<li><strong>In making decisions do you feel more comfortable with:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q32" value="t">
    	            standards
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q32" value="f">
    	            feelings
                </label>
            </div>
        </li>

    	<li><strong>Are you more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q33" value="t">
    	            firm than gentle
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q33" value="f">
    	            gentle than firm
                </label>
            </div>
        </li>

    	<li><strong>Which is more admirable:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q34" value="j">
    	            the ability to organize and be methodical
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q34" value="p">
    	            the ability to adapt and make do
                </label>
            </div>
        </li>

    	<li><strong>Do you put more value on:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q35" value="j">
    	            infinite
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q35" value="p">
    	            open-minded
                </label>
            </div>
        </li>

    	<li><strong>Does new and non-routine interaction:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q36" value="e">
    	            stimulate and energize you
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q36" value="i">
    	            tax your reserves
                </label>
            </div>
        </li>

    	<li><strong>Are you more frequently:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q37" value="s">
    	            a practical sort of person
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q37" value="n">
    	            a fanciful sort of person
                </label>
            </div>
        </li>

    	<li><strong>Are you more likely to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q38" value="s">
    	            see how others are useful
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q38" value="n">
    	            see how others see
                </label>
            </div>
        </li>

    	<li><strong>Which is more satisfying:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q39" value="t">
    	            to discuss an issue thoroughly
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q39" value="f">
    	            to arrive at agreement on an issue
                </label>
            </div>
        </li>



    	<li><strong>Which rules you more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q40" value="t">
    	            your head
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q40" value="f">
    	            your heart
                </label>
            </div>
        </li>

    	<li><strong>Are you more comfortable with work that:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q41" value="j">
    	            contracted
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q41" value="p">
    	            done on a casual basis
                </label>
            </div>
        </li>

    	<li><strong>Do you tend to look for:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q42" value="j">
    	            the orderly
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q42" value="p">
    	            whatever turns up
                </label>
            </div>
        </li>

    	<li><strong>Do you prefer:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q43" value="e">
    	            many friends with brief contact
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q43" value="i">
    	            a few friends with more lengthy contact
                </label>
            </div>
        </li>

    	<li><strong>Do you go more by:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q44" value="s">
    	            facts
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q44" value="n">
    	            principles
                </label>
            </div>
        </li>

    	<li><strong>Are you more interested in:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q45" value="s">
    	            production and distribution
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q45" value="n">
    	            design and research
                </label>
            </div>
        </li>

    	<li><strong>Which is more of a compliment:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q46" value="t">
    	            “There is a very logical person.”
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q46" value="f">
    	            “There is a very sentimental person.”
                </label>
            </div>
        </li>

    	<li><strong>Do you value in yourself more that you are:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q47" value="t">
    	            unwavering
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q47" value="f">
    	            devoted
                </label>
            </div>
        </li>

    	<li><strong>Do you more often prefer the:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q48" value="j">
    	            final and unalterable statement
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q48" value="p">
    	            tentative and preliminary statement
                </label>
            </div>
        </li>

    	<li><strong>Are you more comfortable:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q49" value="j">
    	            after a decision
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q49" value="p">
    	            before a decision
                </label>
            </div>
        </li>

    	<li><strong>Do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q50" value="e">
    	            speak easily and at length with strangers
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q50" value="i">
    	            find little to say to strangers
                </label>
            </div>
        </li>

    	<li><strong>Are you more likely to trust your:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q51" value="s">
    	            experience
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q51" value="n">
    	            hunch
                </label>
            </div>
        </li>

    	<li><strong>Do you feel:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q52" value="s">
    	            more practical than ingenious
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q52" value="n">
    	            more ingenious than practical
                </label>
            </div>
        </li>

    	<li><strong>Which person is more to be complimented &ndash; one of:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q53" value="t">
    	            clear reason
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q53" value="f">
    	            strong feeling
                </label>
            </div>
        </li>



    	<li><strong>Are you inclined more to be:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q54" value="t">
    	            fair-minded
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q54" value="f">
    	            sympathetic
                </label>
            </div>
        </li>

    	<li><strong>Is it preferable mostly to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q55" value="j">
    	            make sure things are arranged
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q55" value="p">
    	            just let things happen
                </label>
            </div>
        </li>

    	<li><strong>In relationships should most things be:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q56" value="j">
    	            re-negotiable
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q56" value="p">
    	            random and circumstantial
                </label>
            </div>
        </li>

    	<li><strong>When the phone rings do you:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q57" value="e">
    	            hasten to get to it first
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q57" value="i">
    	            hope someone else will answer
                </label>
            </div>
        </li>

    	<li><strong>Do you prize more in yourself:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q58" value="s">
    	            a strong sense of reality
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q58" value="n">
    	            a vivid imagination
                </label>
            </div>
        </li>

    	<li><strong>Are you drawn more to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q59" value="s">
    	            fundamentals
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q59" value="n">
    	            overtones
                </label>
            </div>
        </li>

    	<li><strong>Which seems the greater error:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q60" value="t">
    	            to be too passionate
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q60" value="f">
    	            to be too objective
                </label>
            </div>
        </li>

    	<li><strong>Do you see yourself as basically:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q61" value="t">
    	            hard-headed
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q61" value="f">
    	            soft-hearted
                </label>
            </div>
        </li>

    	<li><strong>Which situation appeals to you more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q62" value="j">
    	            the structured and scheduled
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q62" value="p">
    	            the unstructured and unscheduled
                </label>
            </div>
        </li>

    	<li><strong>Are you a person that is more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q63" value="j">
    	            routinized than whimsical
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q63" value="p">
    	            whimsical than routinized
                </label>
            </div>
        </li>

    	<li><strong>Are you more inclined to be:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q64" value="e">
    	            easy to approach
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q64" value="i">
    	            somewhat reserved
                </label>
            </div>
        </li>

    	<li><strong>In writings do you prefer:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q65" value="s">
    	            the more literal
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q65" value="n">
    	            the more figurative
                </label>
            </div>
        </li>

    	<li><strong>Is it harder for you to:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q66" value="s">
    	            identify with others
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q66" value="n">
    	            utilize others
                </label>
            </div>
        </li>

    	<li><strong>Which do you wish more for yourself:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q67" value="t">
    	            clarity of reason
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q67" value="f">
    	            strength of compassion
                </label>
            </div>
        </li>

    	<li><strong>Which is the greater fault:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q68" value="t">
    	            being indiscriminate
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q68" value="f">
    	            being critical
                </label>
            </div>
        </li>

    	<li><strong>Do you prefer the:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q69" value="j">
    	            planned event
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q69" value="p">
    	            unplanned event
                </label>
            </div>
        </li>

    	<li><strong>Do you tend to be more:</strong><br>
            <div class="radio">
                <label>
	                <input type="radio" name="q70" value="j">
    	            deliberate than spontaneous
                </label>
            </div>
            <div class="radio">
                <label>
	                <input type="radio" name="q70" value="p">
    	            spontaneous than deliberate
                </label>
            </div>
        </li>

    </ol>

	<p id="scroll-down" class="hidden text-center"><i style="font-size: 2rem;">(scroll down)</i></p>    
	<p class="text-center"><button id="submit" class="cal-btn">Calculate Results</button></p>

    <div id="results" class="text-center hidden" >
        <br><br>
		<h2 id="type"></h2>
        <p id="type-details" class="type-description hidden" style="font-size: 2rem;">
        	<strong id="type-title"></strong><br><br>
            <strong><span id="type-percentage"></span> of population</strong><br><br>
            <span id="type-description"></span><br><br>
            <a id="site" href="types_log.php" target="_blank">Learn more about your type here</a>
        </p>
        <p class="pull-left"><span class="badge">E</span> (<span id="eScore"></span>%)</p>
        <p class="pull-right">(<span id="iScore"></span>%) <span class="badge">I</span></p>
        <div class="progress">
        	<div id="eiChart" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
	    <br class="clearfix">
        
        <p class="pull-left"><span class="badge">S</span> (<span id="sScore"></span>%)</p>
        <p class="pull-right">(<span id="nScore"></span>%) <span class="badge">N</span></p>
        <div class="progress">
        	<div id="snChart" class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">T</span> (<span id="tScore"></span>%)</p>
        <p class="pull-right">(<span id="fScore"></span>%) <span class="badge">F</span></p>
        <div class="progress">
        	<div id="tfChart" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
        
        <p class="pull-left"><span class="badge">J</span> (<span id="jScore"></span>%)</p>
        <p class="pull-right">(<span id="pScore"></span>%) <span class="badge">P</span></p>
        <div class="progress">
        	<div id="jpChart" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            <div class="center-bar"></div>
        </div>
        <br class="clearfix">
    </div>

</div>
<!-- partial -->
  <script  src="assets/js/mbti.js"></script>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="assets/js/scripts.js"></script> <!-- Custom scripts -->

</body>
</html>
