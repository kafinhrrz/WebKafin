<h2>Edit Home</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['profilepic']?>" class="oo img-thumbnail"><br>
  <label>Profile Pic (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="profile" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Pilih Foto Profile...</label>
  </div></div>
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['homewallpaper']?>" class="oo img-thumbnail">
  <label>Home Cover (Minimum 1920 X 1280, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="cover" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Pilih Home Cover...</label>
  </div></div>
  
   <div class="form-group col-md-6">
      <label for="name">Nama</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Masukan Data Nama anda">
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email" placeholder="bebas@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="twitter">Twitter</label>
      <input type="text" class="form-control" value="<?=$data['twitter']?>" name="twitter" id="twitter" placeholder="https://twitter.com/bebas">
    </div>
    <div class="form-group col-md-6">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook" placeholder="https://facebook.com/bebas">
    </div>
    <div class="form-group col-md-6">
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?=$data['instagram']?>" name="instagram" id="instagram" placeholder="https://instagram.com/bebas">
    </div>
    <div class="form-group col-md-6">
      <label for="skype">Skype</label>
      <input type="text" value="<?=$data['skype']?>" class="form-control" name="skype" id="skype" placeholder="@bebas">
    </div>
    <div class="form-group col-md-6">
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" value="<?=$data['linkedin']?>" name="linkedin" id="linkedin" placeholder="https://linkedin.com/bebas">
    </div>
    <div class="form-group col-md-6">
      <label for="github">Github</label>
      <input type="text" class="form-control"  value="<?=$data['github']?>" name="github" id="github" placeholder="https://github.com/bebas">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Tempat Tinggal</label>
    <input type="text" name="address" value="<?=$data['location']?>" class="form-control" id="address" placeholder="Masukan Data Tempat Tinggal Anda">
  </div>
  <div class="form-row">
  <div class="form-group col-md-9">
    <label for="profession">Titles (masukan dengan menggunakan ',' comma)</label>
    <input type="text" class="form-control" name="profession" value="<?=$data['professions']?>" id="profession" placeholder="Web Developer,PHP Developer,Graphic Designer">
  </div>
  <div class="form-group col-md-3">
    <label for="mobile">Phone No</label>
    <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile" placeholder="Masukan Data Nomer Anda">
  </div>
             </div>
  <input type="submit" name="save" class="btn btn-primary" value="Simpan Perubahan">
</form>