<?php
$name = "Dylan Gaines";
$intro = 'My name is Yoshikage Kira. I\'m 33 years old. My house is in the northeast section of Morioh, where all the villas are, and I am not married. I work as an employee for the Kame Yu department stores, and I get home every day by 8 PM at the latest. I don\'t smoke, but I occasionally drink. I\'m in bed by 11 PM, and make sure I get eight hours of sleep, no matter what. After having a glass of warm milk and doing about twenty minutes of stretches before going to bed, I usually have no problems sleeping until morning. Just like a baby, I wake up without any fatigue or stress in the morning. I was told there were no issues at my last check-up. I\'m trying to explain that I\'m a person who wishes to live a very quiet life. I take care not to trouble myself with any enemies, like winning and losing, that would cause me to lose sleep at night. That is how I deal with society, and I know that is what brings me happiness. Although, if I were to fight I wouldn\'t lose to anyone.';
$imageLink =  './assets/media/thisone.jpg';
$facebookLink = '#';
$twitLink = '#';
$igLink = '#';
$liLink = '#';
$proffession = 'Full-Stack Web Developer';
$dreamCo = 'The one reading this in my portfolio';
$email = 'GainesD2@mymail.nku.edu';
$quote = '"Life is locomotion... if you\'re not moving, you\'re not living. But there comes a time when you\'ve got to stop running away from things... and you\'ve got to start running towards something, you\'ve got to forge ahead. <b>Keep moving.</b> Even if your path isn\'t lit... trust that you\'ll find your way.<br> <span class="blockquote-footer"> <cite>The Flash, Vol 4 Issue #1</cite></span>';
class Skill {
    public string $skill;
    public int $percentage;
    
    public function __construct(string $skill, int $percentage){
        $this->skill = $skill;
        $this->percentage = $percentage;
    }
    public function skillBar() : void {
        echo '<div class="py-1">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:', $this->percentage,'%;" aria-valuenow="', $this->percentage,'" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar-title">', $this->skill,'</div>
                            <span class="progress-bar-number">', $this->percentage,'%</span>
                        </div>
                    </div>
                </div>';
    }
}

$skills = array(
    new Skill("Software Development", 65),
    new Skill("Information Technologies", 60),
    new Skill("Technical Communication", 85),
    new Skill ("Productively Channeling Spite", 200)
);

$funFact = "Over the summer, I learned multiple books-worth of Dungeons & Dragons lore because my friends woudn't stop being mad about not being able to play D&D.";


echo '
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">';

echo '


<body>
    <link rel="stylesheet" href="assets/css/detail.css" />
    <title>ASE 230 - ', $name, '</title>

    <div class="container text-center mb-5">
        <h1><a href="./index.php" class = "bi bi-house-fill text-secondary"></a>  This is ASE 230 - ', $name, '</h1>
    </div>
    <div class="container">
        <div class="row">';

//echo for left side
echo '      <div class="col-lg-5 col-md-6">
                <div class="mb-2">
                    <img class="w-100" src="', $imageLink, '" alt="Photograph of me taken last semester. I\'d write a full description but this is draft one, so I won\'t.">
                </div>
                <div class="mb-2 d-flex">
                    <h4 class="font-weight-normal">', $name, '</h4>
                    <div class="social d-flex ml-auto">
                        <p class="pr-2 font-weight-normal">Follow on:</p>
                        <a href="', $facebookLink, '" class="text-muted mr-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="', $twitLink, '" class="text-muted mr-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="', $igLink, '" class="text-muted mr-1">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="', $liLink, '" class="text-muted">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Dream profession:</span>

                            <label class="media-body">', $proffession, '</label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Dream company: </span>
                            <label class="media-body">', $dreamCo, '</label>
                        </li>
                        <li class="media">
                            <span class="w-25 text-black font-weight-normal">Email: </span>
                            <label class="media-body">', $email, '</label>
                        </li>
                    </ul>
                </div>
            </div>
            ';

//echo for right side 
echo        '<div class="col-lg-7 col-md-6 pl-xl-3">
                <h5 class="font-weight-normal">Short intro</h5>
                <p>', $intro, '</p>
                <div class="my-2 bg-light p-2">
                    <p class="blockquote mb-0">', $quote, '</p>
                </div>
                <div class="mb-2 mt-2 pt-1">
                    <h5 class="font-weight-normal">Top skills</h5>
                </div>';

foreach ($skills as $skill) {
    $skill->skillBar();
}

echo            '<h5 class="font-weight-normal">Fun fact</h5>
                <p>', $funFact,'</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
?>