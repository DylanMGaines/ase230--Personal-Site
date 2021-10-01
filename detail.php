<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("json_util.php");
    require_once("functions.php");
    $theOne = huntMan($_GET["id"]);
    ?>

    <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ASE 230 - <?= $theOne->{"name"} ?></title>

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

    <style>
        .deleteButton {
            bottom: 5%;
            right: 5%;
            width: 3rem;
            height: 2.5rem;
            z-index: 5;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        .deleteButton:hover {
            width: 6rem;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        .deleteButton:hover::after {
            content: "delete";
        }
        .modButton {
            bottom: 20%;
            right: 5%;
            width: 3rem;
            height: 2.5rem;
            z-index: 5;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        .modButton:hover {
            width: 6rem;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        .modButton:hover::after {
            content: "modify";
        }
    </style>
</head>

<body>
<div class="container text-center mb-5">
    <h1><a href="./index.php" class="bi bi-house-fill text-secondary"></a> This is ASE 230
        - <?= $theOne->{"name"} ?>
    </h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="mb-2">
                <img class="w-100" src="<?= $theOne->{"img"} ?>"
                     alt="bink">
            </div>
            <div class="mb-2 d-flex">
                <h4 class="font-weight-normal"><?= $theOne->{"name"} ?></h4>
                <div class="social d-flex ml-auto">
                    <p class="pr-2 font-weight-normal">Follow on:</p>
                    <a href="<?= $theOne->{"facebook"} ?>" class="text-muted mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?= $theOne->{"twitter"} ?>" class="text-muted mr-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?= $theOne->{"instagram"} ?>" class="text-muted mr-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="<?= $theOne->{"linkedIn"} ?>" class="text-muted">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="mb-2">
                <ul class="list-unstyled">
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Dream profession:</span>

                        <label class="media-body"><?= $theOne->{"dProfession"} ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Dream company: </span>
                        <label class="media-body"><?= $theOne->{"dCompany"} ?></label>
                    </li>
                    <li class="media">
                        <span class="w-25 text-black font-weight-normal">Email: </span>
                        <label class="media-body"><?= $theOne->{"email"} ?></label>
                    </li>
                    <?php chronos($theOne->{"DOB"}); ?>
                </ul>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 pl-xl-3">
            <h5 class="font-weight-normal">Short intro</h5>
            <p><?= $theOne->{"intro"} ?></p>
            <div class="my-2 bg-light p-2">
                <p class="blockquote mb-0"><?= $theOne->{"quote"} ?></p>
            </div>
            <div class="mb-2 mt-2 pt-1">
                <h5 class="font-weight-normal">Top skills</h5>
            </div>
            <?php
            skillbar($theOne->{"skills"});
            ?>
            <h5 class="font-weight-normal">Fun fact</h5>
            <p><?= $theOne->{"funfact"} ?></p>
        </div>
    </div>
</div>
<a href='modify.php?id=<?= $theOne->{"key"} ?>'>
    <button class="btn btn-secondary rounded-pill text-center text-nowrap bg-secondary
              position-fixed rounded-circle ratio-1x1 bi-pencil fs-5 overflow-hidden modButton">
    </button>
</a>
<!-- So this setup doesn't look great, but it looks a lot better than the alternative imo -->
<a href='delete.php?id=<?= $theOne->{"key"} ?>'>
    <button class="btn btn-secondary rounded-pill text-center text-nowrap bg-secondary
              position-fixed rounded-circle ratio-1x1 bi-trash fs-5 overflow-hidden deleteButton">
    </button>
</a>
</body>

</html>