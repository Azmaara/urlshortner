      <br/>
      <div class="page-header">
        <h1><?php echo $this->lang->line('system_system_name'); ?></h1>
      </div>

      <p><?php echo $this->lang->line('encode_instruction_1'); ?></p>

      <?php if (validation_errors()) : ?>
        <?php echo validation_errors(); ?>
      <?php endif ; ?>

      <?php if ($success_fail == 'success') : ?>
        <br/>
        <div class="alert alert-success">
          <strong><?php echo $this->lang->line('common_form_elements_success_notifty'); ?></strong> <?php echo $this->lang->line('encode_encode_now_success'); ?> 
        </div>

       
      <?php endif ; ?>

      <?php if ($success_fail == 'fail') : ?>
        <div class="alert alert-danger">
          <strong><?php echo $this->lang->line('common_form_elements_error_notifty'); ?> </strong> <?php echo $this->lang->line('encode_encode_now_error'); ?> 
        </div>
      <?php endif ; ?>

      <?php echo form_open('create') ; ?>
     
      <body style="background:#fff; ">
      <div class="container">
        <div class="row">
          <div class="flex">
          <div class="col-lg-12 d-flex justify-content-center text-center">
            <div class="input-group">
              <input type="text" id="Search" class="form-control" name="url_address" placeholder="<?php echo $this->lang->line('encode_type_url_here'); ?>">
              <span class="input-group-btn">
                <button class="btn btn-danger" type="submit"><?php echo $this->lang->line('encode_encode_now'); ?></button>
              </span>

      <br/>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
          </div>
        </div><!-- /.row -->
        


        
      </div> <!-- /.container-->
      <?php echo form_close(); ?>
<br/>
      </body>
      

      <br />

      <?php if ($encoded_url == true) : ?>
        <div class="alert alert-info">
          <strong><?php echo $this->lang->line('encode_encoded_url'); ?> </strong> 
          <?php echo anchor($encoded_url, $encoded_url) ; ?>
        </div>
      <?php endif ; ?>

      <?php 
  // PHP code to obtain country, city,  
  // continent, etc using IP Address 
    
  //$ip = $this->input->ip_address(); 
  $ip = '72.229.28.185'; 
  // Use JSON encoded string and convertss
  // it into a PHP variable 
  $ipdat = @json_decode(file_get_contents( "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
  echo nl2br('IP Address:' . $ip . "\n");

  echo nl2br('Country Name: ' . $ipdat->geoplugin_countryName . "\n");
  echo nl2br('City Name: ' . $ipdat->geoplugin_city . "\n"); 
  echo nl2br('Continent Name: ' . $ipdat->geoplugin_continentName . "\n"); 
  echo nl2br('Latitude: ' . $ipdat->geoplugin_latitude . "\n");
  echo nl2br('Longitude: ' . $ipdat->geoplugin_longitude . "\n"); 
  echo nl2br('Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"); 
  echo nl2br('Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"); 
  echo nl2br('Timezone: ' . $ipdat->geoplugin_timezone . "\n"); 
  ?> 




 