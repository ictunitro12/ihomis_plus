<form id="physical_examination_form">
    <div class="row mb-2">
        <div class="col-2">
            General Survey
        </div>
        <div class="col-2">
            <input type="checkbox" name="physical[awakealert]" value="Y" id="awakealert"/> <label for="awakealert">Awake and alert</label>
        </div>
        <div class="col">
            <div class="form-group row">
                <div class="col-sm-3">
                    <input type="checkbox" id="sensorium" name="sensorium" value="sensorium" /> <label for="sensorium">Altered sensorium:</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control form-control-sm" name="alteredsensorium" id="alteredsensorium" />
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-2">
        </div>
        <div class="col">
            <div class="form-group row">
                <label for="heent_others" class="col-sm-2 col-form-label text-right">Height (CM):</label>
                <div class="col-sm-10">
                    <input type="number" min="0" class="form-control form-control-sm" id="vsheight" name="signOther[vsheight]" />
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group row">
                <label for="heent_others" class="col-sm-2 col-form-label text-right">Weight (KG):</label>
                <div class="col-sm-10">
                    <input type="number" min="0" class="form-control form-control-sm" id="vsweight" name="signOther[vsweight]" />
                </div>
            </div>
        </div>
    </div>

    <div class="row heent">
        <div class="col-2">
            HEENT:
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_essentiallynormal]" id="heent_essentiallynormal" value="11" /> <label for="heent_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_abnopupireact]" id="heent_abnopupireact" value="12" /> <label for="heent_abnopupireact">Abnormal pupillary reaction </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_cervlympadeno]" id="heent_cervlympadeno" value="13" /> <label for="heent_cervlympadeno">Cervical lymphadenopathy </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_drymucousmembrane]" id="heent_drymucousmembrane" value="14" /> <label for="heent_drymucousmembrane">Dry mucous membrane </label>
        </div>
    </div>
    <div class="row heent">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_ictericsclerae]" id="heent_ictericsclerae" value="15" /> <label for="heent_ictericsclerae">Icteric sclerae </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_paleconjunctivae]" id="heent_paleconjunctivae" value="16" /> <label for="heent_paleconjunctivae">Pale conjunctivae </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_sunkeneyeballs]" id="heent_sunkeneyeballs" value="17" /> <label for="heent_sunkeneyeballs">Sunken eyeballs </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[heent_sunkenfontanelle]" id="heent_sunkenfontanelle" value="18" /> <label for="heent_sunkenfontanelle">Sunken fontanelle </label>
        </div>
    </div>
    <div class="row mb-3 heent">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="heent_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="heent_others" name="heent_others" />
                </div>
            </div>
        </div>
    </div>

    <div class="row chest">
        <div class="col-2">
            CHEST/LUNGS:
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_essentiallynormal]" id="cl_essentiallynormal" value="6" /> <label for="cl_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_asymchestexpansion]" id="cl_asymchestexpansion" value="7" /> <label for="cl_asymchestexpansion">Asymmetrical chest expansion </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_decbreathsounds]" id="cl_decbreathsounds" value="8" /> <label for="cl_decbreathsounds">Decreased breath sounds </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_wheezes]" id="cl_wheezes" value="5" /> <label for="cl_wheezes">Wheezes </label>
        </div>
    </div>
    <div class="row chest">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_lumpoverbreast]" id="cl_lumpoverbreast" value="10" /> <label for="cl_lumpoverbreast">Lump/s over breast(s) </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_ralescracklesrhonchi]" id="cl_ralescracklesrhonchi" value="4" /> <label for="cl_ralescracklesrhonchi">Rales/crackles/rhonchi </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cl_interribclaretract]" id="cl_interribclaretract" value="3" /> <label for="cl_interribclaretract">Intercostal rib/clavicular retraction </label>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="row mb-3 chest">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="cl_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="cl_others" name="cl_others" />
                </div>
            </div>
        </div>
    </div>

    <div class="row cvs">
        <div class="col-2">
            CVS:
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_essentiallynormal]" id="cvs_essentiallynormal" value="5" /> <label for="cvs_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_disapexbeat]" id="cvs_disapexbeat" value="6" /> <label for="cvs_disapexbeat">Displaced apex beat </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_heavesthrills]" id="cvs_heavesthrills" value="3" /> <label for="cvs_heavesthrills">Heaves and/or thrills </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_pericarbulge]" id="cvs_pericarbulge" value="9" /> <label for="cvs_pericarbulge">Pericardial bulge </label>
        </div>
    </div>
    <div class="row cvs">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_irregularrhythm]" id="cvs_irregularrhythm" value="7" /> <label for="cvs_irregularrhythm">Irregular rhythm </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_muffledheartsounds]" id="cvs_muffledheartsounds" value="8" /> <label for="cvs_muffledheartsounds">Muffled heart sounds </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[cvs_murmur]" id="cvs_murmur" value="4" /> <label for="cvs_murmur">Murmur </label>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="row mb-3 cvs">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="cvs_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="cvs_others" name="cvs_others" />
                </div>
            </div>
        </div>
    </div>

    <div class="row abdomen">
        <div class="col-2">
            ABDOMEN:
        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_essentiallynormal]" id="abd_essentiallynormal" value="7" /> <label for="abd_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_abdrigidity]" id="abd_abdrigidity" value="8" /> <label for="abd_abdrigidity">Abdominal rigidity </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_abdtenderness]" id="abd_abdtenderness" value="9" /> <label for="abd_abdtenderness">Abdomen tenderness </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_hyperbowelsounds]" id="abd_hyperbowelsounds" value="10" /> <label for="abd_hyperbowelsounds">Hyperactive bowel sounds </label>
        </div>
    </div>
    <div class="row abdomen">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_palpablemass]" id="abd_palpablemass" value="11" /> <label for="abd_palpablemass">Palpable mass(es) </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_tympdullabdomen]" id="abd_tympdullabdomen" value="12" /> <label for="abd_tympdullabdomen">Tympanitic/dull abdomen </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[abd_uterinecontraction]" id="abd_uterinecontraction" value="13" /> <label for="abd_uterinecontraction">Uterine contraction </label>
        </div>
        <div class="col">

        </div>
    </div>
    <div class="row mb-3 abdomen">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="abd_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="abd_others" name="abd_others" />
                </div>
            </div>
        </div>
    </div>

    <div class="row guie">
        <div class="col-2">
            GU (IE):
        </div>
        <div class="col">
            <input type="checkbox" name="physical[guie_essentiallynormal]" id="guie_essentiallynormal" value="1" /> <label for="guie_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[guie_bldstainedinexamfinger]" id="guie_bldstainedinexamfinger" value="2" /> <label for="guie_bldstainedinexamfinger">Blood stained in exam finger </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[guie_cervicaldilatation]" id="guie_cervicaldilatation" value="3" /> <label for="guie_cervicaldilatation">Cervical dilatation </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[guie_presenceabnodis]" id="guie_presenceabnodis" value="4" /> <label for="guie_presenceabnodis">Presence of abnormal discharge </label>
        </div>
    </div>
    <div class="row mb-3 guie">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="guie_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="guie_others" name="guie_others" />
                </div>
            </div>
        </div>
    </div>

    <div class="row skinex">
        <div class="col-2">
            SKIN/EXTREMITIES:
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_essentiallynormal]" id="skinex_essentiallynormal" value="1" /> <label for="skinex_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_clubbing]" id="skinex_clubbing" value="2" /> <label for="skinex_clubbing">Clubbing </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_coldclammyskin]" id="skinex_coldclammyskin" value="3" /> <label for="skinex_coldclammyskin">Cold clammy skin </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_cyanosismottledskin]" id="skinex_cyanosismottledskin" value="4" /> <label for="skinex_cyanosismottledskin">Cyanosis/mottled skin </label>
        </div>
    </div>
    <div class="row skinex">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_edemaswelling]" id="skinex_edemaswelling" value="5" /> <label for="skinex_edemaswelling">Edema/swelling </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_decmobility]" id="skinex_decmobility" value="6" /> <label for="skinex_decmobility">Decreased mobility </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_palenailbeds]" id="skinex_palenailbeds" value="7" /> <label for="skinex_palenailbeds">Pale nailbeds </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_poorskinturgor]" id="skinex_poorskinturgor" value="8" /> <label for="skinex_poorskinturgor">Poor skin turgor </label>
        </div>
    </div>
    <div class="row skinex">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_rashespetechiae]" id="skinex_rashespetechiae" value="9" /> <label for="skinex_rashespetechiae">Rashes/petechiae </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[skinex_weakpulses]" id="skinex_weakpulses" value="10" /> <label for="skinex_weakpulses">Weak pulses </label>
        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
    </div>
    <div class="row mb-3 skinex">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="skinex_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="skinex_others" name="skinex_others" />
                </div>
            </div>
        </div>
    </div>

    <div class="row neuro">
        <div class="col-2">
            NEURO-EXAM:
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_essentiallynormal]" id="neuro_essentiallynormal" value="6" /> <label for="neuro_essentiallynormal">Essentially normal </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_abnormalgait]" id="neuro_abnormalgait" value="7" /> <label for="neuro_abnormalgait">Abnormal gait </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_abnopositionsense]" id="neuro_abnopositionsense" value="8" /> <label for="neuro_abnopositionsense">Abnormal position sense </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_abnodecsensation]" id="neuro_abnodecsensation" value="9" /> <label for="neuro_abnodecsensation">Abnormal/decreased sensation </label>
        </div>
    </div>
    <div class="row neuro">
        <div class="col-2">

        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_abnoreflexes]" id="neuro_abnoreflexes" value="10" /> <label for="neuro_abnoreflexes">Abnormal reflex(es) </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_pooralteredmemory]" id="neuro_pooralteredmemory" value="11" /> <label for="neuro_pooralteredmemory">Poor/altered memory </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_poormusctonestren]" id="neuro_poormusctonestren" value="12" /> <label for="neuro_poormusctonestren">Poor muscle tone/strength </label>
        </div>
        <div class="col">
            <input type="checkbox" name="physical[neuro_poorcoordination]" id="neuro_poorcoordination" value="13" /> <label for="neuro_poorcoordination">Poor coordination </label>
        </div>
    </div>
    <div class="row mb-3 neuro">
        <div class="col-2">

        </div>
        <div class="col">
            <div class="form-group row">
                <label for="neuro_others" class="col-sm-2 col-form-label text-right">Others:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="neuro_others" name="neuro_others" />
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($show) && $show == true) { ?>
        <div class="row mb-3">
            <div class="col">
                <div class="form-group form-actions pull-right">
                    <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                </div>
            </div>
        </div>
    <?php } ?>
</form>
<script src="<?php echo base_url() ?>assets/scripts/philhealth/physical_examinations.js"></script>