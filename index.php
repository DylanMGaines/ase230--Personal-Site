<!doctype html>
<html lang="en">

<head>
    <?php
    //At some point, I'd like to load these cards dynamically, but for now, I will leave it. I'm very tired.
    //Update: I now HAVE to load them dynamically, so uh

    class Person
    {
        public string $id;
        public string $fname;
        public string $lname;
        public string $position;
        public string $imageLink;
        public int $year;

        public function __construct(string $id, string $fname, string $lname, string $position, string $imageLink, int $year)
        {
            $this->id = $id;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->imageLink = $imageLink;
            $this->position = $position;
            $this->year = $year;
        }

        public function cardLoader(): void
        {
            echo '<div class="col-12 col-sm-6 col-lg-3">
                        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Team Thumb-->
                                <div class="advisor_thumb">
                                    <!--anchor with link to detail, image b/t anchor tags-->
                                    <a href="detail.php?id=', $this->id, '"><img src="', $this->imageLink, '" alt="" style = "width: 315px; height: 315px;"></a>
                                    <!-- Social Info, I refuse to do facebook, no shot-->
                                    <div class="social-info"><a href="detail.php?id=', $this->id, '"><i 
                                    class="fa fa-facebook"></i></a><a href="detail.php?id=', $this->id, '"><i
                                    class="fa fa-twitter"></i></a><a href="detail.php?id=', $this->id, '"><i 
                                    class="fa fa-linkedin"></i></a></div>
                                </div>
                                <!-- Team Details-->
                                <div class="single_advisor_details_info">
                                    <h6>', $this->fname, ' ', $this->lname, '</h6>
                                    <p class="designation">', $this->position, '</p>
                                    <div>';
                                        for ($i = 0; $i < $this->year; $i++ ) {
                                            echo '<span class="h5 bi-slash-lg"></span>';
                                        }
                                echo '</div>
                                </div>
                        </div>
                  </div>';
        }
    }

    $peeps = array(
        new Person ("DG01", 'Dylan', 'Gaines', 'Web Developer', 'https://nku.instructure.com/images/thumbnails/4624798/cOaJDtQ1ZeEaNvU7y14k9yYOsh4PONg0hvzVuD9Q', 3),
        new Person  ("ES01", 'Elise', 'Stromberg', 'Cyber-Security Specialist', 'https://nku.instructure.com/images/thumbnails/4370193/98G7lZ2ehtC90eVoURtFLRvHF2KMzTbujBiQLrE5', 3),
        new Person  ("AL01", 'Alex', 'Lisa', 'Cyber-Security Specialist', 'https://nku.instructure.com/images/thumbnails/2771178/eXKo8itQM50KEetPXVKGMZ2uzsuFNk8tCyKcNKB8', 2),
        new Person  ("QR01", 'Quentin', 'Roa', 'Web Developer', 'https://nku.instructure.com/images/thumbnails/3687491/xbUWCnAPRxLyisdFb4ADLlRGceYmL64DSkAEghvj', 2)
    );
    ?>

    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <style>
        .single_advisor_profile:hover .bi-slash-lg {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            color:#FFFFFF;
        }
        .single_advisor_profile .bi-slash-lg {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }
    </style>

    <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
</head>

<body>
<div class="container text-center">
    <h1>This is ASE 230 - class of Fall 2021</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>Our Creative <span>Team</span></h3>
                <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Single Advisor-->
        <!--FIRST card-->
        <?php
        $end = count($peeps);
        for ($i = 0; $i <= $end - 1; $i++) {
            $peeps[$i]->cardLoader();
        }
        ?>
    </div>
</div>
</body>

</html>