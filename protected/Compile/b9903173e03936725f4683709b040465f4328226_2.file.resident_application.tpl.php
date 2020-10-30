<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-30 14:46:26
  from '/var/www/html/aptitudecare/dev/protected/Views/public/resident_application.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efbc0c282c654_27405578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9903173e03936725f4683709b040465f4328226' => 
    array (
      0 => '/var/www/html/aptitudecare/dev/protected/Views/public/resident_application.tpl',
      1 => 1593557184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efbc0c282c654_27405578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/aptitudecare/dev/framework/protected/Vendors/Smarty-3.1.34/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div id="resident-application" class="container">
   
<!--     <h1 class="text-center">New Resident Application</h1>
 -->
    <iframe src="https://forms.monday.com/forms/embed/062d7b503dcc563eff328bb388238b82" width="100%" height="1900px" style="border: 0;"></iframe>

<!--     <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['SITE_URL']->value, ENT_QUOTES, 'UTF-8');?>
/save_application" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->public_id, ENT_QUOTES, 'UTF-8');?>
">

        <h2>Contact Info</h2>
 -->        <!-- Contact info -->
<!--         <div class="row">    
            <div class="col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="name">Contact First Name</label>
                    <input type="text" class="form-control" id="contact-first-name" name="contact_first_name" value="" required>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="name">Contact Last Name</label>
                    <input type="text" class="form-control" id="contact-last-name" name="contact_last_name" value="" required>
                </div>
            </div>

            <div class="col-sm-4 col-md-4">
                <div class="form-group">
                    <label for="contact-type">Contact Relationship</label>
                    <select name="contact_type" id="contact-type" class="form-control" required>
                        <option value=""></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_type']->value, 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ct']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="contact-email">Contact Email:</label>
                    <input type="text" id="contact-email" class="form-control" name="contact_email" required>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="contact-phone">Contact Phone:</label>
                    <input type="text" id="contact-phone" class="form-control" name="contact_phone" required>
                </div>
            </div>
        </div>
 -->        <!-- /Contact info -->

<!--         <h2>Resident Info</h2>
        <div class="row">    
            <div class="col-sm-4 col-md-6">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="first_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->first_name, ENT_QUOTES, 'UTF-8');?>
" required>
                </div>
            </div>
            <div class="col-sm-4 col-md-6">
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="last_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prospect']->value->last_name, ENT_QUOTES, 'UTF-8');?>
" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="email-address">Email Address:</label>
                    <input type="text" id="email-address" class="form-control" name="email">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="phone">Resident Phone:</label>
                    <input type="text" id="phone" class="form-control" name="phone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="name">Birthdate</label>
                    <input type="text" class="form-control datepicker" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['prospect']->value->birthdate,'%d %B, %Y'), ENT_QUOTES, 'UTF-8');?>
" required>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="name">Gender</label>
                    <select name="gender" class="form-control" id="gender">
                        <option value=""></option>
                        <option value="male" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->gender == "male") {?> selected<?php }?>>Male</option>
                        <option value="female" <?php if ($_smarty_tpl->tpl_vars['prospect']->value->gender == "female") {?> selected<?php }?>>Female</option>
                    </select>
                </div>
            </div>
        </div>

        <h2>Health Info</h2>
        <div class="row">
            <div class="col-sm-6">
                <p>Does the resident have diabetes?</p>
                <div class="form-check">
                    <input type="radio" id="diabetes" name="diabetes" value="1" class="form-check-input">
                    <label for="diabetes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="diabetes1" name="diabetes" value="0" class="form-check-input" required>
                    <label for="diabetes1" class="form-check-label">No</label>

                </div>
            </div>
            <div class="col-sm-6" id="self-manage">
                <p>Can the resident manage their own diabetes?</p>
                <div class="form-check">
                    <input type="radio" id="self-manage-diabetes" name="self_manage_diabetes" value="1" class="form-check-input">
                    <label for="self-manage-diabetes" class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="self-manage-diabetes1" name="self_manage_diabetes" value="1" class="form-check-input">
                    <label for="self-manage-diabetes1" class="form-check-label">No</label>
                </div>

            </div>

        </div>
            
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="care-needs">Care Needs</label>
                    <select name="care_needs[]" id="care-needs" multiple>
                        <option value=""></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['care_needs']->value, 'need');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['need']->value) {
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['need']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['need']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="dementia">Cognitive impairment or dementia?</label>
                    <select name="dementia" id="dementia" class="form-control" required>
                        <option value=""></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dementia']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value->level, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div id="wandering" class="col-sm-12 col-md-6">
                Does the resident have any tendencies to wander?
                <div class="form-check">
                    <input type="radio" id="wander-risk" name="wander_risk" value="1" class="form-check-input">
                    <label for="wander-risk" class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="wander-risk1" name="wander_risk" value="0" class="form-check-input">
                    <label for="wander-risk1" class="form-check-label">No</label>
                </div>

            </div>

        </div>
 -->


        <!-- mental health diagnosis -->
<!--         <div class="row">
            <div class="col-sm-12">
                <p>Has the resident ever had a mental health diagnosis?</p>
                <div class="form-check">
                    <input type="radio" id="mh-diagnosis" name="mh_diagnosis" value="1" class="form-check-input">
                    <label for="mh-diagnosis" class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="mh-diagnosis1" name="mh_diagnosis" value="0" class="form-check-input" required>
                    <label for="mh-diagnosis1" class="form-check-label">No</label>

                </div>
            </div>
        </div>

        <div id="mh-diagnosis-row" class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="mh-explanation">What is the diagnosis and is it controlled by medication?</label>
                    <input type="text" class="form-control" id="mh-explanation" name="mh_explanation">
                </div>
            </div>
        </div>
 -->        <!-- /mental health diagnosis -->


        <!-- chemical dependencies -->
<!--         <div class="row">
            <div class="col-sm-12">
                <p>Does the resident have any chemical dependencies?</p>
                <div class="form-check">
                    <input type="radio" id="chemical-dependencies" name="chemical_dependencies" value="1" class="form-check-input">
                    <label for="chemical-dependencies" class="form-check-label" required>Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="chemical-dependencies1" name="chemical_dependencies" value="0" class="form-check-input" required>
                    <label for="chemical-dependencies1" class="form-check-label" required>No</label>

                </div>
            </div>
        </div>
        <div id="dependency-explanation-row" class="row">
            <div class="col-sm-12"> 
                <div class="form-group">
                    <label for="dependency-explanation">Explain the chemical dependency</label>
                    <input type="text" class="form-control" id="dependency-explanation" name="dependency_explanation">
                </div>
            </div>
        </div>
 -->        <!-- /chemical dependencies -->

        <!-- amulatory -->
<!--         <div class="row">
            <div class="col-sm-12 col-md-6">
                <p>Is the resident ambulatory?</p>
                <div class="form-check">
                    <input type="radio" id="ambulatory" name="ambulatory" value="1" class="form-check-input">
                    <label for="ambulatory" class="form-check-label">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="ambulatory1" name="ambulatory" value="0" class="form-check-input" required>
                    <label for="ambulatory1" class="form-check-label">No</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <p>Select a timeframe for admission</p>
                    <select name="timeframe" id="timeframe" class="form-control" required>
                        <option value=""></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timeframe']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->id, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

            </div>
        </div>
 -->        <!-- /amulatory -->

        <!-- pcp info -->
        <!-- <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <label for="pcp">Primary Care Physician</label>
                    <input type="text" class="form-control" id="pcp" name="pcp_name">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="pcp-phone">Primary Care Physician Phone</label>
                    <input type="text" class="form-control" id="pcp-phone" name="pcp_phone">
                </div>
            </div>
        </div> -->
        <!-- /pcp info -->

<!--         <div class="row">
            <div class="col-sm-12 text-right">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </div>

    </form>
 -->
    <div class="row mt-5">
        <div class="col-lg-7">
            <h3>General Inquiries</h3>
             <p><a href="tel:907.868.2688" class="text-warning"><i class="fas fa-phone"></i>&nbsp;&nbsp;907.868.2688</a></p>
             <p><a href="mailto:info@aspencreekalaska.com" class="text-warning"><i class="fas fa-envelope"></i></i>&nbsp;&nbsp;info@aspencreekalaska.com</a></p>
             <p><i class="fas fa-map-marked-alt"></i><span class="ml-1">&nbsp;5915 Petersburg Street</span><br><span class="ml-4">&nbsp;Anchorage, Alaska 99507</span>
        </div>
        <div class="lg-5">
            <h3>Office Hours</h3>
            <div class="row">
                <div class="col-2 pt-2">
                    <i class="far fa-clock fa-2x"></i>
                </div>
                <div class="col-10">
                    <p class="ml-4">Monday – Friday<br>9:00 am – 5:00 pm</p>
                </div>
            </div>
            
        </div>
    </div>
</div>


<!-- map -->
<div class="container-fluid mt-5">
    <div class="embed-responsive embed-responsive-21by9">
         <iframe class="embed_responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36623.229586051166!2d-149.81794623140055!3d61.15637104241877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x56c897743c584f2b%3A0xa639396185109446!2s5915%20Petersburg%20St%2C%20Anchorage%2C%20AK%2099507%2C%20USA!5e0!3m2!1sen!2sin!4v1576504296729!5m2!1sen!2sin"></iframe> 
    </div>
</div>
<!-- /map -->

<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/selectize/dist/css/selectize.default.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/microplugin/src/microplugin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/sifter/sifter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FRAMEWORK_JS']->value, ENT_QUOTES, 'UTF-8');?>
/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>        
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/selectize/dist/js/selectize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.date.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['VENDORS']->value, ENT_QUOTES, 'UTF-8');?>
/datepicker/lib/picker.time.js"><?php echo '</script'; ?>
>
<?php }
}
