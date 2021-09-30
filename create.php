<?php

//This doesn't feel like the most efficient way to do this, but other than multiple giant arrays, I can't think of anything else
//If I knew how to import classes, I'd put this and skill in seperate files, but alas

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
                <div class="mb-2">
                    <img class="w-100" src="..."
                         alt="bink">
                </div>
                <div class="mb-2 d-flex">
                    <h4 class="font-weight-normal"><!--<?= $theOne->{"name"} ?>--></h4>
                    <!--<div class="social d-flex ml-auto">
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
                    </div>-->
                </div>
                <div class="mb-2">
                    <ul class="list-unstyled">
                        <li class="form-floating mb-3 media">
                            <input type="text" class="form-control media-body w-25" name="dProfession"
                                   id="dProfession" placeholder="Dream profession">
                            <label for="dProfession">Dream profession</label>
                        </li>
                        <li class="form-floating mb-3 media">
                            <input type="text" class="form-control media-body w-25" id="dCompany" name="dCompany"
                                   placeholder="Dream company">
                            <label for="dCompany">Dream company</label>
                        </li>
                        <li class="form-floating mb-3 media">
                            <input type="email" class="form-control media-body w-25" id="email" name="email"
                                   placeholder="Email">
                            <label for="email">Email</label>
                        </li>
                        <li class="form-floating mb-3 media">
                            <input type="date" class="form-control media-body w-25" name="DOB" id="DOB">
                            <label for="DOB">DOB: </label>
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
                <?php
                skillbar($theOne->{"skills"});
                ?>
                <h5 class="font-weight-normal">Fun fact</h5>
                <p><?= $theOne->{"funfact"} ?></p>
            </div>
        </div>
    </form>
</div>
</body>

</html>