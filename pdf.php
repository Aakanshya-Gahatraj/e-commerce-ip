<?php
session_start();

if(isset($_POST['bill'])){
    $name=$_POST['name'];
    $addr=$_POST['address'];
    $no=$_POST['number'];
    $date=$_POST['date'];

    require("fpdf/fpdf.php");

    $pdf= new FPDF();
    $pdf->AddPage();

    $pdf-> SetFont("Arial","B",26);
    $pdf->SetRightMargin(25);
    $pdf-> Cell(0,20,"",0,1);
    $pdf-> Cell(0,10,"INVOICE",0,1,'R'); // Title    
    $pdf-> Cell(0,20,"",0,1);

    $pdf-> SetFont("Arial","",16);
    $pdf->SetLeftMargin(25);

    $pdf-> Cell(10,10,"Delivery Date: $date",0,1);
    $pdf-> Cell(0,10,"",0,1);
    $pdf-> Cell(0,10,"Bill To: ",0,1);
    $pdf-> Cell(0,10,"",0,1);
    $pdf-> Cell(0,10,"Name: $name",0,1);
    $pdf-> Cell(0,10,"Address: $addr",0,1);
    $pdf-> Cell(0,10,"Phone: $no",0,1);
    $pdf-> Cell(0,10,"",0,1);


    $pdf-> Cell(0,15,"Products: ",0,1);
    $pdf-> Cell(0,10,"",0,1);

    $total=0;
    foreach($_SESSION['cart1'] as $key => $value){
        $pdf-> Cell(0,10,"$value->Item_Name  ($value->Item_qty)",0,0);
        $pdf-> Cell(0,10,"Rs. $value->Item_price",0,1,'R');
        $total+= $value->Item_price*$value->Item_qty;
    }

    $pdf-> Cell(0,15,"Total: $total",0,1);
    $pdf-> Cell(0,20,"",0,1);
    $pdf-> Cell(0,15,"Thankyou for your purchase.",0,1);
    
    $file= $name.'Bill.pdf';
    $pdf->output($file,'D');
}

?>