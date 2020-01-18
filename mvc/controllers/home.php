<?php
    class Home extends Controller{ 
        function SayHi(){
            $teo = $this->model("sinhvienmodel");
            echo $teo->GetSV();
        }
        function Show($a,$b){
            // model
            $ti = $this->model("sinhvienmodel");
            $tong = $ti->Tong($a,$b);
            // view
            $this->view("aodep",[
                "Number"=>$tong,
                "Color1"=>"red",
                "Color2"=>"orange",
                "Page"=>"news",
                "SV"=>$ti->SinhVien()
                ]);
        }
    }
?>