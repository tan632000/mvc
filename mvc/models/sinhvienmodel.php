<?php
    class SinhVienModel extends DB{
        public function GetSV(){
            return "Tran Thi Thanh Loan";
        }
        public function Tong($n,$m){
            return $n+$m;
        }
        public function SinhVien(){
            $query = "SELECT * FROM sinhvien";
            return mysqli_query($this->con,$query);
        }
    }
?>