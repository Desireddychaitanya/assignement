<!doctype html>
<html>
 
    <body>
    <p>Choose your gender:</p>
    <div>
    <input type="checkbox" id="male" name="gender" value="male" checked>
    <label for="male">male</label>
    </div>
    <div>
    <input type="checkbox" id="female" name="gender" value="female">
    <label for="female">female</label>
    </div>
    <div>
    <button id="submit">Get Value</button>
    </div>
    <br>
    <script type="text/javascript">
        document.getElementById('submit').onclick = function() {
    alert(document.querySelector('input[type=checkbox][name=gender]:checked').value);
}
    </script>
    </body>
 
</html>
