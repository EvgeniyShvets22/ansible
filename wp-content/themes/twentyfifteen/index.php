<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<form action="" method="post">
    <button type="submit" name="sub" value="call">Click here!</button>
</form>
    
<fieldset>
    <legend>Choose departament:</legend>

    <div>
        <input type="checkbox" id="scales" name="feature1"
               value="scales" />
        <label for="scales">HR</label>
    </div>

    <div>
        <input type="checkbox" id="horns" name="feature2"
               value="horns" />
        <label for="horns">Suppliers</label>
    </div>

    <div>
        <input type="checkbox" id="claws" name="feature3"
               value="claws" />
        <label for="claws">Commercial</label>
    </div>

</fieldset>
</body>
</html>
<?php
    if(isset($_POST['sub'])){
    //$back = shell_exec('ansible-playbook /etc/ansible/linux_test.yml');    
    $back = shell_exec('uptime');
    
//if( empty($_POST["feature1"]) ) { echo "Checkbox was left unchecked."; }
//else { echo "Checkbox was checked."; }
echo '<script>var newWin = window.open("about:blank", "hello", "width=800,height=500"); newWin.document.write("<?php echo $back; ?>"); </script>';

    }
function select($val){
return $val; 
//$output = shell_exec('ls');
}
?>