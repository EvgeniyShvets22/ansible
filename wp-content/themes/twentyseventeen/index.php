<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<button type="button" class=button onclick="test.sh">Click me</button>
    
<fieldset>
    <legend>Choose some monster features</legend>

    <div>
        <input type="checkbox" id="scales" name="feature"
               value="scales" checked />
        <label for="scales">Scales</label>
    </div>

    <div>
        <input type="checkbox" id="horns" name="feature"
               value="horns" />
        <label for="horns">Horns</label>
    </div>

    <div>
        <input type="checkbox" id="claws" name="feature"
               value="claws" />
        <label for="claws">Claws</label>
    </div>

</fieldset>
    
</body>
</html>
<?php
// выводит имя пользователя, от имени которого запущен процесс php/httpd
// (применимо к системам с командой "whoami" в системном пути)
echo exec('whoami');
?>