<?php
    $patient_hn = $_GET['hn'];
    $mySQL = "SELECT * FROM calendar_info WHERE patient_hn = '$patient_hn'";
    $myQuery = mysql_db_query($dbname, $mySQL) or die (mysql_error());
    $myrow = mysql_fetch_array($myQuery);
    $calendar_id = $myrow['Id_app'];

    #calendar_info
    $calendarSQL = "SELECT * FROM calendar_info WHERE Id_app = '$calendar_id'";
    $calendarQuery = mysql_db_query($dbname, $calendarSQL) or die (mysql_error());
    $calendarData = mysql_fetch_array($calendarQuery);

    $date_visit = $calendarData['dmy'];
    $date_visit_day = date_format(date_create($date_visit), "d");
    $date_visit_month = date_format(date_create($date_visit), "m");
    $date_visit_year = date_format(date_create($date_visit), "Y") + 543;
    $date_visit = $date_visit_day." ".$date_visit_month." ".$date_visit_year;

    $time_visit = $calendarData['time_calen'];
    $num_visit = $calendarData['num_visit'];

    $visit_status = $calendarData['patient_visit_status'];
    $visit_type = $calendarData['patient_visit_type'];
    $doctor_owner_id = $calendarData['patient_doctor_owner'];

    #patientinfo
    $patientSQL = "SELECT * FROM patientinfo WHERE patient_hn = '$patient_hn'";
    $patientQuery = mysql_db_query($dbname, $patientSQL) or die (mysql_error());
    $patientData = mysql_fetch_array($patientQuery);

    $patient_name = $patientData["patient_p_name"]." ".$patientData["patient_name"]." ".$patientData["patient_surname"];

    #tbuser
    $doctor_owner_id = $calendarData['patient_doctor_owner'];

    $doctorSQL = "SELECT * FROM tbuser WHERE tbuser.user LIKE '$doctor_owner_id'";
    $doctorQuery = mysql_db_query($dbname, $doctorSQL) or die (mysql_error());
    $doctorData = mysql_fetch_array($doctorQuery);

    $doctor_owner = $doctorData['f_user']." ".$doctorData['l_user'];

    #summary
    $sumSQL = "SELECT * FROM summary WHERE patient_hn='$patient_hn' AND calendar_id='$calendar_id' ";
    $sumQuery = mysql_db_query($dbname, $sumSQL) or die (mysql_error());
    $sumData = mysql_fetch_array($sumQuery);
echo ">>>".$visit_status.$sumData['visit_status']; 
$visit_status = $sumData['visit_status'];
$visit_type = $sumData['visit_type'];
$summary_status = $sumData['summary_status'];
$summary_edit_status = $sumData['summary_edit_status'];
$reason_cancel = $sumData['reason_cancel'];
$reason_visit = $sumData['reason_visit'];
$med = $sumData['med'];

# Basic activity
$basic_act = $sumData['basic_act'];
$basic_act_dress = $sumData['basic_act_dress'];
$basic_act_eat = $sumData['basic_act_eat'];
$basic_act_ambu = $sumData['basic_act_ambu'];
$basic_act_toilet = $sumData['basic_act_toilet'];
$basic_act_hygine = $sumData['basic_act_hygine'];

# Instrument activity
$instru_act = $sumData['instru_act'];
$instru_act_shop = $sumData['instru_act_shop'];
$instru_act_house = $sumData['instru_act_house'];
$instru_act_med = $sumData['instru_act_med'];
$instru_act_fin = $sumData['instru_act_fin'];
$instru_act_tech = $sumData['instru_act_tech'];

# Nutrition
$nutrition_status = $sumData['nutrition_status'];

# Home
$home_risk	 = $sumData['home_risk'];
$home_place = $sumData['home_place'];
$caregiver_burden = $sumData['caregiver_burden'];
$main_caregiver = $sumData['main_caregiver'];
$healthinsure = $sumData['healthinsure'];

# Medication
$pre_drug = $sumData['pre_drug'];
$pre_drug_text = $sumData['pre_drug_text'];
$non_drug = $sumData['non_drug'];
$non_drug_text = $sumData['non_drug_text'];
$diet_sup = $sumData['diet_sup'];
$diet_sup_text = $sumData['diet_sup_text'];
$med_com = $sumData['med_com'];
$med_com_text = $sumData['med_com_text'];

$bio_problem = $sumData['bio_problem'];
$bp1 = $sumData['bp1'];
$bp2 = $sumData['bp2'];
$hr = $sumData['hr'];
$rr = $sumData['rr'];
$oxygen = $sumData['oxygen'];

$heent= $sumData['heent'];
$heent_text = $sumData['heent_text'];
$heart = $sumData['heart'];
$heart_text = $sumData['heart_text'];
$lungs = $sumData['lungs'];
$lungs_text = $sumData['lungs_text'];
$abdomen = $sumData['abdomen'];
$abdomen_text = $sumData['abdomen_text'];
$extremities = $sumData['extremities'];
$extremities_text = $sumData['extremities_text'];
$neuro = $sumData['neuro'];
$neuro_text = $sumData['neuro_text'];

$pps = $sumData['pps'];
$gds = $sumData['gds'];

$mini_cog = $sumData['mini_cog'];
$mini_cube = $sumData['mini_cube'];
$mini_clock = $sumData['mini_clock'];
$mini_psycho = $sumData['mini_psycho'];
$mini_other = $sumData['mini_other'];
$summary_plan = $sumData['summary_plan'];
$summary_goal = $sumData['summary_goal'];

$icd10_main = $sumData['icd10_main'];
$icd10_problem = $sumData['icd10_problem'];

# Management
$manage_assess = $sumData['manage_assess'];
$manage_assess_text = $sumData['manage_assess_text'];
$manage_pain = $sumData['manage_pain'];
$manage_pain_text = $sumData['manage_pain_text'];
$manage_med = $sumData['manage_med'];
$manage_med_text = $sumData['manage_med_text'];
$manage_procedure = $sumData['manage_procedure'];
$manage_procedure_text = $sumData['manage_procedure_text'];
$manage_fammeet = $sumData['manage_fammeet'];
$manage_fammeet_text = $sumData['manage_fammeet_text'];
$manage_social = $sumData['manage_social'];
$manage_social_text = $sumData['manage_social_text'];
$manage_psycho = $sumData['manage_psycho'];
$manage_psycho_text = $sumData['manage_psycho_text'];
$manage_rehab = $sumData['manage_rehab'];
$manage_rehab_text = $sumData['manage_rehab_text'];
$manage_choice = $sumData['manage_choice'];
$manage_choice_text = $sumData['manage_choice_text'];
$manage_dying = $sumData['manage_dying'];
$manage_dying_text = $sumData['manage_dying_text'];
$manage_other = $sumData['manage_other'];
$manage_other_text = $sumData['manage_other_text'];

$suggestion = $sumData['suggestion'];



?>

<dl class="dl-horizontal">
    <h4 class="uk-heading-divider">ส่วนที่ 1 ข้อมูลทั่วไป</h4>

    <dt>ชื่อผู้ป่วย</dt>
    <dd>
        <?php echo $patient_name ?>
    </dd>

    <dt>รหัสโรงพยาบาล</dt>
    <dd>HN <?php echo $patient_hn ?>
    </dd>

    <dt>แพทย์เจ้าของไข้</dt>
    <dd>
        <?php echo $doctor_owner ?>
    </dd>

    <dt>ทีมแพทย์เยี่ยมบ้าน</dt>
    <dd><br>
<!--
        <ol>
            <li>นพ.นพกุล ทองทา</li>
            <li>นพ.ประสงค์ ทรงธรรม</li>
        </ol>
-->
    </dd>

    <dt>วันที่ไปเยี่ยม</dt>
    <dd><?php echo $date_visit_day." ".$date_visit_month." ".$date_visit_year ?></dd>

    <dt>เวลาที่ไปเยี่ยม</dt>
    <dd><?php echo $time_visit ?></dd>

    <dt>เยี่ยมบ้านครั้งที่</dt>
    <dd><?php echo $num_visit ?></dd>

    <dt>เหตุผลการเยี่ยมบ้าน</dt>
    <dd>
      <div class="ui form">
      <div class="inline fields">
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="reason_visit" tabindex="1" class="hidden" <?php if($reason_visit==1){ echo "checked"; } ?> disabled/>
            <label>Assessment</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="reason_visit" tabindex="2" class="hidden" <?php if($reason_visit==2){ echo "checked"; } ?> disabled/>
            <label>Illness management</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="reason_visit" tabindex="3" class="hidden" <?php if($reason_visit==3){ echo "checked"; } ?> disabled/>
            <label>Palliative</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="reason_visit" tabindex="4" class="hidden" <?php if($reason_visit==4){ echo "checked"; } ?> disabled/>
            <label>Post hospitalized</label>
          </div>
        </div>
      </div>
      </div>

        <!-- <label class="uk-margin-right"><input class="uk-radio" type="radio"  /> Assessment</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" /> Illness management</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio"  /> Palliative</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio"  /> Post hospitalized</label> -->
    </dd>

    <dt>ยาที่ใช้ปัจจุบัน และยาที่ซื้อกินเอง</dt>
    <dd><?php echo $med ?><br></dd>

    <h5 class="uk-heading-bullet">Impairment / Immobility</h5>
    <dt>Basic activities of daily living</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($basic_act==1){ echo "checked"; } ?> disabled>
        <label>มีปัญหา</label>
      </div>

      <br>

        <div class="ui form">
        <div class="inline fields">
          <div class="field">
            <label class="uk-margin-right uk-text-bold">เลือกปัญหา</label>
          </div>

          <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($basic_act_dress==1){ echo "checked"; } ?> disabled/>
          <label>Dressing</label>
        </div>
      </div>

          <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($basic_act_eat==1){ echo "checked"; } ?> disabled/>
          <label>Eating</label>
        </div>
      </div>

      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($basic_act_ambu==1){ echo "checked"; } ?> disabled/>
          <label>Ambulating</label>
        </div>
      </div>

      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($basic_act_toilet==1){ echo "checked"; } ?> disabled/>
          <label>Toileting</label>
        </div>
      </div>

      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($basic_act_hygine==1){ echo "checked"; } ?> disabled>
          <label>Hygine</label>
        </div>
      </div>

    </div>
  </div>

        <!-- <label><input class="uk-checkbox" type="checkbox" /> มีปัญหา</label>
        <label class="uk-margin-right uk-text-bold">เลือกปัญหา</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Dressing</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Eating</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Ambulating</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Toileting</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Hygine</label> -->
    </dd>

    <dt>Instrumental activities<br>of daily living</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($instru_act==1){ echo "checked"; } ?> disabled/>
        <label>มีปัญหา</label>
      </div>
      <br>

        <div class="ui form">
        <div class="inline fields">
          <div class="field">
            <label class="uk-margin-right uk-text-bold">เลือกปัญหา</label>
          </div>

          <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($instru_act_shop==1){ echo "checked"; } ?> disabled/>
          <label>Shopping</label>
        </div>
      </div>

          <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($instru_act_house==1){ echo "checked"; } ?>  disabled/>
          <label>Houskeeping</label>
        </div>
      </div>

      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($instru_act_med==1){ echo "checked"; } ?> disabled/>
          <label>Medication</label>
        </div>
      </div>

      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($instru_act_fin==1){ echo "checked"; } ?>  disabled/>
          <label>Financial</label>
        </div>
      </div>

      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" tabindex="0" class="hidden" <?php if($instru_act_tech==1){ echo "checked"; } ?> disabled/>
          <label>Transpoting / Technology</label>
        </div>
      </div>

    </div>
  </div>

        <!-- <label><input class="uk-checkbox" type="checkbox" /> มีปัญหา</label>
        <br>
        <label class="uk-margin-right uk-text-bold">เลือกปัญหา</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Shopping</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Houskeeping</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Medication</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> Financial</label>
        <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Transpoting / Technology</label> -->
    </dd>

    <h5 class="uk-heading-bullet">Nutrition</h5>
    <dt>Nutritional status</dt>
    <dd>
      <div class="ui form">
      <div class="inline fields">
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="nutrition_status" tabindex="1" class="hidden" <?php if($nutrition_status==1){ echo "checked"; } ?> disabled/>
            <label>Healthy</label>
          </div>
        </div>

        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="nutrition_status" tabindex="2" class="hidden" <?php if($nutrition_status==2){ echo "checked"; } ?> disabled/>
            <label>Obesity</label>
          </div>
        </div>

        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="nutrition_status" tabindex="3" class="hidden" <?php if($nutrition_status==3){ echo "checked"; } ?> disabled/>
            <label>Malnutrition</label>
          </div>
        </div>

      </div>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-radio" type="radio" name="nutrition_status"  /> Healthy</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" name="nutrition_status"  /> Obesity</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" name="nutrition_status"  /> Malnutrition</label> -->
    </dd>

    <h5 class="uk-heading-bullet">Home environment / Safety</h5>
    <dt>Risk</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($home_risk==1){ echo "checked"; } ?> disabled/>
        <label>มีความเสี่ยง</label>
      </div>
        <!-- <input class="uk-checkbox" type="checkbox" /> มีความเสี่ยง -->
    </dd>

    <dt>Place at risk</dt>
    <dd><?php echo $home_place ?></dd>

    <h5 class="uk-heading-bullet">Social support</h5>
    <dt>Caregiver burden</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($caregiver_burden==1){ echo "checked"; } ?> disabled/>
        <label>มีปัญหา</label>
      </div>
        <!-- <input class="uk-checkbox" type="checkbox"  /> มีปัญหา -->
    </dd>

    <dt>Main caregiver</dt>
    <dd><br><?php echo $main_caregiver ?></dd>

    <dt>สิทธิ์การรักษา</dt>
    <dd>
        <?php echo $healthinsure ?>
    </dd>

    <h5 class="uk-heading-bullet">Medication</h5>

    <dt>Prescription drug</dt>
    <dd>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($pre_drug==1){ echo "checked"; } else { echo "disabled"; } ?> /> Yes</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($pre_drug==2){ echo "checked"; } else { echo "disabled"; } ?> /> No</label>
        <?php echo $pre_drug_text ?>
    </dd>
    <dt>Nonprescription drug</dt>
    <dd>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($non_drug==1){ echo "checked"; } else { echo "disabled"; } ?> /> Yes</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($non_drug==2){ echo "checked"; } else { echo "disabled"; } ?> /> No</label>
        <?php echo $non_drug_text ?>
    </dd>

    <dt>Dietary supplement</dt>
    <dd>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($diet_sup==1){ echo "checked"; } else { echo "disabled"; } ?> /> Yes</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($diet_sup==2){ echo "checked"; } else { echo "disabled"; } ?> /> No</label>
        <?php echo $diet_sup_text ?>
    </dd>

    <dt>Medication compliance</dt>
    <dd>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($med_com==1){ echo "checked"; } else { echo "disabled"; } ?> /> Yes</label>
        <label class="uk-margin-right"><input class="uk-radio" type="radio" <?php if($med_com==2){ echo "checked"; } else { echo "disabled"; } ?> /> No</label>
        <?php echo $med_com_text ?>
    </dd>

    <h5 class="uk-heading-bullet">Management</h5>
    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_assess==1){ echo "checked"; } ?> disabled/>
        <label>Assessment</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Assessment</label> -->
        <?php echo $manage_assess_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_pain==1){ echo "checked"; } ?> disabled/>
        <label>Pain & Symptom management</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Pain & Symptom management</label> -->
        <?php echo $manage_pain_text ?>
    </dd>
    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_med==1){ echo "checked"; } ?> disabled/>
        <label>Medication management</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Medication management</label> -->
        <?php echo $manage_med_text ?>
    </dd>
    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_procedure==1){ echo "checked"; } ?> disabled/>
        <label>Procedure</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Procedure</label> -->
        <?php echo $manage_procedure_text ?>
    </dd>
    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_fammeet==1){ echo "checked"; } ?> disabled/>
        <label>Family meeting</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Family meeting</label> -->
        <?php echo $manage_fammeet_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_social==1){ echo "checked"; } ?> disabled/>
        <label>Social support & Health insurance</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Social support & Health insurance</label> -->
        <?php echo $manage_social_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_psycho==1){ echo "checked"; } ?> disabled/>
        <label>Psychological care</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Psychological care</label> -->
        <?php echo $manage_psycho_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_rehab==1){ echo "checked"; } ?> disabled/>
        <label>Rehabilitation</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Rehabilitation</label> -->
        <?php echo $manage_rehab_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_choice==1){ echo "checked"; } ?> disabled/>
        <label>Advance direction choice</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Advance direction choice</label> -->
        <?php echo $manage_choice_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_dying==1){ echo "checked"; } ?> disabled/>
        <label>Dying <span class="uk-text-meta text-small">Funeral plan / Grief bereavement care</span></label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> Dying <span class="uk-text-meta text-small">Funeral plan / Grief bereavement care</span></label> -->
        <?php echo $manage_dying_text ?>
    </dd>

    <dt></dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" <?php if($manage_other==1){ echo "checked"; } ?> disabled/>
        <label>Other specify</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" disabled> Other specify</label> -->
        <?php echo $manage_other_text ?>
    </dd>

    <h4 class="uk-heading-divider">ส่วนที่ 2 รายละเอียดปัญหา</h4>

    <dt>Biological problem</dt>
    <dd>
        <?php echo $bio_problem ?><br>
    </dd>

    <h5 class="uk-heading-bullet">Physical examination</h5>
    <dt>Vital sign</dt>
    <dd>
        <div class="uk-grid">
            <div class="uk-margin-right">
                <b class="uk-margin-right">BP</b> <?php echo $bp1 ?> / <?php echo $bp2 ?> mmHg
            </div>
            <div class="uk-margin-right">
                <b class="uk-margin-right">HR</b> <?php echo $hr ?> /min
            </div>
            <div class="uk-margin-right">
                <b class="uk-margin-right">RR</b> <?php echo $rr ?> /min
            </div>
            <div class="uk-margin-right">
                <b class="uk-margin-right">Oxygen saturation</b> <?php echo $oxygen ?> %
            </div>
        </div>
    </dd>

    <dt>HEENT</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="1" class="hidden" <?php if($heent==1){ echo "checked"; } ?> disabled/>
        <label>ปกติ</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"  /> ปกติ</label> -->
        <?php echo $heent_text ?>
    </dd>

    <dt>Heart</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="1" class="hidden" <?php if($heart==1){ echo "checked"; } ?> disabled/>
        <label>ปกติ</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"   /> ปกติ</label> -->
        <?php echo $heart_text ?>
    </dd>

    <dt>Lungs</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="1" class="hidden" <?php if($lungs==1){ echo "checked"; } ?> disabled/>
        <label>ปกติ</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"   /> ปกติ</label> -->
        <?php echo $lungs_text ?>
    </dd>

    <dt>Abdomen</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="1" class="hidden" <?php if($abdomen==1){ echo "checked"; } ?> disabled/>
        <label>ปกติ</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"   /> ปกติ</label> -->
        <?php echo $abdomen_text ?>
    </dd>

    <dt>Extremities</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="1" class="hidden" <?php if($extremities==1){ echo "checked"; } ?> disabled/>
        <label>ปกติ</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox" /> ปกติ</label> -->
        <?php echo $extremities_text ?>
    </dd>

    <dt>Neuro</dt>
    <dd>
      <div class="ui checkbox">
        <input type="checkbox" tabindex="1" class="hidden" <?php if($neuro==1){ echo "checked"; } ?> disabled/>
        <label>ปกติ</label>
      </div>
        <!-- <label class="uk-margin-right"><input class="uk-checkbox" type="checkbox"   /> ปกติ</label> -->
        <?php echo $neuro_text ?>
    </dd>

    <h5 class="uk-heading-bullet">Score assessment</h5>

    <dt>PPS</dt>
    <dd><?php echo $pps ?></dd>

    <dt>Geriatric depression scale</dt>
    <dd><?php echo $gds ?></dd>

    <h5 class="uk-heading-bullet">Mini mental state examination</h5>

    <dt>Mini-cog</dt>
    <dd><?php echo $mini_cog ?></dd>

    <dt>Cube test</dt>
    <dd><?php echo $mini_cube ?></dd>

    <dt>Clock drawing test</dt>
    <dd><?php echo $mini_clock ?></dd>

    <dt>Psychological & Social problem</dt>
    <dd>
        <?php if($mini_psycho != NULL){ echo $mini_psycho; } else { echo "-"; } ?>
    </dd>

    <dt>Other problem</dt>
    <dd>
        <?php if($mini_other != NULL){ echo $mini_other; } else { echo "-"; } ?>
    </dd>

    <h5 class="uk-heading-bullet">Summarized</h5>

    <dt>Assessment and Plan</dt>
    <dd>
        <?php if($summary_plan != NULL){ echo $summary_plan; } else { echo "-"; } ?>
    </dd>

    <dt>Goal</dt>
    <dd>
        <?php if($summary_goal != NULL){ echo $summary_goal; } else { echo "-"; } ?>
    </dd>

    <h4 class="uk-heading-divider">ส่วนที่ 3 สรุปข้อมูลปัญหา</h4>
    <h5 class="uk-heading-bullet">รหัสการวินิจฉัยปัญหาผู้ป่วย</h5>

    <dt>วินิจฉัยหลัก</dt>
    <dd>
        <?php if($icd10_main != NULL){ echo $icd10_main; } else { echo "-"; } ?>
    </dd>

    <dt>ปัญหา</dt>
    <dd>
        <ol>
            <li>Sed suscipit nibh a nisi feugiat, id vehicula nulla auctor.</li>
            <li>Nam sit amet tellus sit amet sem mollis blandit ut porta tortor.</li>
            <li>Vestibulum vitae ex fringilla, ultricies quam at, pretium libero.</li>
        </ol>
    </dd>

    <h4 class="uk-heading-divider">ส่วนที่ 4 สรุปหลังการประชุม</h4>

    <dt>สรุปคำแนะนำ</dt>
    <dd>
        <?php echo $suggestion ?><br>
    </dd>

    <dt>วางแผนครั้งต่อไป</dt>
    <dd>
<!--
        เยี่ยมบ้านต่อ
        <span class="text-green">วันที่ 31 พฤษภาคม 2560</span>
-->
    </dd>
</dl>
