<?php 
    
    include('db.php');

?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }

    .gray {
        background-color:#ff66a3;
        color: white;
    }
    #qnty{
        width: 50px;
    }
    #dec{
        width: 100%; 
        border: none; 
        border: 1px solid pink;
        font-family: 'Times New Roman', sans-serif;
    }
</style>

</head>
<body>

  <table width="100%">
    <tr>
        <td valign="top">
          <h1 style="color:#ff66a3;">NEW KCC COMPANY LIMITED</h1>
        </td>
        <td align="right">
            <h3>INVOICE</h3>
            <pre>
                Cremery House, Dakar Road, Industial Area
                P O BOX 30131-00100, Nairobi
                Phone: 0722203668/0736203668
                Email: info@newkcc.co.ke
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>Generated on <?php echo date('D d M Y') ; ?></strong></td>
        
    </tr>

  </table>
<br>
<fieldset style="width: 100%; border:1px solid pink; font-family: 'Times New Roman'">
    <legend>Customer Details</legend>
    <table style="width: 100%;">
    <tr>
    <td>
    <p style="text-transform: capitalize;">Name: <?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></p>
    <p>Address: <?php echo $_SESSION['address']; ?></p>
    <p>Phone: <?php echo $_SESSION['phone']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    </td>
    <td>
    
    <h2>Customer Serial No: <?php echo $_SESSION['login_user']; ?></h2>
    <h2>Invoice No: <?php echo $_SESSION['login_user'].''.time(); ?></h2>
    </td>
</tr>
 </table>
</fieldset>
<h3>Products</h3>
  <table width="100%">
    <thead style="background-color: #ff66a3;color: white;">
      <tr>
        <th id="qnty">#</th>
        <th>Product</th>
        <th>Product Serial</th>
        <th>Unit Price KShs</th>
        <th id="qnty">Qnty</th>
        <th>Total KShs</th>
      </tr>
    </thead>
    <tbody>
  <?php 
  
    
    $userserial = $_SESSION['login_user'];

    $query = "SELECT * FROM cart$userserial";
    $results = mysqli_query($con, $query);
    $count = mysqli_num_rows($results);
    
    if ($count > 0) {
    for ($i=0; $i < $count ; $i++) { 

    $row = mysqli_fetch_array($results);
    $name=$row['product'];
    $price=$row['price']; 
    $amount=$row['amount'];
    $totalprice=$row['totalprice'];
    $productserial=$row['productserial'];
    $xx = $i + 1;
    echo"<tr>
        <th scope='row'id='qnty'>$xx</th>
        <td align='left'>$name</td>
        <td align='left'>$productserial</td>
        <td align='right'>$price</td>
        <td align='center' id='qnty'>$amount</td>
        <td align='right'>$totalprice</td>
      </tr>";}}
      
    ?>
      </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal KShs</td>
            <td colspan="2" align="right">
                <?php
                $result = mysqli_query($con,"SELECT SUM(totalprice) AS value_sum FROM cart$userserial");
                $row = mysqli_fetch_assoc($result);
                if ($row != null) {
                    $sum = $row['value_sum'];
                    if ($sum == 0) {
                        echo '0.00';
                    }
                    else{
                        echo $sum.'.00';
                    }
                }
                else{
                    $sum = 0;
                    echo '0.00';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax KShs(16%)</td>
            <td colspan="2" align="right"><?php 
             $tax = $sum * 16/100;
             echo $tax;
             ?></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total KShs</td>
            <td colspan="2" align="right" class="gray">
                <?php
                $total = $sum + $tax;
                echo $total;
                  ?>
            </td>
        </tr>
    </tfoot>
  </table>
  <br>
<fieldset id="dec" style="">
    <legend>Declaration</legend>
    <p>I hereby certify that the information on this invoice is true and correct and the contents and value of this shipment are as stated.</p>
    <p>The customer is requested to make complaint to the resposnsible authorities if their conduct of the delivery officer is not of prefessional standards such as requesting for bribes, harrasment, time management etc.</p>
    <p>All payments should be done through the provided Mpesa Paybill Number</p>
    <p>This invoice is electronically generated, no signatures required.</p>
</fieldset>
</body>
</html>