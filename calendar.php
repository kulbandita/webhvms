<!DOCTYPE html>
<html>
<?php
	session_start();
	if($_SESSION['id'] == "")
	{
		header( "location:login.php");
		exit();
	}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>ระบบบริหารจัดการข้อมูลหน่วยบริการเยี่ยมบ้าน (Home visit service management system)</title>

    <!--mdl-->
    <link rel="stylesheet" href="lib/mdl/material.min.css">
    <link rel="stylesheet" href="lib/mdl-template-dashboard/styles.css">

    <!--uikit-->
    <link rel="stylesheet" href="lib/uikit/css/uikit.min.css">

    <!--icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--custom css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/calendar.css">
</head>

<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <?php include "header.html"; ?>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid demo-content">

                <ul class="uk-breadcrumb breadcrumb">
                    <li><span href="#"></span><i class="material-icons breadcrumb-icons">date_range</i>ปฏิทินนัดหมาย</li>
                </ul>

                <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__menu"></div>

                    <div class="mdl-card__supporting-text mdl-cell mdl-cell--12-col">
                        <div class="uk-grid uk-grid-collapse">

                            <div class="uk-width-1-1">
                                <h4 class="uk-heading-divider">แสดงนัดหมาย</h4>
                                <form class="uk-form">
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio1" checked> เฉพาะฉัน
                                    </label>
                                    <div class="uk-margin-small">
                                        <label>
                                            <input class="uk-radio" type="radio" name="radio1"> ทั้งหมด
                                        </label>
                                    </div>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio1"> แพทย์ที่ระบุ: 
                                    </label>
                                    <input list="doctor" class="uk-input uk-width-medium uk-form-small" placeholder="ค้นหาจากรหัส / ชื่อ-นามสกุล">
                                    <datalist id="doctor">
                                        <option value="นพ.ประสงค์ ทรงธรรม" /> 012568
                                        <option value="นพ.นพดล ชลธาร" /> 013654
                                        <option value="นพ.คชสร อมรรัตน์" /> 016325
                                        <option value="พญ.รัตนา พานิชญ์" /> 014251
                                        <option value="นญ.วิภาวรรณ ใจสุทธิ์" /> 013212
                                        <option value="นพ.ชลธร รุ่งเจริญ" /> 013625
                                    </datalist>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/.mdl-card__supporting-text-->
                </div>
                <!--/.mdl-card-->

                <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-cell mdl-cell--12-col mdl-color-text--black">
                        <div class="mdl-card__menu">
                            <ul class="uk-iconnav">
                                <li>
                                    <a href="calendar_notify.php" class=" mdl-badge mdl-badge--overlap" data-badge="2" title="แจ้งเตือน" uk-tooltip>
                                        <i class="material-icons">notifications</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#print-calendar" title="พิมพ์สรุปก่อนประชุม" uk-tooltip uk-toggle>
                                        <i class="material-icons">print</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar_add.php" title="เพิ่มนัดหมาย" uk-tooltip>
                                        <i class="material-icons">add</i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!--PRINT MODAL-->
                        <div id="print-calendar" uk-modal="center: true">

                            <div class="uk-modal-dialog ">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <div class="uk-modal-body">
                                    <h4 class="uk-heading-divider">พิมพ์สรุปผลเยี่ยมบ้านล่าสุดของผู้ป่วย ในเดือนมีนาคม 2560</h4>
                                    <form class="uk-form">
                                        <div class="uk-margin-small">
                                            <label>
                                            <input class="uk-radio" type="radio" name="print-week" > ทั้งหมด
                                        </label>
                                        </div>
                                        <div class="uk-margin-small">
                                            <label>
                                            <input class="uk-radio" type="radio" name="print-week"> 27 กุมภาพันธ์ - 3 มีนาคม
                                        </label>
                                        </div>
                                        <div class="uk-margin-small">
                                            <label>
                                        <input class="uk-radio " type="radio" name="print-week"> 6 มีนาคม - 10 มีนาคม
                                            </label>
                                        </div>
                                        <div class="uk-margin-small">
                                            <label>
                                        <input class="uk-radio " type="radio" name="print-week"> 13 มีนาคม - 17 มีนาคม 
                                            </label>
                                        </div>
                                        <div class="uk-margin-small">
                                            <label>
                                        <input class="uk-radio " type="radio" name="print-week" checked> 20 มีนาคม - 24 มีนาคม <small>(สัปดาห์หน้า)</small>
                                            </label>
                                        </div>
                                        <div class="uk-margin-small">
                                            <label>
                                        <input class="uk-radio " type="radio" name="print-week"> 27 มีนาคม - 31 มีนาคม
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <!--/.uk-modal-body-->
                                <div class="uk-modal-footer">
                                    <div class="uk-align-right ">
                                        <a href="#week-appointment" class="uk-button uk-button-default uk-button-small button-green" uk-toggle>เลือก</a>
                                    </div>
                                </div>
                                <!--/.uk-modal-footer-->
                            </div>
                        </div>
                        <!--/.uk-modal-->

                        <!--show list Modal-->
                        <div id="week-appointment" uk-modal="center: true">
                            <div class="uk-modal-dialog">
                                <div class=" uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <h4 class="uk-heading-divider">รายชื่อผู้ป่วยของวันที่ 20 - 24 มีนาคม</h4>
                                    <ul uk-accordion="multiple: true">
                                        <li class="uk-open">
                                            <h5 class="uk-accordion-title uk-heading-bullet">วันพุธที่ 22 มีนาคม</h5>
                                            <div class="uk-accordion-content">
                                                <div class="uk-grid-small uk-flex-middle am-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง มาณี ประชาไท <small>(HN 4683265)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.ประสงค์ ทรงธรรม <small>(013655)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        9.00 - 12.00 น (เช้า)
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--
                                        <li class="uk-open">
                                            <h3 class="uk-accordion-title">7 มีนาคม 2560</h3>
                                            <div class="uk-accordion-content">
                                                <div class="uk-grid-small uk-flex-middle pm-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาย ชูชาติ มณีโชติ <small>(7463256)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.อภิชัย วรรธนะพิศิษฐ์ <small>(011115)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        13.00 - 16.00 น (บ่าย)
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
-->
                                        <li class="uk-open">
                                            <h3 class="uk-accordion-title uk-heading-bullet">วันศุกร์ที่ 24 มีนาคม</h3>
                                            <div class="uk-accordion-content">
                                                <div class="uk-grid-small uk-flex-middle pm-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง ชญานิศ พลฑา <small>(HN 6118489)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.ประสงค์ ทรงธรรม <small>(013655)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        13.00 - 16.00 น (บ่าย)
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="uk-grid-small uk-flex-middle am-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง เพียรจิต จงใจรักษ์ <small>(6213261)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.ประสงค์ ทรงธรรม <small>(0113650)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        9:00 - 12.00 น (เช้า)
                                                    </div>
                                                </div>
                                                <div class="uk-grid-small uk-flex-middle am-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง รุ่งทิพย์ ก่อเกียรติ <small>(5965485)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            พญ.ปุณพรรณ กมลมุนีโชติ <small>(013829)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        9:00 - 12.00 น (เช้า)
                                                    </div>
                                                </div>
                                                <div class="uk-grid-small uk-flex-middle pm-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง มาลิณี เขียนทอง<small>(6543215)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            พญ.ปุณพรรณ กมลมุนีโชติ <small>(013829)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        13.00 - 16.00 น (บ่าย)
                                                    </div>
                                                </div>
                                                <div class="uk-grid-small uk-flex-middle pm-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาย ชัชชัย สมรภูมิ <small>(6932651)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.ประพันธ์ ประสิทธิกุล <small>(013626)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        13.00 - 16.00 น (บ่าย)
                                                    </div>
                                                </div>
-->
                                            </div>
                                            <!--/.uk-accordion-content-->
                                        </li>
                                    </ul>
                                </div>
                                <div class="uk-modal-footer">
                                    <div class="uk-align-right ">
                                        <a href="#week-appointment" class="uk-button uk-button-default uk-button-small button-green" uk-toggle>พิมพ์สรุป</a>
                                    </div>
                                </div>
                                <!--/.uk-modal-footer-->
                            </div>
                        </div>
                        <!--/.uk-modal-->

                        <h4 class="uk-text-center">
                            <a href="#" uk-slidenav-previous></a> มีนาคม 2560
                            <a href="#" uk-slidenav-next></a>
                        </h4>

                        <!--calendar-wrap-->
                        <div id="calendar-wrap">
                            <div id="calendar">
                                <ul class="weekdays">
                                    <li>จันทร์</li>
                                    <li>อังคาร</li>
                                    <li>พุธ</li>
                                    <li>พฤหัสบดี</li>
                                    <li>ศุกร์</li>
                                </ul>

                                <!-- Days from previous month -->
                                <ul class="days">
                                    <li class="day other-month">
                                        <div class="date">27</div>

                                    </li>
                                    <li class="day other-month">
                                        <div class="date">28</div>
                                    </li>

                                    <!-- Days in current month -->
                                    <li class="day">
                                        <div class="date">1</div>
                                        <div class="event past">
                                            <div class="event-desc">
                                                <div class="uk-text-truncate"><span uk-icon="icon: check; ratio: 0.8"></span>
                                                    <b>นาย ธนโชติ มหาทรัพย์ <small>(8512365)</small></b>
                                                </div>
                                                <div class="uk-text-truncate">
                                                    นพ.ประสงค์ ทรงธรรม <small>(011365)</small>
                                                </div>
                                            </div>
                                            <div class="event-time">
                                                9:00 - 12.00 น (เช้า)
                                            </div>
                                        </div>
                                    </li>
                                    <li class="day" onclick="add_calendar()">
                                        <div class="date">2</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">3</div>
                                    </li>
                                </ul>

                                <!-- Row #2 -->
                                <ul class="days">
                                    <li class="day">
                                        <div class="date">6</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">7</div>
                                        <div class="event afternoon past">
                                            <div class="event-desc">
                                                <div class="uk-text-trucate"><span uk-icon="icon: check; ratio: 0.8"></span>
                                                    <b>นาย ชูชาติ มณีโชติ
                                            <small>(7463256)</small></b>
                                                </div>
                                                <div class="uk-text-truncate">
                                                    นพ.อภิชัย วรรธนะพิศิษฐ์ <small>(011115)</small>
                                                </div>
                                            </div>
                                            <div class="event-time">
                                                13:00 - 16.00 น (บ่าย)
                                            </div>
                                        </div>
                                    </li>
                                    <li class="day">
                                        <div class="date">8</div>
                                    </li>
                                    <li class="day">
                                        <div class="date ">9</div>
                                        <div class="event past">
                                            <div class="event-desc">
                                                <div class="uk-text-truncate">
                                                    <span uk-icon="icon: check; ratio: 0.8"></span>
                                                    <b>นาง เพียรจิต จงใจรักษ์ <small>(6213261)</small></b>
                                                </div>
                                                <div class="uk-text-truncate">
                                                    นพ.ประสงค์ ทรงธรรม <small>(0113650)</small>
                                                </div>
                                            </div>
                                            <div class="event-time">
                                                9:00 - 12.00 น (เช้า)
                                            </div>
                                        </div>
                                        <div class="event past">
                                            <div class="event-desc">
                                                <div class="uk-text-truncate">
                                                    <span uk-icon="icon: check; ratio: 0.8"></span>
                                                    <b>นาง รุ่งทิพย์ ก่อเกียรติ <small>(5965485)</small></b>
                                                </div>
                                                <div class="uk-text-truncate">
                                                    พญ.ปุณพรรณ กมลมุนีโชติ <small>(013829)</small>
                                                </div>
                                            </div>
                                            <div class="event-time">
                                                9:00 - 12.00 น (เช้า)
                                            </div>
                                        </div>

                                        <a href="#show-more" class="event-more" uk-toggle><small>+2 นัดหมาย</small></a>
                                        <!--MORE Modal-->
                                        <div id="show-more" uk-modal="center: true">
                                            <div class="uk-modal-dialog uk-modal-body">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <h4 class="uk-heading-divider">นัดหมายวันที่ 9 มีนาคม 2560</h4>
                                                <div class="uk-grid-small uk-flex-middle am-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง เพียรจิต จงใจรักษ์ <small>(6213261)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.ประสงค์ ทรงธรรม <small>(0113650)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        9:00 - 12.00 น (เช้า)
                                                    </div>
                                                </div>
                                                <div class="uk-grid-small uk-flex-middle am-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง รุ่งทิพย์ ก่อเกียรติ <small>(5965485)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            พญ.ปุณพรรณ กมลมุนีโชติ <small>(013829)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        9:00 - 12.00 น (เช้า)
                                                    </div>
                                                </div>
                                                <div class="uk-grid-small uk-flex-middle pm-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาง มาลิณี เขียนทอง<small>(6543215)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            พญ.ปุณพรรณ กมลมุนีโชติ <small>(013829)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        13.00 - 16.00 น (บ่าย)
                                                    </div>
                                                </div>
                                                <div class="uk-grid-small uk-flex-middle pm-past" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <span uk-icon="icon: check"></span>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <b>นาย ชัชชัย สมรภูมิ <small>(6932651)</small></b>
                                                        <p class="uk-text-meta uk-margin-remove-top">
                                                            นพ.ประพันธ์ ประสิทธิกุล <small>(013626)</small>
                                                        </p>
                                                    </div>
                                                    <div class="uk-float-right">
                                                        13.00 - 16.00 น (บ่าย)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.uk-modal-->
                                    </li>
                                    <li class="day">
                                        <div class="date">10</div>
                                    </li>
                                </ul>

                                <!-- Row #3 -->
                                <ul class="days">
                                    <li class="day">
                                        <div class="date">13</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">14</div>
                                        <a href="#show-hn5874158" uk-toggle>
                                            <div class="event afternoon">
                                                <div class="event-desc">
                                                    <div class="ul-text-truncate"> <span uk-icon="icon: check; ratio: 0.8"></span>
                                                        <b>นาย เหมันต์ ธนไพบูรณ์ <small>(5874158)</small></b>
                                                    </div>
                                                    <div class="uk-text-truncate">
                                                        พญ.ภัควิภา เริ่มยินดี <small>(011097) </small>
                                                    </div>
                                                </div>
                                                <div class="event-time">
                                                    13:00 - 16.00 น (บ่าย)
                                                </div>
                                            </div>
                                        </a>
                                        <!--THIS IS A MODAL-->
                                        <div id="show-hn5874158" uk-modal="center: true; stack: true">
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <div class=" uk-modal-body">
                                                    <h4>นาย เหมันต์ ธนไพบูรณ์ (HN 7854485)</h4>
                                                    <form class="uk-form-horizontal">
                                                        <div class=" uk-margin-small">
                                                            <label class="uk-form-label">สถานะเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                ใหม่
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ประเภทการเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                Home visit care
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">วันเวลาที่เยี่ยม
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                14/3/2560 <small>(เช้า)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">แพทย์เจ้าของไข้
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                พญ.ภัควิภา เริ่มยินดี <small>(011097)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ทีมแพทย์เยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <span class="text-green">&#11044;</span> พญ.ภัควิภา เริ่มยินดี <small>011097</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.นพดล นพกุล <small>(011106)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.ประสงค์ ทรงธรรม <small>(011156)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.พฤกษา วนารี <small>(011196)</small>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">สรุปข้อมูลปัญหาผู้ป่วย
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <ol>
                                                                    <li> I10 <small>Essential (primary) hypertension</small></li>
                                                                    <li> E117 <small>Non-insulin-dependent diabetes mellitus, with multiple complications</small></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label">สรุปผลเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label >
                                                                    <input class="uk-radio" type="radio" name="reason" checked> ได้เยี่ยมบ้าน
                                                                </label>
                                                                <br>
                                                                    <label class="uk-margin-top">
                                                                    <input class="uk-radio" type="radio" name="reason"> ยกเลิกเยี่ยมบ้าน
                                                               <br>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason"> ปิดเยี่ยมบ้าน
                                                                </label>
                                                                <br>
                                                                <small>ถ้าไม่ได้เยี่ยมบ้าน โปรดระบุเหตุผล</small>
                                                                <input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="เลือกเหตุผล" disabled>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="uk-modal-footer">
                                                    <div class="uk-align-right ">
                                                        <a class="uk-button uk-button-default button-green uk-button-small " href="#confirm-summary" uk-toggle>บันทึก</a>
                                                        <div id="confirm-summary" uk-modal="center: true">
                                                            <div class="uk-modal-dialog">
                                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                <div class=" uk-modal-body">
                                                                    ต้องการกรอกข้อมูลสรุปเยี่ยมบ้านหรือไม่?
                                                                </div>
                                                                <!--/.uk-modal-body-->
                                                                <div class="uk-modal-footer ">
                                                                    <div class="uk-align-right">
                                                                        <a class="uk-button uk-button-default uk-button-small">ยกเลิก</a>
                                                                        <a class="uk-button uk-button-default uk-button-small button-green" href="summary_step1.php">สรุปผล</a>
                                                                    </div>
                                                                </div>
                                                                <!--/.uk-modal-footer-->
                                                            </div>
                                                            <!--/.uk-modal-dialog-->
                                                        </div>
                                                        <!--/#confirm-summary-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.uk-modal-->
                                    </li>
                                    <li class="day">
                                        <div class="date today">15</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">16</div>
                                    </li>
                                    <li class="day">
                                        <!--STATUS: REVIEW-->
                                        <div class="date">17</div>
                                        <a href="#show-hn7854485" uk-toggle>
                                            <div class="event morning ">
                                                <div class="event-desc">
                                                    <div class="uk-text-truncate">
                                                        <span uk-icon="icon: users; ratio: 0.8"></span>
                                                        <b>นาง วิยดา เครื่องดี <small>(7854485)</small></b>
                                                    </div>
                                                    <div class="uk-text-truncate">
                                                        นพ.ประสงค์ ทรงธรรม <small>(011365)</small>
                                                    </div>
                                                </div>
                                                <div class="event-time">
                                                    9:00 - 12.00 น (เช้า)
                                                </div>
                                            </div>
                                        </a>
                                        <!--THIS IS A MODAL-->
                                        <div id="show-hn7854485" uk-modal="center: true">
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>

                                                <div class=" uk-modal-body">
                                                    <h4>นาง วิยดา เครื่องดี (HN 7854485)</h4>

                                                    <form class="uk-form-horizontal ">
                                                        <div class=" uk-margin-small">
                                                            <label class="uk-form-label">สถานะเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                ใหม่
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ประเภทการเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                Home visit care
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">วันเวลาที่เยี่ยม
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                17/3/2560 <small>(เช้า)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">แพทย์เจ้าของไข้
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                นพ.ประสงค์ ทรงธรรม <small>(013655)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ทีมแพทย์เยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <span class="text-green">&#11044;</span> พญ.ภัควิภา เริ่มยินดี <small>(011097)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.นพดล นพกุล <small>(011106)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.ประสงค์ ทรงธรรม <small>(011156)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.พฤกษา วนารี <small>(011196)</small>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">สรุปข้อมูลปัญหาผู้ป่วย
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <ol>
                                                                    <li> I10 <small>Essential (primary) hypertension</small></li>
                                                                    <li> E117 <small>Non-insulin-dependent diabetes mellitus, with multiple complications</small></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label">สรุปผลเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason" disabled> ได้เยี่ยมบ้าน
                                                                </label>
                                                                <br>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason" checked> ยกเลิกเยี่ยมบ้าน
                                                                </label>
                                                                <br>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason"> ปิดเยี่ยมบ้าน
                                                                </label>
                                                                <br>
                                                                <small>ถ้าไม่ได้เยี่ยมบ้าน โปรดระบุเหตุผล</small>
                                                                <input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="เลือกเหตุผล">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="uk-modal-footer">
                                                    <div class="uk-align-right ">
                                                        <button class="uk-button uk-button-green uk-button-small" uk- type="button">บันทึก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.uk-modal-->
                                        <a href="#show-hn7465116" uk-toggle>
                                            <div class="event afternoon summary">
                                                <div class="event-desc">
                                                    <div class="uk-text-truncte">
                                                        <span uk-icon="icon: users; ratio: 0.8"></span>
                                                        <b>นาง วิภา มานะยิ่ง <small>(7465116)</small></b>
                                                    </div>
                                                    <div class="uk-text-truncte">
                                                        นพ.ประสงค์ ทรงธรรม <small>(011365)</small></div>
                                                </div>
                                                <div class="event-time">
                                                    13:00 - 16.00 น (บ่าย)
                                                </div>
                                            </div>
                                        </a>
                                        <!--THIS IS A MODAL-->
                                        <div id="show-hn7465116" uk-modal="center: true">
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>

                                                <div class=" uk-modal-body">
                                                    <h4>นาง วิภา มานะยิ่ง (HN 7465116)</h4>

                                                    <form class="uk-form-horizontal ">
                                                        <div class=" uk-margin-small">
                                                            <label class="uk-form-label">สถานะเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                ใหม่
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ประเภทการเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                Home visit care
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">วันเวลาที่เยี่ยม
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                17/3/2560 <small>(บ่าย)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">แพทย์เจ้าของไข้
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                นพ.ประสงค์ ทรงธรรม <small>(013655)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ทีมแพทย์เยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <span class="text-green">&#11044;</span> พญ.ภัควิภา เริ่มยินดี <small>(011097)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.นพดล นพกุล <small>(011106)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.ประสงค์ ทรงธรรม <small>(011156)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.พฤกษา วนารี <small>(011196)</small>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">สรุปข้อมูลปัญหาผู้ป่วย
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <ol>
                                                                    <li> I10 <small>Essential (primary) hypertension</small></li>
                                                                    <li> E117 <small>Non-insulin-dependent diabetes mellitus, with multiple complications</small></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="uk-modal-footer">
                                                    <div class="uk-align-left uk-margin-remove-vertical">
                                                        <a href="#confirm-delete" uk-icon="icon: trash" title="ลบนัดหมายผิดพลาด" uk-tooltip="pos: right" uk-toggle></a>

                                                        <div id="confirm-delete" uk-modal="center: true">
                                                            <div class="uk-modal-dialog">
                                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                                <div class=" uk-modal-body">
                                                                    <h5>ต้องการลบนัดหมายวันที่ 17 มีนาคม 2560
                                                                        <b>นาง วิภา มานะยิ่ง <small>(7465116)</small></b></h5>
                                                                    <form>
                                                                        เพราะ
                                                                        <input class="uk-input uk-form-small uk-form-width-medium" placeholder="เหตุผล...">

                                                                    </form>
                                                                </div>
                                                                <!--/.uk-modal-body-->
                                                                <div class="uk-modal-footer ">
                                                                    <div class="uk-align-right">
                                                                        <a class="uk-button uk-button-default uk-button-small">ยกเลิก</a>
                                                                        <a class="uk-button uk-button-default uk-button-small button-green" href="#">ลบ</a>
                                                                    </div>
                                                                </div>
                                                                <!--/.uk-modal-footer-->
                                                            </div>
                                                            <!--/.uk-modal-dialog-->
                                                        </div>
                                                    </div>
                                                    <div class="uk-align-right uk-margin-remove-vertical">
                                                        <a class="uk-button uk-button-default uk-button-small button-green" uk- type="button">แก้ไข</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.uk-modal-->
                                    </li>
                                </ul>

                                <!-- Row #4 -->
                                <ul class="days">
                                    <li class="day">
                                        <div class="date">20</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">21</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">22</div>
                                        <a href="#show-hn4683265" uk-toggle>
                                            <div class="event">
                                                <div class="event-desc">
                                                    <div class="uk-text-truncate">
                                                        <span uk-icon="icon: comments; ratio: 0.8"></span>
                                                        <b>นาง มาณี ประชาไท <small>(4683265)</small>
                                                        </b></div>
                                                    <div class="uk-text-truncate">
                                                        นพ.ณัฐพล พรรณเชษฐ์ <small>(011106)</small>
                                                    </div>
                                                </div>
                                                <div class="event-time">
                                                    9:00 - 12.00 น (เช้า)
                                                </div>
                                            </div>
                                        </a>
                                        <!--THIS IS A MODAL-->
                                        <div id="show-hn4683265" uk-modal="center: true">
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>

                                                <div class=" uk-modal-body">
                                                    <h4>นาง มาณี ประชาไท (HN 4683265)</h4>

                                                    <form class="uk-form-horizontal ">
                                                        <div class=" uk-margin-small">
                                                            <label class="uk-form-label">สถานะเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                ใหม่
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ประเภทการเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                Home visit care
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">วันเวลาที่เยี่ยม
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                22/3/2560 <small>(เช้า)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">แพทย์เจ้าของไข้
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                นพ.ประสงค์ ทรงธรรม <small>(013655)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ทีมแพทย์เยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <span class="text-green">&#11044;</span> พญ.ภัควิภา เริ่มยินดี <small>(011097)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.นพดล นพกุล <small>(011106)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> <b>นพ.ประสงค์ ทรงธรรม <small>(011156)</small></b>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.พฤกษา วนารี <small>(011196)</small>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">สรุปข้อมูลปัญหาผู้ป่วย
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <ol>
                                                                    <li> I10 <small>Essential (primary) hypertension</small></li>
                                                                    <li> E117 <small>Non-insulin-dependent diabetes mellitus, with multiple complications</small></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label">เข้าร่วมทีมเยี่ยมบ้านหรือไม่
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason" > อาจจะ
                                                                </label>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason" checked> เข้าร่วม
                                                                </label>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason"> ปฏิเสธ
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="uk-modal-footer">
                                                    <div class="uk-align-right uk-margin-remove-vertical">
                                                        <a class="uk-button uk-button-default button-green uk-button-small">บันทึก</a>
                                                    </div>
                                                </div>
                                                <!--/.uk-modal-footer-->
                                            </div>
                                        </div>
                                        <!--/.uk-modal-->
                                    </li>
                                    <li class="day">
                                        <div class="date">23</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">24</div>
                                        <a href="#show-hn6118489" uk-toggle>
                                            <div class="event afternoon">
                                                <div class="event-desc">
                                                    <div class="uk-text-truncate">
                                                        <span uk-icon="icon: commenting; ratio: 0.8"></span>
                                                        <b>นาง ชญานิศ พลฑา <small>(6118489)</small></b>
                                                    </div>
                                                    <div class="uk-text-truncate">
                                                        นพ.ณัฐพล พรรณเชษฐ์ <small>(011106)</small>
                                                    </div>
                                                </div>
                                                <div class="event-time">
                                                    13:00 - 16.00 น (บ่าย)
                                                </div>
                                            </div>
                                        </a>

                                        <!--THIS IS A MODAL-->
                                        <div id="show-hn6118489" uk-modal="center: true">
                                            <div class="uk-modal-dialog">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>

                                                <div class=" uk-modal-body">
                                                    <h4>นาง ชญานิศ พลฑา (HN 6118489)</h4>
                                                    <form class="uk-form-horizontal ">
                                                        <div class=" uk-margin-small">
                                                            <label class="uk-form-label">สถานะเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                ใหม่
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ประเภทการเยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                Home visit care
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">วันเวลาที่เยี่ยม
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                24/3/2560 <small>(บ่าย)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">แพทย์เจ้าของไข้
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                นพ.ประสงค์ ทรงธรรม <small>(013655)</small>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">ทีมแพทย์เยี่ยมบ้าน
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <span class="text-green">&#11044;</span> พญ.ภัควิภา เริ่มยินดี <small>(011097)</small>
                                                                <br>
                                                                <span class="text-green">&#11044;</span> นพ.นพดล นพกุล <small>(011106)</small>
                                                                <br>
                                                                <span class="text-yellow">&#11044;</span> <b>นพ.ประสงค์ ทรงธรรม <small>(011156)</small></b>
                                                                <br>
                                                                <span class="text-red">&#11044;</span> นพ.พฤกษา วนารี <small>(011196)</small>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin-small">
                                                            <label class="uk-form-label">สรุปข้อมูลปัญหาผู้ป่วย
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <ol>
                                                                    <li> I10 <small>Essential (primary) hypertension</small></li>
                                                                    <li> E117 <small>Non-insulin-dependent diabetes mellitus, with multiple complications</small></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label">เข้าร่วมทีมเยี่ยมบ้านหรือไม่
                                                            </label>
                                                            <div class="uk-form-controls uk-form-controls-text">
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason" checked> รอตอบรับ
                                                                </label>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason" > เข้าร่วม
                                                                </label>
                                                                <label class="uk-margin-right">
                                                                    <input class="uk-radio" type="radio" name="reason"> ปฏิเสธ
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="uk-modal-footer">
                                                    <!--
                                                    <div class="uk-align-left uk-margin-remove-vertical">
                                                        <a href="" uk-icon="icon: trash" title="ลบนัดหมายผิดพลาด" tooltip></a>
                                                    </div>
-->
                                                    <div class="uk-align-right uk-margin-remove-vertical">
                                                        <button class="uk-button uk-button-green uk-button-small" uk- type="button">บันทึก</button>
                                                    </div>
                                                </div>
                                                <!--/.uk-modal-footer-->
                                            </div>
                                        </div>
                                        <!--/.uk-modal-->
                                    </li>
                                </ul>

                                <!-- Row #5 -->
                                <ul class="days">
                                    <li class="day">
                                        <div class="date">27</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">28</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">29</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">30</div>
                                    </li>
                                    <li class="day">
                                        <div class="date">31</div>
                                    </li>

                                    <!-- Next Month -->
                                    <!--
                                    <li class="day other-month">
                                        <div class="date">1</div>
                                    </li>
                                    -->
                                </ul>
                            </div>
                            <!-- /. calendar -->
                        </div>
                        <!--/#calendar-wrap-->
                    </div>
                </div>
                <!--/.mdl-card-->

                <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--112-col-desktop">
                    <div class="mdl-card__menu"></div>

                    <div class="mdl-card__supporting-text mdl-cell mdl-cell--12-col">
                        <div class="uk-grid">
                            <div class="uk-width-1-3@m">
                                <h5 class="uk-heading-divider">สีของนัดหมาย</h5>
                                <div class="uk-margin-small-bottom">สีจาง คือนัดหมายที่สรุปแล้ว
                                </div> <span>
                                    <img class="icon-desc morning past" src=""> เวลาเช้า <small>(9.00 - 12.00 น)</small>
                                </span>
                                <br>
                                <span>
                                    <img class="icon-desc afternoon past" src=""> เวลาบ่าย <small>(13.00-16.00 น)</small>
                                </span>
                                <div class="uk-margin-top uk-margin-small-bottom">สีเข้ม คือนัดหมายที่ยังไม่สรุป</div>

                                <span>
                                    <img class="icon-desc morning" src=""> เวลาเช้า <small>(9.00 - 12.00 น)</small>
                                </span>
                                <br>

                                <span>
                                    <img class="icon-desc afternoon" src=""> เวลาบ่าย <small>(13.00-16.00 น)</small>
                                </span>
                            </div>
                            <div class="uk-width-1-3@m">
                                <h5 class="uk-heading-divider">สัญลักษณ์ของนัดหมาย</h5>
                                <span uk-icon="icon: commenting" class="uk-margin-small-bottom"></span> รอตอบรับ <br>
                                <span uk-icon="icon: comments" class="uk-margin-small-bottom"></span> เข้าร่วมทุกคน <br>
                                <span uk-icon="icon: users" class="uk-margin-small-bottom"></span> ประชุม <br>
                                <span uk-icon="icon: check"></span> ครบกำหนดวัน <br>
                            </div>
                            <div class="uk-width-1-3@m">
                                <h5 class="uk-heading-divider">สัญลักษณ์ของแพทย์</h5>
                                <span class="text-green">&#11044;</span> เข้าร่วม
                                <div class="uk-margin-small">
                                    <span class="text-yellow">&#11044;</span> รอตอบรับ
                                </div>
                                <span class="text-red">&#11044;</span> ปฏิเสธ
                            </div>
                        </div>
                    </div>
                    <!--/.mdl-card__supporting-text-->
                </div>
                <!--/.mdl-card-->
            </div>
            <!--/.demo-content-->
        </main>
    </div>

    <!--jquery-->
    <!--<script src="js/jquery-3.1.1.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <!--js mdl-->
    <script src="lib/mdl/material.min.js"></script>
    <script src="lib/mdl-stepper/stepper.min.js"></script>


    <!--js uikit-->
    <script src="lib/uikit/js/uikit.min.js"></script>
    <script src="lib/uikit/js/uikit-icons.min.js"></script>

    <!--custom js-->
    <script src="js/stepper-nonlinear.js"></script>
</body>

</html>