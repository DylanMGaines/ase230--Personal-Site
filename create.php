<?php
if (count($_POST)) {
    print_r($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("json_util.php");
    ?>

    <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ASE 230 - New Person</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
          integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/detail.css"/>
    <script src = "./assets/js/create.js"></script>
    <style>
        #subButton {
            right: 5%;
            bottom: 5%;
            width: 3rem;
            height: 3rem;
            z-index: 5;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        #subButton:hover {
            width: 7rem;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        #subButton:hover::after {
            content: "create";
        }
    </style>
</head>

<body>
<div class="container text-center mb-5">
    <h1><a href="./index.php" class="bi bi-house-fill text-secondary"></a> This is ASE 230
        - New Entry
    </h1>
</div>
<div class="container">
    <form>
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="mb-4">
                    <!--This is just a placeholder image, it can be anything-->
                    <img class="w-100" src="http://cdn.onlinewebfonts.com/svg/img_282899.png"
                         alt="bink">
                    <input type="text" name="img" id="img" class="form-control mt-1"
                           placeholder="Image Link (URL only)">
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="form-floating mb-2 media">
                            <input type="text" class="form-control media-body w-25" name="dProfession"
                                   id="dProfession" placeholder="Dream profession">
                            <label for="dProfession">Dream profession</label>
                        </li>
                        <li class="form-floating mb-2 media">
                            <input type="text" class="form-control media-body w-25" id="dCompany" name="dCompany"
                                   placeholder="Dream company">
                            <label for="dCompany">Dream company</label>
                        </li>
                        <li class="form-floating mb-2 media">
                            <input type="email" class="form-control media-body w-25" id="email" name="email"
                                   placeholder="Email">
                            <label for="email">Email</label>
                        </li>
                        <li class="form-floating mb-2 media">
                            <input type="date" class="form-control media-body w-25" name="DOB" id="DOB">
                            <label for="DOB">DOB: </label>
                        </li>
                        <li class="mb-2 media">
                            <div class="form-floating w-50">
                                <input type="text" class="form-control form-control-sm media-body" name="facebook"
                                       id="facebook" placeholder="Facebook Link">
                                <label for="facebook" class="fab fa-facebook"></label>
                            </div>
                            <div class="form-floating w-50">
                                <input type="text" class="form-control form-control-sm media-body" name="twitter"
                                       id="twitter" placeholder="Twitter Link">
                                <label for="twitter" class="fab fa-twitter"></label>
                            </div>
                        </li>
                        <li class="mb-2 media row-cols-2">
                            <div class="form-floating w-50 ">
                                <input type="text" class="form-control form-control-sm media-body" name="instagram"
                                       id="instagram" placeholder="Instagram Link">
                                <label for="instagram" class="fab fa-instagram"></label>
                            </div>
                            <div class="form-floating w-50">
                                <input type="text" class="form-control form-control-sm media-body" name="linkedIn"
                                       id="linkedIn" placeholder="LinkedIn Link">
                                <label for="linkedIn" class="fab fa-linkedin"></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 pl-xl-3">
                <label class="font-weight-normal h5" for="intro">Short intro</label>
                <textarea name="intro" id="intro" rows="4" class="w-100 form-control"></textarea>
                <div class="my-2 bg-light p-2">
                    <div class="form-floating">
                        <textarea class="w-100 form-control bg-light" name="quote" id="quote"
                                  placeholder="Quote" rows="4"></textarea>
                        <label for="quote">Quote</label>
                    </div>
                </div>
                <div class="mb-2 mt-2 pt-1">
                    <h5 class="font-weight-normal">Top skills</h5>
                </div>
                <div id="ph"></div>
                <button type="button" class="btn btn-outline-dark mb-3" id="skillButton">
                    + New Skill
                </button>

                <div class="form-floating">
                    <textarea class="form-control" id="funfact" name="funfact" placeholder="Fun fact"></textarea>
                    <label for="funfact">Fun fact</label>
                </div>
                <input class="form-control visually-hidden" id="key" name="key">
            </div>
        </div>
            <button type="submit" class="btn-outline-primary rounded-pill text-center text-nowrap
        position-fixed rounded-circle ratio-1x1 bi-keyboard fs-5 overflow-hidden" id="subButton">
            </button>
    </form>
</div>
</body>

</html>