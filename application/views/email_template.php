<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Email Template</title>
      <style type="text/css">
      body {
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       margin:0 !important;
       width: 100% !important;
       -webkit-text-size-adjust: 100% !important;
       -ms-text-size-adjust: 100% !important;
       -webkit-font-smoothing: antialiased !important;
     }
     .tableContent img {
       border: 0 !important;
       display: block !important;
       outline: none !important;
     }
     a{
      color:#382F2E;
    }

    p, h1{
      color:#382F2E;
      margin:0;
    }
 p{
      text-align:left;
      color:#999999;
      font-size:14px;
      font-weight:normal;
      line-height:19px;
    }

    a.link1{
      color:#382F2E;
    }
    a.link2{
      font-size:16px;
      text-decoration:none;
      color:#ffffff;
    }

    h2{
      text-align:left;
       color:#222222; 
       font-size:17px;
      font-weight:normal;
    }
    div,p,ul,h1{
      margin:0;
    }

    .bgBody{
      background: #ffffff;
    }
    .bgItem{
      background: #ffffff;
    }

    </style>
<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}
</script>
  </head>
	<body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"  style='font-family:Helvetica, Arial,serif;'>
			<tr><td height='35'></td></tr>

      	<tr>
        		<td>
          	<table width="500" border="0" cellspacing="0" cellpadding="0" align="center" class='bgItem'>
            	<tr>
              		<td width='40'></td>
              		<td width='450'>
                	<table width="450" border="0" cellspacing="0" cellpadding="0" align="center">

<!-- =============================== Header ====================================== -->           
                  

                  <tr><td height='75'></td></tr>
<!-- =============================== Body ====================================== -->

                  <tr>
                    <td class='movableContentContainer' valign='top' style="background-color: #F5F5F5;padding: 30px;">
                        
                      <div class='movableContent'>
                        <table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td valign='top' align='center'>
                              <div class="contentEditableContainer contentImageEditable">
                                <div class="contentEditable" style="margin-bottom: 20px;">
                                  <img src="<?php echo base_url(); ?>images/site/main_logo.jpg" width='200' height='200' alt='' data-default="placeholder" data-max-width="560">
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                        
                      <div class='movableContent'>
                        <table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td valign='top' align='center'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <p style='text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size: 23px;color: #222222;white-space: pre;'>Welcome to <span style='color:#DC2828;'>Brunei Inspection Portal Service</span></p>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>

                      <div class='movableContent'>
                        <table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height='25'style="border-bottom:1px solid #DDDDDD;"></td></tr>
                          <tr>
                            <td align='left'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align='center'>
                                  <h2 >Hi <?php echo (isset($msg_header) ? $msg_header :''); ?>,</h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height='15'> </td></tr>

                          <tr>
                            <td align='left'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align='center'>
                                  <p  style='text-align:left;color:#999999;font-size:14px;font-weight:normal;line-height:19px;'>
                                    <?php echo (isset($msg_body) ? $msg_body :''); ?>
                                  </p>
                                </div>
                              </div>
                            </td>
                          </tr>

                        <tr><td height='20'></td></tr>

                            <!--<tr>
                            <td align='center'>
                              <table>
                                <tr>
                                  <td align='center' bgcolor='#DC2828' style='background:#B91D35; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align='center'>
                                        <a target='_blank' href='#' class='link2' style='color:#ffffff;font-weight: bold;'>Reset your Password</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>-->
                        </table>
                      </div>

                      <div lass='movableContent'>
                        <table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height='35'></td></tr>
                          <tr><td  style='border-bottom:1px solid #DDDDDD;'></td></tr>

                          <tr><td height='25'></td></tr>

                          <tr>
                            <td>
                              <table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                  <td valign='top' align='left' width='370'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align='center'>
                                        <p  style='text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;'>
                                          <span style='font-weight:bold;'>BIPS</span>
                                          <br>
                                          Brunei City<br>
                                          
                                          <br>
                                          <!--<a target='_blank' href="[UNSUBSCRIBE]" class='link1' class='color:#382F2E;'>Unsubscribe</a>-->
                                        </p>
                                      </div>
                                    </div>
                                  </td>

                                  <td width='30'></td>

                                  <td valign='top' width='52'>
                                    <div class="contentEditableContainer contentFacebookEditable">
                                      <div class="contentEditable">
                                        <a target='_blank' href="#"><img src="<?php echo base_url(); ?>images/site/facebook.png" width='52' height='53' alt='facebook icon' data-default="placeholder" data-max-width="52" data-customIcon="true"></a>
                                      </div>
                                    </div>
                                  </td>

                                  <td width='16'></td>

                                  <td valign='top' width='52'>
                                    <div class="contentEditableContainer contentTwitterEditable">
                                      <div class="contentEditable">
                                        <a target='_blank' href="#"><img src="<?php echo base_url(); ?>images/site/twitter.png" width='52' height='53' alt='twitter icon' data-default="placeholder" data-max-width="52" data-customIcon="true"></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>

                    </td>
                  </tr>

                  

<!-- =============================== footer ====================================== -->
                  
               </table>
              </td>
              <td width='40'></td>
            </tr>
          </table>
        </td>
      </tr>

      <tr><td height='88'></td></tr>


    </table>

      </body>
      </html>

