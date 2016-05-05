<div class="jumbotron">
    <h1><em>Specialist in Indian Contemporary Art, Indian Modern Art, Oil Paintings and Batik</em></h1>
</div>
<br><br><br>
<div class="row">
    <div class="col-md-9 col-sm-12">
        <?= $this->Flash->render(); ?>
        
        <?php echo $this->Form->create($contact, ['class' => 'form-horizontal']); ?>
        <?php 
        if ($this->Form->isFieldError('name')) {
           echo '<div class="form-group has-error has-feedback">';
        }else{
           echo '<div class="form-group">';
        };
        ?>
            <label for="ContactName" class="col-md-2 control-label">Name</label>
            <div class="col-md-10">
                <?php 
                   echo $this->Form->input('name', ['error' => false, 'label' => false, 'class' => 'form-control input-lg', 'id' => 'ContactName', 'placeholder' => 'Enter your Name']); 
                   if ($this->Form->isFieldError('name')) {
                      echo '<p class="text-danger">' . $contact->errors()['name']['length'] . '</p>';
                      
                   };
                ?>
            </div>
        </div>
        <?php 
        if ($this->Form->isFieldError('email')) {
           echo '<div class="form-group has-error has-feedback">';
        }else{
           echo '<div class="form-group">';
        };
        ?>
            <label for="ContactEmail" class="col-md-2 control-label">Email ID</label>
            <div class="col-md-10">
                <?php 
                   echo $this->Form->input('email', ['error' => false, 'label' => false, 'class' => 'form-control input-lg', 'id' => 'ContactEmail', 'placeholder' => 'Enter your email ID']); 
                   if ($this->Form->isFieldError('email')) {
                      echo '<p class="text-danger">' . $contact->errors()['email']['format'] . '</p>';
                      
                   };
                ?>
                
            </div>
        </div>
        <?php 
        if ($this->Form->isFieldError('body')) {
           echo '<div class="form-group has-error has-feedback">';
        }else{
           echo '<div class="form-group">';
        };
        ?>
            <label for="ContactMessage" class="col-md-2 control-label">Message</label>
            <div class="col-md-10">
                <?php 
                   echo $this->Form->input('body', ['error' => false, 'label' => false, 'rows' => '10', 'class' => 'form-control input-lg', 'id' => 'ContactMessage', 'placeholder' => 'Write your message']); 
                   if ($this->Form->isFieldError('body')) {
                      echo '<p class="text-danger">' . $contact->errors()['body']['length'] . '</p>';
                      
                   };
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">&nbsp</label>
            <div class="col-md-10">
                <?= $this->Recaptcha->display() ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <?php echo $this->Form->button('Submit', ['class' => 'btn btn-primary btn-lg']); ?>
            </div>
        </div>
        
        <?php echo $this->Form->end(); ?>
        
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="super-well">
            <h3>Contact</h3>
            <hr class="colorgraph">
            <address>
                <p class="lead">
                    <strong>Arokai Raj</strong><br>
                    <small><a href="mailto:inforajanarts@gmail.com">inforajanarts@gmail.com</a></small>
                </p>
            </address>
            <address>
                <p class="lead">
                    <strong>Rajan Arts.</strong><br>
                    Thiruvalluvar Nagar,<br>
                    Chennai, 600 023<br>
                    India<br>
                    <small><abbr title="Mobile">P:</abbr> +91 - 12345 67890</small>
                </p>
            </address>
            <hr class="colorgraph">
        </div>
    </div>
</div>

