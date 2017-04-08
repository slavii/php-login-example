<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<?php
$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/registration.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/registration.css');
echo '<script>' . $script . '</script>';
echo '<style>' . $style . '</style>';
?>

<div class="header">
    <input type="button" onclick="location.href='/';" value="HOME" class="button  button2"/>
    <input type="button" onclick="location.href='/registration';" value="Register" class="button button2"/>
    <input type="button" onclick="location.href='/contactus';" value="Contact Us" class="button button2"/>
    <input type="button" onclick="location.href='/signin';" value="Sign In" class="button button2"/>
</div>

<body>
<form method="POST" action="/registration" name="registration" id="registration-form">
    <table class="table1">
        <tr>
            <td>
                Login name:
            </td>
            <td>
                <input type="text" name="login" id="login" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>
                <input type="password" name="password" id="password" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                Re-password:
            </td>
            <td>
                <input type="password" name="repassword" id="repassword" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                First name:
            </td>
            <td>
                <input type="text" name="first-name" id="first-name" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                Last name:
            </td>
            <td>
                <input type="text" name="last-name" id="last-name" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                Email:
            </td>
            <td>
                <input type="email" name="email" id="email" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                Phone:
            </td>
            <td>
                <input type="text" name="phone" id="phone" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td>
                URL:
            </td>
            <td>
                <input type="url" name="url" id="url" class="form-control"/>
            </td>
        </tr>
    </table>

    <input type="submit" name="submit" value="Submit" id="submit-btn"/>
    <input type="reset" name="cancel" value="Cancel"/>
</form>
</body>