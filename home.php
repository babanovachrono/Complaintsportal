<?php

include 'lecturers.php';

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/css.css">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>


</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="css\images\icon.svg" alt="icon SVG" class="filter-gold" />

            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">

            <li>
                <a href="">
                    <i class='bx bx-home-smile'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="links_name">Resolved </span>
                </a>
                <span class="tooltip">Resolved</span>
            </li>

            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name"><?php echo $_SESSION['username'];?></div>
                        <div class="job">Complaints Portal</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="top-section">
            <h class="top-section-title">Pending Issues</h>
            <div class="wrapper">
                <button class="sendButton" data-open="modal1">New Complaint</button>
            </div>


        </div>


        <div class="modal" id="modal1">
            <div class="modal-dialog">
                <header class="modal-header">
                    Send Mail
                    <button class="close-modal" aria-label="close modal" data-close>
                        ✕
                    </button>
                </header>
                <section class="modal-content">
                    <div id="container">

                        <form action="message.php" method="post" id="contact_form">
                            <div hidden="hidden">
                                <input type="text" value=<?php echo $_SESSION['username'];?> name="From" />
                            </div>







                            <select id="school">
                                <option value="DUSC001" selected>select school </option>
                                <?php
                                try{
                                      for ($x = 0; $x <= count($nameArray)-1; $x++) {
                                        echo '<option value='.$idArray[$x].'>'.$nameArray[$x].'</option>';
                                                        }
                                    
                                    }catch( Exception $e ){
                                                    echo $e->getMessage() ;}
                                          ?>

                            </select>

                            <select id="SUBSCHOOLS">
                                <option value="DUSC001" selected>select sub school </option>
                                <option value="DUDEP001">Department of Psychology</option>
                            </select>

                            <select name="To">
                                <option value="DULEC001">Plato</option>
                                <option value="DULEC002">Kratos</option>


                            </select>
                            <select name="Unit">
                                <option value="PHL112">Existentialism</option>
                                <option value="PHL221">Nihilism</option>
                                <option value="PHL321">Realism</option>
                                <option value="PHL441">Stoicism</option>
                            </select>


                            </select>

                            <input type='text' name="Message" placeholder="Type your complaint">



                            <div class="submit">
                                <input type="submit" value="Send Message" id="form_button" />
                            </div>



                        </form><!-- // End form -->
                    </div><!-- // End #container -->


                </section>


            </div>
        </div>


        <div class="modal" id="modal2">
            <div class="modal-dialog">
                <header class="modal-header">
                    The header of the second modal
                    <button class="close-modal" aria-label="close modal" data-close>
                        ✕
                    </button>
                </header>
                <section class="modal-content">
                    <p><strong>Press ✕, ESC, or click outside of the modal to close it</strong></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo repellendus reprehenderit accusamus
                        totam ratione! Nesciunt, nemo dolorum recusandae ad ex nam similique dolorem ab perspiciatis
                        qui. Facere, dignissimos. Nemo, ea.</p>
                    <p>Nullam vitae enim vel diam elementum tincidunt a eget metus. Curabitur finibus vestibulum rutrum.
                        Vestibulum semper tellus vitae tortor condimentum porta. Sed id ex arcu. Vestibulum eleifend
                        tortor non purus porta dapibus</p>
                </section>
                <footer class="modal-footer">
                    The footer of the second modal
                </footer>
            </div>
        </div>



    </section>
    <script type="text/JavaScript">
        let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });


    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
        el.addEventListener("click", function() {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
    }

    for (const el of closeEls) {
        el.addEventListener("click", function() {
            this.parentElement.parentElement.parentElement.classList.remove(isVisible);
        });
    }

    document.addEventListener("click", e => {
        if (e.target == document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible").classList.remove(isVisible);
        }
    });

    document.addEventListener("keyup", e => {
        // if we press the ESC
        if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible").classList.remove(isVisible);
        }
    });
   /* $("#school").change(function(e){
//get the value of the selected index.
value = $("#school").val();
//make an ajax request now
$.ajax({
url: 'selecting.php',
type: 'POST',
data: {value: value},
success:function(response)
{
alert(response);
}
})
})
*/
    </script>
</body>

</html>