<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="css\images\icon.jpg">
    <title>Complaints</title>
</head>

<body>
    <div class="box">
        <img src="css\images\icon.svg" alt="icon SVG" class="filter-gold" />
    </div>

    <main
        class="ui-standard w100 relative sign-layout shadow-lifted on-tiny-mobile-no-box-shadow mw30r max-w100 center">

        <div class="sign-layout-header">
            <div class="flex flex-align-items-center flex-justify-space-between mb0-5">
                <h1 class="sign-layout-title mt1 mb0 on-mobile-mt0-5 on-tiny-mobile-mt0">
                    Create your Complaints Account
                </h1>
            </div>

        </div>
        <div class="sign-layout-main-content">
            <form action="password.php" name="accountForm" method="post" autocomplete="off" novalidate="">

                <div class="field-two-container field-two--bigger mt0-5">
                    <label for="recovery-email"
                        class="field-two-label-container flex flex-justify-space-between flex-nowrap flex-align-items-end flex-gap-0-5">
                        <span class="field-two-label">
                            Username
                        </span>
                    </label>
                    <div class="field-two-input-container relative">
                        <div
                            class="field-two-input-wrapper flex flex-nowrap flex-align-items-stretch flex-item-fluid relative">
                            <div class="flex flex-item-fluid">
                                <input autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false"
                                    aria-invalid="false" id="recovery-email" aria-describedby="id-6"
                                    class="field-two-input w100" value="" name="Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="field-two-assist flex flex-nowrap flex-align-items-start" id="id-6">
                    </div>
                </div>

                <div class="field-two-container field-two--bigger mt0-5">
                    <label for="password"
                        class="field-two-label-container flex flex-justify-space-between flex-nowrap flex-align-items-end flex-gap-0-5">
                        <span class="field-two-label">
                            Password
                        </span>
                    </label>
                    <div class="field-two-input-container relative">
                        <div
                            class="field-two-input-wrapper flex flex-nowrap flex-align-items-stretch flex-item-fluid relative">
                            <div class="flex flex-item-fluid">
                                <input autocomplete="new-password" autocapitalize="off" autocorrect="off"
                                    spellcheck="false" aria-invalid="false" id="password" aria-describedby="id-4"
                                    type="password" class="field-two-input w100" value="" name="Password" required>
                            </div>
                            <div
                                class="field-two-input-adornment mr0-5 flex flex-align-items-center flex-item-noshrink flex-nowrap flex-gap-0-5">
                                <button
                                    class="button button-for-icon button-small button-ghost-weak inline-flex flex-item-noshrink"
                                    tabindex="-1" aria-busy="false" type="button" title="Reveal password"
                                    onclick="myFunction()">
                                    <img src="css\images\eye.svg" alt="icon SVG" class="eye-gold" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="field-two-assist flex flex-nowrap flex-align-items-start" id="id-4">
                    </div>
                </div>
                <div class="field-two-container field-two--bigger mt0-5">
                    <label for="repeat-password"
                        class="field-two-label-container flex flex-justify-space-between flex-nowrap flex-align-items-end flex-gap-0-5">
                        <span class="field-two-label">
                            Repeat password
                        </span>
                    </label>
                    <div class="field-two-input-container relative">
                        <div
                            class="field-two-input-wrapper flex flex-nowrap flex-align-items-stretch flex-item-fluid relative">
                            <div class="flex flex-item-fluid">
                                <input autocomplete="new-password" autocapitalize="off" autocorrect="off"
                                    spellcheck="false" aria-invalid="false" id="repeat-password" aria-describedby="id-5"
                                    type="password" class="field-two-input w100" value="" name="confirm_Password"
                                    required>
                            </div>
                            <div
                                class="field-two-input-adornment mr0-5 flex flex-align-items-center flex-item-noshrink flex-nowrap flex-gap-0-5">
                                <button
                                    class="button button-for-icon button-small button-ghost-weak inline-flex flex-item-noshrink"
                                    tabindex="-1" aria-busy="false" type="button" title="Reveal password"
                                    onclick="myFunction()">
                                    <img src="css\images\eye.svg" alt="icon SVG" class="eye-gold" />

                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="field-two-input-adornment  flex flex-align-items-center flex-item-noshrink flex-nowrap flex-gap-0-5">
                        <input type="submit" name="sign_details" value="Create account" aria-busy="false"
                            class="button w100 button-large button-solid-norm mt1-5">
                    </div>
                </div>



                <div class="text-center mt1-25">
                    Already have an account?
                    <a class="link text-nowrap" href="signin.php">
                        Sign in
                    </a>
                </div>

            </form>
        </div>
        <script>
        function myFunction() {
            var x = document.getElementById("repeat-password");
            var y = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
        </script>
</body>


</html>