<?php 
    if($_POST['submit']){
        if($mango==''||$IPhone==''||$bottle==''||$shipping==''||$email==''||$password=='')
            $mango = $_POST['mangoQuantity'];
            $IPhone = $_POST['IPhoneQuantity'];
            $bottle = $_POST['bottleQuantity'];
            $ship = $_POST['ship'];
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $mangoCost = 3.75;
            $IPhoneCost = 800;
            $bottleCost = 29.99;
            $mangoSubtotal = $mango * $mangoCost;
            $IPhoneSubtotal = $IPhone * $IPhoneCost;
            $bottleSubtotal = $bottle * $bottleCost;
            $totalCost = $mangoSubtotal + $IPhoneSubtotal + $bottleSubtotal;

        
        echo '<h1> Hello '.$email.'</h1>';
        echo '<h2> Password: '.$password.'</h2>';

        echo '<h2> Receipt: </h2>';
        echo "<table border='1'>";
        echo '<tr>
                    <th>      </th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th>Sub Total</th>
                </tr>
                <tr>
                    <td>Mango(s)</td>
                    <td>'.$mango.'</td>
                    <td>$'.$mangoCost.'</td>
                    <td>$'.$mangoSubtotal.'</td>
                </tr>
                <tr>
                    <td>IPhone(s)</td>
                    <td>'.$IPhone.'</td>
                    <td>$'.$IPhoneCost.'</td>
                    <td>$'.$IPhoneSubtotal.'</td>
                </tr>
                <tr>
                    <td>Water Botttle(s)</td>
                    <td>'.$bottle.'</td>
                    <td>$'.$bottleCost.'</td>
                    <td>$'.$bottleSubtotal.'</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td></td>
                    <td></td>
                    <td>$'.$ship.'</td>
                </tr>
                <tr>
                    <td>Total Cost</td>
                    <td></td>
                    <td></td>
                    <td>$'.$totalCost.'</td>
                </tr>';
                    




        
    }