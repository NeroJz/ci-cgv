<?= $this->load->view('templates/main_header', '', TRUE); ?>

<?php
    if(isset($content)):
        echo $content;
    else:
        echo '<h3>Content Not Available</h3>';
    endif;

?>


<?= $this->load->view('templates/main_footer', '', TRUE); ?>