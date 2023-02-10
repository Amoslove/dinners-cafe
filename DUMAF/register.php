<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DUMAF INVESTMENT NIGERIA LIMITED</title>
    <link rel="stylesheet" href="formValidation.php" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="bootstrap-5.1.3-dist/css/bootstrap-grid.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css" />
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/js/all.min.js" />
    <link rel="stylesheet" href="formValidation.php">

    <style>
      .row {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
      }

      .row::after {
        display: table;
        clear: both;
        content: "";
      }

      form {
        text-align: center;
        padding: 10px;
        font-size: large;
        font-weight: 600;
        color: red;
      }

      input[type="text"] {
        font-size: 20px;
        padding: 5px;
        width: 200px;
        text-align: center;
        border-radius: 10px;
        background-color: lightblue;
      }

      input[type="date"] {
        font-size: 20px;
        padding: 5px;
        width: 200px;
        text-align: center;
        border-radius: 10px;
        background-color: lightblue;
      }
    </style>
  </head>
  <!-- header-secton -->
  <body style="background-color: lightgray">
    <div class="container-fluid bg-dark">
      <div class="container-fluid bg-dark">
        <a href="index.html"
          ><img src="images/dumaf1.png" alt="" width="100"
        /></a>

        <a
          class="register"
          href="index.html"
          style="
            color: orange;
            text-decoration: none;
            float: right;
            text-align: center;
            margin: 30px;
          "
          ><h3 class="fa fa-home"></h3>
          home</a
        >
      </div>
    </div>
<!--looking for job section -->
    <div class="container-fluid" style="background-color: orange">
      <h1>
        <i class="fa fa-fade">looking for a job</i><i class="fa fa-bounce">?</i>
      </h1>
      <p style="text-align: center; font-style: oblique; font-weight: bolder">
        intrested in working with <em style="color: blue">Dinner's Cafe?</em>
      </p>
      <p style="text-align: center; font-weight: bolder">
        what are you waiting for? go ahead and fill in the form below
      </p>
    </div>

    <!-- form-section -->

    <div class="containner-fluid">
      <div class="row">
        <div class="col-sm-12">
          <!-- form -->
          <form action="php" method="post">
            <div class="form-group">
              <label for="fname"> First Name:</label><br />
              <input
                type="text"
                id="fname"
                name="fname"
                placeholder="first name"
               
              />
            </div>
            <br />
            <div class="form-group">
              <label for="mname"> middle Name:</label><br />
              <input
                type="text"
                id="mname"
                name="mname"
                placeholder="midle name"
               
              />
            </div>
            <br />
            <div class="form-group">
              <label for="lname">last Name:</label><br />
              <input
                type="text"
                id="lname"
                name="lname"
                placeholder="last name"
              
              />
            </div>
            <br />
            <div class="form-group">
              <label for="contact"> contact:</label><br />
              <input
                type="text"
                id="contact"
                name="contact"
                placeholder="phone number"
               
              />
            </div>
            <br />
            <div class="form-group">
              Age:<br />
              <input
                type="date"
                id="age"
                name="age"
               
              />
            </div>
            <br />
            <div class="form--group">
              <label for="email"> Email:</label><br />
              <input
                type="text"
                id="email"
                name="email"
                placeholder="*****"
              
              />
            </div>
            <br />
            <div class="form-group">
              <label for="address"> Address</label><br />
              <input
                type="text"
                id="address"
                name="address"
                placeholder="address"
               
              />
            </div>
            <br />
            <div class="form-group">
              <label for="nationality">Nationality</label><br />
              <input
                type="text"
                id="nationality"
                name="nationality"
                placeholder="country"
               
              />
            </div>
            <br />
            <div class="form-group">
              <label for="state">state of origin:</label><br />
              <input
                type="text"
                id="state"
                name="state"
                placeholder="state of origin"
              />
            </div>
            <br />
            <div class="form-group">
              <label for="LGA">LGA:</label><br />
              <input
                type="text"
                id="LGA"
                name="LGA"
                placeholder="LGA"
              /><br />
              <label for="religion">Religion</label>
              <select
                name="religion"
                id="religion"
                style="
                  margin-top: 10px;
                  border-radius: 10px;
                  background-color: lightblue;
                "
              >
                <option value="christian">christian</option>
                <option value="muslim">muslim</option>
                <option value="other">other</option>
              </select>
            </div>
            <br />
            <div class="form-group">
              status:
              <select
                name="status"
                id="status"
                style="
                  margin-top: 10px;
                  border-radius: 10px;
                  background-color: lightblue;
                "
              >
                <option value="married">married</option>
                <option value="single">single</option>
                <option value="other">other</option>
              </select>
            </div>
            <br />
            <div class="form-group">
              <label for="gender">Gender:</label>
              <select
                name="gender"
                id="gender"
                style="
                  margin-top: 10px;
                  border-radius: 10px;
                  background-color: lightblue;
                "
              >
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
              </select>
              <div
                class="container-fluid"
                style="text-align: center; margin-top: 10px"
              ></div>
              <br />

              <button
                class="btn"
                id="submit"
                name="submit"
                type="submit"
                style="border-radius: 10px; background-color: blue"
              >
                Submit
              </button>
              <button
                class="btn"
                id="reset"
                name="reset"
                type="reset"
                style="border-radius: 10px; background-color: yellow"
              >
                Reset
              </button>
              <button
                class="btn"
                id="exit"
                name="exit"
                type="button"
                style="border-radius: 10px; background-color: red"
              >
                Exit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <?php?>
  </body>
</html>
