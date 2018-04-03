<?php
//$this->load->library('table');
$this->table->set_heading(array('Id','Nume', 'Culoare', 'Marime', 'Pret')); 
foreach($r as $row ){
   $this->table->add_row($row);
}
echo $this->table->generate(); 

