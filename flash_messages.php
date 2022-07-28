-created your file name flash/msg/etc .php in a views
-code
//for success
<?php if ($this->session->has_userdata('pesan')) { ?> 

<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>oke!</h4><?=strip_tags(str_replace('</p>','',$this->session->flashdata('pesan')));?>
</div>

<?php } ?>
//for error
<?php if ($this->session->has_userdata('error')) { ?> 
<div class="alert alert-error alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>perhatian!</h4><?=strip_tags(str_replace('</p>','',$this->session->flashdata('error')));?>
</div>
<?php } ?>

//call in your controller

$this->session->set_flashdata('pesan','data berhasil di hapus');


//call in your file views
  <?php $this->load->view('flash_messages') ?>
