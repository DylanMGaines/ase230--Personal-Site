<?php
/*
     * Because of the titanic quantity of data that would be taken up if I filled out all of these, I'm only including two full records, me, and a filler.
     * I'll fill out Names and Jobs etc, but I'm about to spend labor day weekend working in the meat department, I do not
     * have the spare energy to write whole records.
     * */

//pseudo external database
$dbVar = [
    "DG01" => ['Dylan', 'Gaines', 'Web Developer', 'https://nku.instructure.com/images/thumbnails/4624798/cOaJDtQ1ZeEaNvU7y14k9yYOsh4PONg0hvzVuD9Q', 3],
    "ES01" => ['Elise', 'Stromberg', 'Cyber-Security Specialist', 'https://nku.instructure.com/images/thumbnails/4370193/98G7lZ2ehtC90eVoURtFLRvHF2KMzTbujBiQLrE5', 3],
    "AL01" => ['Alex', 'Lisa', 'Cyber-Security Specialist', 'https://nku.instructure.com/images/thumbnails/2771178/eXKo8itQM50KEetPXVKGMZ2uzsuFNk8tCyKcNKB8', 2],
    "QR01" => ['Quentin', 'Roa', 'Web Developer', 'https://nku.instructure.com/images/thumbnails/3687491/xbUWCnAPRxLyisdFb4ADLlRGceYmL64DSkAEghvj', 2]
];

$longDbVar = [
    "DG01" => [
        'I\'m a 21 year old applied software engineering major at Northern Kentucky University. I commmute from the Lawrenceburg, Indiana area, where I also work as an employee for the Kroger Company on weekends and Mondays. I enjoy learning languages, but haven\'t had the time to commit to one recently. I greatly enjoy working with code, and tend to get hyped up when talking about things I find interesting. I may not be great with my time, but more than make up for it with tenacity, creativity and energy.',
        '"Life is locomotion... if you\'re not moving, you\'re not living. But there comes a time when you\'ve got to stop running away from things... and you\'ve got to start running towards something, you\'ve got to forge ahead. <b>Keep moving.</b> Even if your path isn\'t lit... trust that you\'ll find your way."<br> <span class="blockquote-footer"> <cite>The Flash, Vol 4 Issue #1</cite></span>',
        "Over the summer, I learned multiple books-worth of Dungeons & Dragons lore because my friends wouldn't stop being mad about not being able to play D&D.",
        "GainesD2@mymail.nku.edu", 'The one reading this in my portfolio',
        [
            ["Software Development", 65],
            ["Information Technologies", 60],
            ["Technical Communication", 85],
            ["Productively Channelling Spite", 200],
        ]
    ],
    "O" => [
        'Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline, but is a crucial component to achievement of any kind. Before
                    starting any new activity, ask yourself if that activity will move you closer to your goals. If the answer is no, you may want to reconsider doing it at that time.',
        'The price is something not necessarily defined as financial. It could be time, effort, sacrifice, money or perhaps, something else.',
        'It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or
                    un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!',
        'support@technol.com', 'Google',
        [
            ["Finance", 85],
            ["Education", 77],
            ["Information Technology", 70]
        ]
    ]
];

class Skill
{
    public string $skill;
    public int $percentage;

    public function __construct(string $skill, int $percentage)
    {
        $this->skill = $skill;
        $this->percentage = $percentage;
    }

    public function skillBar(): void
    {
        echo '<div class="py-1">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:', $this->percentage, '%;" aria-valuenow="', $this->percentage, '" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar-title">', $this->skill, '</div>
                                    <span class="progress-bar-number">', $this->percentage, '%</span>
                                </div>
                            </div>
                        </div>';
    }
}

//This doesn't feel like the most efficient way to do this, but other than multiple giant arrays, I can't think of anything else
//If I knew how to import classes, I'd put this and skill in seperate files, but alas
class Person
{
    protected string $fname, $lname, $intro, $imageLink, $profession, $quote, $funFact, $email, $dreamCo;
    protected array $links = [
        "fb" => "#",
        "ig" => "#",
        "twt" => "#",
        "li" => "#"
    ];
    protected int $year;
    protected array $skills = [];

    public function __construct(array $entry, array $longStuff)
    {
        //if there was an efficient way to loop this, I'd do that, but I'd have to create an array of the this-> varnames and that's pointless given that it'd be single use
        $this->fname = $entry[0];
        $this->lname = $entry[1];
        $this->profession = $entry[2];
        $this->imageLink = $entry[3];
        $this->year = $entry[4];
        $this->intro = $longStuff[0];
        $this->quote = $longStuff[1];
        $this->funFact = $longStuff[2];
        $this->email = $longStuff[3];
        $this->dreamCo = $longStuff[4];
        $this->setSkills($longStuff[5]);
    }

    public function setSkills(array $skillSet)
    {
        $l = count($skillSet);
        for ($i = 0; $i < $l; $i++) {
            array_push($this->skills, new Skill($skillSet[$i][0], $skillSet[$i][1]));
        }
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function getImageLink()
    {
        return $this->imageLink;
    }

    public function getIntro()
    {
        return $this->intro;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDreamCo()
    {
        return $this->dreamCo;
    }

    public function getFunFact()
    {
        return $this->funFact;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function getProfession()
    {
        return $this->profession;
    }

    public function getQuote()
    {
        return $this->quote;
    }

    public function displaySkills()
    {
        for ($i = 0; $i < count($this->skills); $i++) {
            $this->skills[$i]->skillbar();
        }
    }

    public function getYear()
    {
        return $this->year;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $theOne = new Person($dbVar[$_GET["id"]], $longDbVar[($_GET["id"] == "DG01") ? $_GET["id"] : "O"]);
    ?>

    <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ASE 230 - <?= $theOne->getFname(), ' ', $theOne->getLname() ?></title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
          integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/detail.css"/>
</head>

<body>
<div class="container text-center mb-5">
    <h1><a href="./index.php" class="bi bi-house-fill text-secondary"></a> This is ASE 230
        - <?= $theOne->getFname(), ' ', $theOne->getLname() ?>
    </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="mb-2">
                <img class="w-100" src="<?= $theOne->getImageLink() ?>"
                     alt="bink">
            </div>
            <div class="mb-2 d-flex">
                <h4 class="font-weight-normal"><?= $theOne->getFname(), ' ', $theOne->getLname() ?></h4>
                <div class="social d-flex ml-auto">
                    <p class="pr-2 font-weight-normal">Follow on:</p>
                    <a href="<?= $theOne->getLinks()["fb"] ?>" class="text-muted mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?= $theOne->getLinks()["twt"] ?>" class="text-muted mr-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?= $theOne->getLinks()["ig"] ?>" class="text-muted mr-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="<?= $theOne->getLinks()["li"] ?>" class="text-muted">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="mb-2">
                <ul class="list-unstyled">
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Dream profession:</span>

                        <label class="media-body"><?= $theOne->getProfession() ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Dream company: </span>
                        <label class="media-body"><?= $theOne->getDreamCo() ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Email: </span>
                        <label class="media-body"><?= $theOne->getEmail() ?></label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 pl-xl-3">
            <h5 class="font-weight-normal">Short intro</h5>
            <p><?= $theOne->getIntro() ?></p>
            <div class="my-2 bg-light p-2">
                <p class="blockquote mb-0"><?= $theOne->getQuote() ?></p>
            </div>
            <div class="mb-2 mt-2 pt-1">
                <h5 class="font-weight-normal">Top skills</h5>
            </div>
            <?php
            $theOne->displaySkills();
            ?>
            <h5 class="font-weight-normal">Fun fact</h5>
            <p><?= $theOne->getFunFact() ?></p>
        </div>
    </div>
</div>
</body>

</html>