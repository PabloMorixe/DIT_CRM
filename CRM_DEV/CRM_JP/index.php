<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Populate City Dropdown Using jQuery Ajax</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select.country").change(function(){
        var selectedCountry = $(".country option:selected").val();
        $.ajax({
            type: "POST",
            url: "process-request.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});
</script>
</head>
<body>
<form>
    <table>
        <tr>
            <td>
                <label>Country:</label>
                <select class="country">
                    <option value="seleccion">Select</option>
                    <option value="usa">United States</option>
                    <option value="india">India</option>
                    <option value="uk">United Kingdom</option>
                </select>
            </td>
            <td id="response">
            <label>Ciudad:</label>
                <select class="City">
                    <option>Select</option>
                    <option value="seleccion">Seleccione Ciudad</option>
                    <option value="usa">New York</option>
                    <option value="usa">United States</option>
                    <option value="usa">United States</option>
                    <option value="india">India</option>
                    <option value="uk">United Kingdom</option>
                </select>
                
                
                 </td>
        </tr>
    </table>
</form>
</body> 
</html>