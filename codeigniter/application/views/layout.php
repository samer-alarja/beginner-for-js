<?php
 $this->load->view('header');
 $stringofpage = $data['page'];
 $this->load->view($stringofpage, $data );

 $this->load->view('footer');


?>