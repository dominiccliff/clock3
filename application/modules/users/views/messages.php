<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo site_name();?></title>
<link href="<?php echo base_url();?>css/admin.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<link href="<?php echo base_url();?>css/plugins/sweetalert.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
 var base_url = "<?php echo base_url();?>";
</script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/sweetalert.min.js"></script>
<script type="text/javascript">
$(document ).ready(function() {
    swal({
       title: "<?php if(isset($heading)){ echo $heading; } ?>",
       text: "<?php if(isset($success_mail)){ echo $success_mail; } ?>",
       type: 'success',
}, function(isConfirm) {
    window.location.href="<?php echo base_url(); ?>";
});
});
</script>
</head>
<body>
</body>
</html>