<html>
    <head>
        <title>Cinema 99</title>
    </head>
    <body>
        
        <center><h2>Pemesanan Tiket Cinema 99</h2></center>

            <table width="30%" border="0" cellpadding="5"align="center">
                <tr>
                    <td width="30%">
                        Nama Pemesan
                    </td>
                    <td  width="70%">
                        <?=$nama_pemesan;?>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        Judul Film
                    </td>
                    <td  width="70%">
                      <?=$judul_film;?>
                    </td>
                </tr>

                <tr>
                    <td width="30%">
                        Pukul
                    </td>
                    <td  width="70%">
                        <?=$pukul;?>                       
                    </td>
                </tr>      
                
                <tr>
                    <td width="30%">
                        Tipe Studio
                    </td>
                    <td  width="70%">
                        <?=$tipe_studio;?>
                    </td>
                </tr>                  
                


                <tr>
                    <td width="30%">
                    Jumlah Pemesan
                    </td>
                    <td  width="70%">
                        <?=$jumlah_pesanan;?>
                    </td>
                    
                </tr>  
                
                <tr>
                    <td width="30%">
                    Harga Tiket
                    </td>
                    <td  width="70%">
                        <?=$harga_tiket;?>
                    </td>
                    
                </tr>              

                <tr>
                    <td width="30%">
                    Total
                    </td>
                    <td  width="70%">
                        <?=$total;?>
                    </td>
                    
                </tr>    



            </table>


        <center><a href="<?php echo base_url();?>index.php/cinema">Input Data Lagi</a></center>

    </body>
</html>