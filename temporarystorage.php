<div class="formbold-main-wrapper">

    <div class="formbold-form-wrapper">
        <form action="messagephp" method="POST">

            <div class="formbold-mb-5">
                <label for="email" class="formbold-form-label"> To </label>
                <input type="text" name="to" id="email" placeholder="Enter recepient" class="formbold-form-input" />
            </div>
            <div class="flex flex-wrap formbold--mx-3">
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5 w-full">
                        <label for="date" class="formbold-form-label"> Date </label>
                        <input type="date" name="date" id="date" class="formbold-form-input" />
                    </div>
                </div>
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                        <label for="time" class="formbold-form-label"> Time </label>
                        <input type="time" name="time" id="time" class="formbold-form-input" />
                    </div>
                </div>
            </div>

            <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                    <textarea cols="30" rows="5" name="Message" id="post-code" placeholder="Post Code"
                        class="formbold-form-input" />
                </div>
            </div>
    </div>
</div>

<div>
    <input class="formbold-btn" type="submit" value="Send Message" id="form_button" />
</div>
</form>
</div>
</div>