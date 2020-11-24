<?php
get_header();

?>

    <form id="coupon-form">
        <div class="field">
            <div>
                <label for="platform">Choose the platform you purchased from</label><select name="platform" id="platform">
                    <option value="1">Amazon</option>
                    <option value="2">wayfair</option>
                    <option value="3">gigalumi.com</option>
                    <option value="-1">others</option>
                </select>
            </div>
            <div class="">
                <label for="order_number"></label>Order Number<input id="order_number" type="text" name="order_number" required placeholder="Type in your order number" minlength="4" maxlength="25">
            </div>
            <div>
                <p>Q1: What makes you choose Gigalumi? (multiple-choice)*</p>
                <label>
                    <input type="checkbox" name="q1[]" class="checkbox-q1" onclick="deRequireCb('checkbox-q1')" required value="A">A.Price
                </label>
                <label>
                    <input type="checkbox" name="q1[]" class="checkbox-q1" onclick="deRequireCb('checkbox-q1')" required value="B">B.Quality
                </label>
                <label>
                    <input type="checkbox" name="q1[]" class="checkbox-q1" onclick="deRequireCb('checkbox-q1')" required value="C">C.Appearance
                </label>
                <label>
                    <input type="checkbox" name="q1[]" class="checkbox-q1" onclick="deRequireCb('checkbox-q1')" required value="D">D.Other

                </label>
            </div>
            <div>
                <p>Q2: For which reason do you purchase outdoor lighting?*</p>
                <label>
                    <input type="radio" name="q2" required value="A">A. Home Development
                </label>
                <label>
                    <input type="radio" name="q2" value="B">B. Garden Decoration
                </label>
                <label>
                    <input type="radio" name="q2" value="C">C. Party Decoration
                </label>
                <label>
                    <input type="radio" name="q2" value="D">D. Festival Decoration
                </label>
            </div>

            <label for="feedbacks"></label>Q3: Do you have any other feedbacks for us to help us improvement?<textarea id="feedbacks" class="" rows="7" name="feedbacks" minlength="1" maxlength="300" placeholder="Leave your message"></textarea>
            <input id="reset" type="reset" name="reset" style="display: none;">
        </div>
        <button id="submit" class="submit">SUBMIT</button>
    </form>
<script>

	var form = document.getElementById('coupon-form');
	form.addEventListener("submit", function() {
		event.preventDefault();
		if (form.checkValidity())
		{
			jQuery.ajax('/wp-json/gigalumi/v1/post_for_coupon', {
                method: 'post',
                data: jQuery('#coupon-form').serialize(),
                success: function (result) {
                    console.log('ok');
                    console.log(result.code);
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', "<?php echo wp_create_nonce( 'wp_rest' );?>");
                }
            })
		}
    }, false);

    function deRequireCb(elClass) {
        el=document.getElementsByClassName(elClass);

        var atLeastOneChecked=false;//at least one cb is checked
        for (i=0; i<el.length; i++) {
            if (el[i].checked === true) {
                atLeastOneChecked=true;
            }
        }

        if (atLeastOneChecked === true) {
            for (i=0; i<el.length; i++) {
                el[i].required = false;
            }
        } else {
            for (i=0; i<el.length; i++) {
                el[i].required = true;
            }
        }
    }
</script>
<?php
get_footer();
?>