<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $db = "cms";
        $user = "cms_user";
        $pass = "userpass";
        $conn = mysqli_connect($host, $user, $pass, $db) or exit("Unable to connect: " . mysqli_connect_error());

        $sql = "INSERT INTO encompass_quote (
            first_name,
            last_name,
            dob,
            email,
            phone,
            gender,
            marital_status,
            address,
            city,
            state,
            zip,
            county,
            residents,
            vehicles,
            dop,
            rented,
            sump,
            roof_year,
            conditions
        ) VALUES ( 
            '". $_POST['first_name'] ."',
            '". $_POST['last_name'] ."',
            '". $_POST['dob'] ."',
            '". $_POST['email'] ."',
            '". $_POST['phone'] ."',
            '". $_POST['gender_options'] ."',
            '". $_POST['marital_status'] ."',
            '". $_POST['address'] ."',
            '". $_POST['city'] ."',
            '". $_POST['state'] ."',
            '". $_POST['zip'] ."',
            '". $_POST['county'] ."',
            '". $_POST['residents'] ."',
            '". $_POST['vehicles'] ."',
            '". $_POST['purchase'] ."',
            '". $_POST['rented_options'] ."',
            '". $_POST['sump_pump'] ."',
            '". $_POST['roof_year'] ."',
            '". $_POST['conditions'] ."'
        )";

        $result = mysqli_query($conn, $sql);
        if(!$result) {
            echo mysqli_error($conn) . PHP_EOL;
        } else {
            $id = mysqli_insert_id($conn);
            echo "New Quote ID: $id";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Encompass Insurance Form</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">

            <form method="post">
                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="first_name" placeholder="First name">
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="last_name" placeholder="Last name">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <label for="dob" class="col-form-label">Date of Birth</label>
                    <div class="col">
                        <input type="text" class="form-control" name="dob" id="dob" placeholder="mm/dd/yyyy">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="phone number">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender_options" id="male_option"
                                value="Male">
                            <label class="form-check-label" for="male_option">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender_options" id="female_option"
                                value="Female">
                            <label class="form-check-label" for="female_option">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <select class="custom-select" name="marital_status" id="marital_status">
                            <option selected>Marital Status</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                    </div>
                    <div class="col">
                        <select class="custom-select" name="state" id="state">
                            <option selected>State</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Nebraska">Nebraska</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="ZIP">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="county" id="county" placeholder="County">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <select class="custom-select" name="residents" id="residents">
                            <option selected>Number of Residents</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="custom-select" name="vehicles" id="vehicles">
                            <option selected>Number of Vehicles</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <label for="purchase" class="col-form-label">Purchase Date</label>
                    <div class="col">
                        <input type="text" class="form-control" name="purchase" id="purchase" placeholder="mm/dd/yyyy">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <label for="purchase" class="col-form-label">Is home rented out?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rented_options" id="rented_yes"
                                value="Yes">
                            <label class="form-check-label" for="rented_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rented_options" id="rented_no"
                                value="No">
                            <label class="form-check-label" for="rented_no">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <select class="custom-select" name="sump_pump" id="sump_pump">
                            <option selected># of Sump Pumps</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3+</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="roof_year" id="roof_year" placeholder="Roof Year">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="conditions" class="col-form-label">Do any of the following conditions apply?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="conditions" id="conditions_yes"
                                value="Yes">
                            <label class="form-check-label" for="conditions_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="conditions" id="conditions_no"
                                value="No">
                            <label class="form-check-label" for="conditions_no">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <small class="form-text text-muted">&bull; Is foundation Open, on Piers, Pilings, or Stilts?</small>
                        <small class="form-text text-muted">&bull; Is there a trampoline
                            on the premises?</small>
                        <small class="form-text text-muted">&bull; Is there an unfenced pool on the premises?</small>
                        <small class="form-text text-muted">&bull; Is the property in a flood zone area?</small>
                        <small class="form-text text-muted">&bull; Is the property in a wave wash, sinkhole, pollution,
                            landslide, or cave-in area?</small>
                        <small class="form-text text-muted">&bull; Is a corporation, estate, trust or LLC listed as the named insured?</small>
                        <small class="form-text text-muted">&bull; Is there an underground oil tank on the premises?</small>
                        <small class="form-text text-muted">&bull; Is there a woodburning stove on the premises?</small>
                        <small class="form-text text-muted">&bull; Does the insured have any wild or exotic animals?</small>
                    </div>
                </div>

                <!-- <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">

                    </div>
                </div> -->

                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>