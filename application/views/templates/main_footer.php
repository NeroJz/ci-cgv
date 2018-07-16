<!-- linked files -->
<?= $this->load->view('templates/link-files', '', TRUE); ?>

<?php if(isset($js)){
    foreach($js as $filename){
        $path = base_url("assets/js/$filename") . "?t=" . time();
        $js_script = "<script text='text/javascript' src='$path'></script>";
        echo $js_script;
    }
}

?>

</body>
</html>