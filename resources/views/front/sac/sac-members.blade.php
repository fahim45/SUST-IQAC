<?php
/**
 * Created by PhpStorm.
 * User: fahim foysal kamal
 * Date: 21-Nov-17
 * Time: 4:02 PM
 */
?>
@extends('front.master')

@section('title')
    List of SAC Members | IQAC-SUST
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Members of QAC</h4>
                    </div>
                    <div class="qac-members" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #4782B2;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <h3><b>1<sup>st</sup> Phase</b></h3>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Physics</td>
                                                    <td>Dr. M. Habibul Ahsan</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801712530871">01712530871</a></td>
                                                    <td><a href="mailto:h.ahsan@sust.edu">h.ahsan@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Shamsun Nahar  Begum</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801711065187">01711065187</a></td>
                                                    <td><a href="mailto:shumsun_phy@yahoo.com">shumsun_phy@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Nazia Chowdhury</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801733905271">01733905271</a></td>
                                                    <td><a href="mailto:nc-phy@sust.edu">nc-phy@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Forestry & Environmental Science</td>
                                                    <td>Prof. Dr. Narayan Saha</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801716072440">01716072440</a></td>
                                                    <td><a href="mailto:nsaha12010-fes@sust.edu">nsaha12010-fes@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Qumruzzaman Chowdhury</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801734161326">01734161326</a></td>
                                                    <td><a href="mailto:qumrul@gmail.com">qumrul@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Mohammad Belal Uddin</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801727767431">01727767431</a></td>
                                                    <td><a href="mailto:belal405@yahoo.com">belal405@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Computer Science & Engineering</td>
                                                    <td>Dr. Md. Shahidur Rahman</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801914930807">01914930807</a></td>
                                                    <td><a href="mailto:rahmanms.bd@gmail.com">rahmanms.bd@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Jafor Iqbal</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+880821713850">0821713850</a></td>
                                                    <td><a href="mailto:mzi@sust.edu">mzi@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Reza Selim</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801972357830">01972357830</a></td>
                                                    <td><a href="mailto:selim@sust.edu">selim@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Genetic Engineering & Biotechnology</td>
                                                    <td>Dr. Shamsul Haque Prodhan</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801735948380">01735948380</a></td>
                                                    <td><a href="mailto:nsaha12010-fes@sust.edu">nsaha12010-fes@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Kamrul Islam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801716439353">01716439353</a></td>
                                                    <td><a href="mailto:kamrul-gen@sust.edu">kamrul-gen@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Abdulla Al Mamun</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801714516919">01714516919</a></td>
                                                    <td><a href="mailto:mssohel@yahoo.com">mssohel@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Chemical Engineering & Polymer Science</td>
                                                    <td>Dr. Md. Mastabur Rahman</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801711739130">01711739130</a></td>
                                                    <td><a href="mailto:mrahmanbsb@gmail.com">mrahmanbsb@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Aktharul Islam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712071966">01712071966</a></td>
                                                    <td><a href="mailto:mislam@sust.edu">mislam@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Eng. Salma Akter</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801552438452">01552438452</a></td>
                                                    <td><a href="mailto:salma-cep@sust.edu">salma-cep@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Social Work</td>
                                                    <td>Dr. Neaz Ahmed</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801716382906">01716382906</a></td>
                                                    <td><a href="mailto:nahmed1973@gmail.com">nahmed1973@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Tulshi Kumar Das</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801716120886">01716120886</a></td>
                                                    <td><a href="mailto:tulshikumardas@gmail.com">tulshikumardas@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Faisal Ahmed</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801716201325">01716201325</a></td>
                                                    <td><a href="mailto:fahmmedsuts@yahoo.com">fahmmedsuts@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Sociology</td>
                                                    <td>Dr. Md. Abdul Gani</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801911613802">01911613802</a></td>
                                                    <td><a href="mailto:maghani_sust@yahoo.com">maghani_sust@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Kamal Ahmed</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801819657474">01819657474</a></td>
                                                    <td><a href="mailto:kac_sociology@yahoo.com">kac_sociology@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Jashim Uddin</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801715055869">01715055869</a></td>
                                                    <td><a href="mailto:mjauddin@yahoo.com">mjauddin@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Economics</td>
                                                    <td>Prof. Syed Hasanuzzaman</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801710424109">01710424109</a></td>
                                                    <td><a href="mailto:shzaman-eco@sust.edu">shzaman-eco@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Abdul Hannan Prodhan</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801731247170">01731247170</a></td>
                                                    <td><a href="mailto:pradhanhannan@gmail.com">pradhanhannan@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Sadiqunnabi Chowdhury</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801915819168">01915819168</a></td>
                                                    <td><a href="mailto:sadique-eco@sust.edu">sadique-eco@sust.edu</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #4782B2;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                <h3><b>2<sup>nd</sup> Phase</b></h3>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Anthropology</td>
                                                    <td>Mr. A. K. M. Mazharul Islam</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801711346909">01711346909</a></td>
                                                    <td><a href="mailto:akmmislam@gmail.com">akmmislam@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. A F M Zakaria</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801756464646">01756464646</a></td>
                                                    <td><a href="mailto:afmanp@gmail.com">afmanp@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. Md. Mokhlasur Rahman</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712100255">01712100255</a></td>
                                                    <td><a href="mailto:mokhlasanp1976@yahoo.com">mokhlasanp1976@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Political Studies</td>
                                                    <td>Ms. Dilara Rahman</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801917911550">01917911550</a></td>
                                                    <td><a href="mailto:dilara.mita@gmail.com">dilara.mita@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Syed Ashrafur Rahman</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801716563786">01716563786</a></td>
                                                    <td><a href="mailto:ashrafur-pss@sust.edu">ashrafur-pss@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. S M Hasan Zakirul Islam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712510914">01712510914</a></td>
                                                    <td><a href="mailto:hzakirul-psa@sust.edu">hzakirul-psa@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Chemistry</td>
                                                    <td>Dr Md Abdus Subhan</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801716073270">01716073270</a></td>
                                                    <td><a href="mailto:subhan-che@sust.edu">subhan-che@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Nizam Uddin</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801926372680">01926372680</a></td>
                                                    <td><a href="mailto:nizam3472@yahoo.com">nizam3472@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Shameem Ara Begum</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801731789864">01731789864</a></td>
                                                    <td><a href="mailto:meem_sust@yahoo.com">meem_sust@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Statistics</td>
                                                    <td>Dr Ahmad Kabir</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801711116908">01711116908</a></td>
                                                    <td><a href="mailto:akabir_sta@yahoo.com">akabir_sta@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. Md Ahmed Kabir Chowdhury</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801714227456">01714227456</a></td>
                                                    <td><a href="mailto:makc-sust@live.com">makc-sust@live.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Mohammed Taj Uddin</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801716348194">01716348194</a></td>
                                                    <td><a href="mailto:mtajstat@yahoo.com">mtajstat@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Food Engineering & Tea Technology</td>
                                                    <td>Dr. Md. Mozammel Hoque</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801715492961">01715492961</a></td>
                                                    <td><a href="mailto:hoquemm@gmail.com">hoquemm@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Iftekhar Ahmad</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712226642">01712226642</a></td>
                                                    <td><a href="mailto:iftekharfet.sust@yahoo.com">iftekharfet.sust@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Md Belal Hossain Sikder</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801911212427">01911212427</a></td>
                                                    <td><a href="mailto:belal-ttc@sust.edu">belal-ttc@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Mathematics</td>
                                                    <td>Dr. Md Anowarul Islam</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801919064555">01919064555</a></td>
                                                    <td><a href="mailto:mislam32@gmail.com">mislam32@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md Shajedul Karim</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801766061795">01766061795</a></td>
                                                    <td><a href="mailto:msk-mat@sust.edu">msk-mat@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md Rashed Talukder</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712239309">01712239309</a></td>
                                                    <td><a href="mailto:rashed_math@yahoo.com">rashed_math@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">English</td>
                                                    <td>Dr. Md. Ati Ullah</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801677312058">01677312058</a></td>
                                                    <td><a href="mailto:mauenglish@yahoo.com">mauenglish@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Himadri Sekhar Roy</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801719266004">01719266004</a></td>
                                                    <td><a href="mailto:roy-eng@sust.edu">roy-eng@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Ms. Shahnaz Mahmud</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801716254923">01716254923</a></td>
                                                    <td><a href="mailto:sm-eng@sust.edu">sm-eng@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Industrial & Production Engineering</td>
                                                    <td>Dr A M M Mukaddes</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+880821713491">0821713491</a></td>
                                                    <td><a href="mailto:mukaddes1975@gmail.com">mukaddes1975@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Engr Mohammad Iqbal</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801552428379">01552428379</a></td>
                                                    <td><a href="mailto:iqbalm_ipe@yhoo.com">iqbalm_ipe@yhoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Ariful Islam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+880821717850">0821717850</a></td>
                                                    <td><a href="mailto:arif-ipe@sust.edu">arif-ipe@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Civil & Environmental Engineering</td>
                                                    <td>Dr. Mushtaq Ahmed</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801711161075">01711161075</a></td>
                                                    <td><a href="mailto:mushtaq_cee@yahoo.com">mushtaq_cee@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md Jahir Bin Alam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712091181">01712091181</a></td>
                                                    <td><a href="mailto:jahiralam@yahoo.com">jahiralam@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md Shahidur Rahman</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801982283070">01982283070</a></td>
                                                    <td><a href="mailto:msr.ceesust@gmail.com">msr.ceesust@gmail.com</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background-color: #4782B2;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                <h3><b>3<sup>rd</sup> Phase</b></h3>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Mobile No</th>
                                                    <th>Email</th>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Bangla</td>
                                                    <td>Prof. Dr. Sharadindu Bhattachar</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801731412679">01731412679</a></td>
                                                    <td><a href="mailto:drsharadindu.bhattacharjee@gmail.com">drsharadindu.bhattacharjee@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Prof. Dr. Md. Abdur Rahim</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712737022">01712737022</a></td>
                                                    <td><a href="mailto:rahimdr.abdur@yahoo.com">rahimdr.abdur@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Prof. Dr. Md. Ashraful Karim</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801711327836">01711327836</a></td>
                                                    <td><a href="mailto:ashraf-bng@sust.edu">ashraf-bng@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Architecture</td>
                                                    <td>Shubhajit Chowdhury</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801751731166">01751731166</a></td>
                                                    <td><a href="mailto:shubha_arch@yahoo.com">shubha_arch@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Kawshik Saha</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801712852564">01712852564</a></td>
                                                    <td><a href="mailto:kawshik.saha@gmail.com">kawshik.saha@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mohammad Shamsul Arefin</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801719482862">01719482862</a></td>
                                                    <td><a href="mailto:msanarch@gmail.com">msanarch@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Electrical & Electronics Engineering</td>
                                                    <td>Prof. Dr. M Shahidur Rahman</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801914930807">01914930807</a></td>
                                                    <td><a href="mailto:rahmanms.bd@gmail.com">rahmanms.bd@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. Tuhin Dey</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801758464744">01758464744</a></td>
                                                    <td><a href="mailto:dev.tuhin.eee@gmail.com">dev.tuhin.eee@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. Md. K K Prince</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801737327023">01737327023</a></td>
                                                    <td><a href="mailto:kzaman.eee@gmail.com">kzaman.eee@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Petroleum and Mining Engineering</td>
                                                    <td>Dr. M Farhad Howladar</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801731195918">01731195918</a></td>
                                                    <td><a href="mailto:farhadpme@gmail.com">farhadpme@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Shofiqul Islam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801934738961">01934738961</a></td>
                                                    <td><a href="mailto:shofiq-mpt@sust.edu">shofiq-mpt@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Saiful Alam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801711954946">01711954946</a></td>
                                                    <td><a href="mailto:saifulraju@yahoo.com">saifulraju@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Public Administration</td>
                                                    <td>Dr.  Mohammad Shafiqul Islam</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801719287907">01719287907</a></td>
                                                    <td><a href="mailto:shafiq.pad@gmail.com">shafiq.pad@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Prof. Ms. Anwara Begum</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801715357406">01715357406</a></td>
                                                    <td><a href="mailto:anwara_begum@yahoo.com">anwara_begum@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Shamima Tasnim</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801674008089">01674008089</a></td>
                                                    <td><a href="mailto:shamimatasnim@yahoo.com">shamimatasnim@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Business Administration</td>
                                                    <td>Prof. Dr. Md. Nazrul Islam</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801712817424">01712817424</a></td>
                                                    <td><a href="mailto:dnislam69@yahoo.com">dnislam69@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Mosaddak Ahmed Chowdhury</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801713300240">01713300240</a></td>
                                                    <td><a href="mailto:maclittlelife@yahoo.com">maclittlelife@yahoo.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Dr. Md. Khairul Islam</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801611127028">01611127028</a></td>
                                                    <td><a href="mailto:khairuldba@gmail.com">khairuldba@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Geography and Environment</td>
                                                    <td>Mr. Md. Muyeed Hasan</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801686580014">01686580014</a></td>
                                                    <td><a href="mailto:muyeedhasan-gee@sust.edu">muyeedhasan-gee@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. Rony Basak</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801715545225">01715545225</a></td>
                                                    <td><a href="mailto:rbasak-gee@sust.edu">rbasak-gee@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. Md. Bahuddin Sikdar</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801714432134">01714432134</a></td>
                                                    <td><a href="mailto:sikder-gee@sust.edu">sikder-gee@sust.edu</a></td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">Biochemistry and Molecular Biology</td>
                                                    <td>Dr. Shamim Ahmed</td>
                                                    <td>Head</td>
                                                    <td><a href="tel:+8801776196006">01776196006</a></td>
                                                    <td><a href="mailto:shamim1174@gmail.com">shamim1174@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Mr. H M Syfuddin</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801723333287">01723333287</a></td>
                                                    <td><a href="mailto:syfuddin.btge@gmail.com">syfuddin.btge@gmail.com</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Ms. Khandaker Atkia Fariha</td>
                                                    <td>Member</td>
                                                    <td><a href="tel:+8801710655437">01710655437</a></td>
                                                    <td><a href="mailto:kafb.2312@gmail.com">kafb.2312@gmail.com</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-md-12 -->
                    </div>
                </div>
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Upcoming Events</h4>
                    </div>
                    <div class="widget-inner">
                        @foreach($events as $event)
                            <div class="event-small-list clearfix">
                                <div class="calendar-small">
                                    <span class="s-month">{{ date('M', strtotime( $event->event_date )) }}</span>
                                    <span class="s-date">{{ date('d', strtotime( $event->event_date )) }}</span>
                                </div>
                                <div class="event-small-details">
                                    <h5 class="event-small-title"><a href="#">{{ $event->event_title }}</a></h5>
                                    <p class="event-small-meta small-text">{{ $event->event_place.', Time '.date('H:i A', strtotime( $event->event_time )) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- /.widget-inner -->
                </div><!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery1.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery1.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery2.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery2.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery3.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery3.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery4.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery4.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery5.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery5.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery6.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery6.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery7.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery7.jpg" alt=""/>
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" rel="gallery1" href="{{ asset('/front/') }}/images/gallery/gallery8.jpg"
                                   title="Gallery Tittle One">
                                    <img src="{{ asset('/front/') }}/images/gallery/gallery8.jpg" alt=""/>
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>
@endsection