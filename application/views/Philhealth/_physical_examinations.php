<div class="row mb-2">
    <div class="col-2">
        General Survey
    </div>
    <div class="col-2">
        <input type="checkbox" name="physical[awakealert]" value="Y" <?= $general->awake_and_alert ?> /> <label for="awake">Awake and alert</label>
    </div>
    <div class="col">
        <div class="form-group row">
            <div class="col-sm-3">
                <input type="checkbox" id="sensorium" name="sensorium" value="sensorium" <?= $general->altered_sensorium ?> /> <label for="sensorium">Altered sensorium:</label>
            </div>
            <div class="col">
                <input type="text" class="form-control form-control-sm" name="alteredsensorium" id="alteredsensorium" value="<?= $general->altered_sensorium_value ?>" <?= $patient->general->altered_sensorium != 'checked' ? 'disabled' : '' ?> />
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
                <input type="number" min="0" class="form-control form-control-sm" id="height" name="signOther[vsheight]" value="<?= $general->height ?>" />
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group row">
            <label for="heent_others" class="col-sm-2 col-form-label text-right">Weight (KG):</label>
            <div class="col-sm-10">
                <input type="number" min="0" class="form-control form-control-sm" id="weight" name="signOther[vsweight]" value="<?= $general->weight ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-2">
        Vital Signs:
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-sm btn-success">BP</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control form-control-sm" name="vitalSign[vsbp]" id="vsbp" value="<?= $vital_signs->bp ?>">
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-sm btn-success">HR</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control form-control-sm" name="vitalSign[vspulse]" id="vspulse" value="<?= $vital_signs->hr ?>">
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-sm btn-success">RR</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control form-control-sm" name="vitalSign[vsresp]" id="vsresp" value="<?= $vital_signs->rr ?>">
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-sm btn-success">TEMPERATURE</button>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control form-control-sm" name="vitalSign[vstemp]" id="vstemp" value="<?= $vital_signs->temp ?>">
        </div>
    </div>
</div>

<div class="row heent">
    <div class="col-2">
        HEENT:
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_essentiallynormal]" id="heent_essentiallynormal" value="Y" <?= $patient->heent->essentially_normal ?> /> <label for="heent_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_abnopupireact]" id="heent_abnopupireact" value="Y" <?= $patient->heent->abnormal_pupillary_reaction ?> /> <label for="heent_abnopupireact">Abnormal pupillary reaction </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_abnopupireact]" id="heent_cervlympadeno" value="Y" <?= $patient->heent->cervical_lymphadenopathy ?> /> <label for="heent_cervlympadeno">Cervical lymphadenopathy </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_drymucousmembrane]" id="heent_drymucousmembrane" value="Y" <?= $patient->heent->dry_mucous ?> /> <label for="heent_drymucousmembrane">Dry mucous membrane </label>
    </div>
</div>
<div class="row heent">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_ictericsclerae]" id="heent_ictericsclerae" value="Y" <?= $patient->heent->icteric_sclerae ?> /> <label for="heent_ictericsclerae">Icteric sclerae </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_paleconjunctivae]" id="heent_paleconjunctivae" value="Y" <?= $patient->heent->pale_conjunctivae ?> /> <label for="heent_paleconjunctivae">Pale conjunctivae </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_sunkeneyeballs]" id="heent_sunkeneyeballs" value="Y" <?= $patient->heent->sunken_eyeballs ?> /> <label fo="heent_sunkeneyeballs">Sunken eyeballs </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[heent_sunkenfontanelle]" id="heent_sunkenfontanelle" value="Y" <?= $patient->heent->sunken_fontanelle ?> /> <label for="heent_sunkenfontanelle">Sunken fontanelle </label>
    </div>
</div>
<div class="row mb-3 heent">
    <div class="col-2">

    </div>
    <div class="col">
        <div class="form-group row">
            <label for="heent_others" class="col-sm-2 col-form-label text-right">Others:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="heent_others" name="heent_others" value="<?= $patient->heent->others ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row chest">
    <div class="col-2">
        CHEST/LUNGS:
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_essentiallynormal]" id="cl_essentiallynormal" value="Y" <?= $patient->chest->essentially_normal ?> /> <label for="cl_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_asymchestexpansion]" id="cl_asymchestexpansion" value="Y" <?= $patient->chest->asymmetrical_chest ?> /> <label for="cl_asymchestexpansion">Asymmetrical chest expansion </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_decbreathsounds]" id="cl_decbreathsounds" value="Y" <?= $patient->chest->decreased_breath ?> /> <label for="cl_decbreathsounds">Decreased breath sounds </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_wheezes]" id="cl_wheezes" value="Y" <?= $patient->chest->wheezes ?> /> <label for="cl_wheezes">Wheezes </label>
    </div>
</div>
<div class="row chest">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_lumpoverbreast]" id="cl_lumpoverbreast" value="Y" <?= $patient->chest->lump_over_breast ?> /> <label for="cl_lumpoverbreast">Lump/s over breast(s) </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_ralescracklesrhonchi]" id="cl_ralescracklesrhonchi" value="Y" <?= $patient->chest->rales ?> /> <label for="cl_ralescracklesrhonchi">Rales/crackles/rhonchi </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cl_interribclaretract]" id="cl_interribclaretract" value="Y" <?= $patient->chest->intercostal_rib ?> /> <label for="cl_interribclaretract">Intercostal rib/clavicular retraction </label>
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
                <input type="text" class="form-control form-control-sm" id="cl_others" name="cl_others" value="<?= $patient->chest->others ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row cvs">
    <div class="col-2">
        CVS:
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_essentiallynormal]" id="cvs_essentiallynormal" value="Y" <?= $patient->cvs->essentially_normal ?> /> <label for="cvs_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_disapexbeat]" id="cvs_disapexbeat" value="Y" <?= $patient->cvs->displaced_apex_beat ?> /> <label for="cvs_disapexbeat">Displaced apex beat </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_heavesthrills]" id="cvs_heavesthrills" value="Y" <?= $patient->cvs->heaves ?> /> <label for="cvs_heavesthrills">Heaves and/or thrills </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_pericarbulge]" id="cvs_pericarbulge" value="Y" <?= $patient->cvs->pericardial_bulge ?> /> <label for="cvs_pericarbulge">Pericardial bulge </label>
    </div>
</div>
<div class="row cvs">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_irregularrhythm]" id="cvs_irregularrhythm" value="Y" <?= $patient->cvs->irregular_rhythm ?> /> <label for="cvs_irregularrhythm">Irregular rhythm </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_muffledheartsounds]" id="cvs_muffledheartsounds" value="Y" <?= $patient->cvs->muffled_heart_sound ?> /> <label for="cvs_muffledheartsounds">Muffled heart sounds </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[cvs_murmur]" id="cvs_murmur" value="Y" <?= $patient->cvs->murmur ?> /> <label for="cvs_murmur">Murmur </label>
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
                <input type="text" class="form-control form-control-sm" id="cvs_others" name="cvs_others" value="<?= $patient->cvs->others ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row abdomen">
    <div class="col-2">
        ABDOMEN:
    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_essentiallynormal]" id="abd_essentiallynormal" value="Y" <?= $patient->abdomen->essentially_normal ?> /> <label for="abd_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_abdrigidity]" id="abd_abdrigidity" value="Y" <?= $patient->abdomen->abdominal_rigidity ?> /> <label for="abd_abdrigidity">Abdominal rigidity </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_abdtenderness]" id="abd_abdtenderness" value="Y" <?= $patient->abdomen->abdomen_tenderness ?> /> <label for="abd_abdtenderness">Abdomen tenderness </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_hyperbowelsounds]" id="abd_hyperbowelsounds" value="Y" <?= $patient->abdomen->hyperactive_bowel ?> /> <label for="abd_hyperbowelsounds">Hyperactive bowel sounds </label>
    </div>
</div>
<div class="row abdomen">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_palpablemass]" id="abd_palpablemass" value="Y" <?= $patient->abdomen->palpable_mass ?> /> <label for="abd_palpablemass">Palpable mass(es) </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_tympdullabdomen]" id="abd_tympdullabdomen" value="Y" <?= $patient->abdomen->tympanitic_abdomen ?> /> <label for="abd_tympdullabdomen">Tympanitic/dull abdomen </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[abd_uterinecontraction]" id="abd_uterinecontraction" value="Y" <?= $patient->abdomen->uterine_contraction ?> /> <label for="abd_uterinecontraction">Uterine contraction </label>
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
                <input type="text" class="form-control form-control-sm" id="abd_others" name="abd_others" value="<?= $patient->abdomen->others ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row guie">
    <div class="col-2">
        GU (IE):
    </div>
    <div class="col">
        <input type="checkbox" name="physical[guie_essentiallynormal]" id="guie_essentiallynormal" value="Y" <?= $patient->gu_ie->essentially_normal ?> /> <label for="guie_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[guie_bldstainedinexamfinger]" id="guie_bldstainedinexamfinger" value="Y" <?= $patient->gu_ie->blood_stained ?> /> <label for="guie_bldstainedinexamfinger">Blood stained in exam finger </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[guie_cervicaldilatation]" id="guie_cervicaldilatation" value="Y" <?= $patient->gu_ie->cervical_dilatation ?> /> <label for="guie_cervicaldilatation">Cervical dilatation </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[guie_presenceabnodis]" id="guie_presenceabnodis" value="Y" <?= $patient->gu_ie->abnormal_discharge ?> /> <label for="guie_presenceabnodis">Presence of abnormal discharge </label>
    </div>
</div>
<div class="row mb-3 guie">
    <div class="col-2">

    </div>
    <div class="col">
        <div class="form-group row">
            <label for="guie_others" class="col-sm-2 col-form-label text-right">Others:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="guie_others" name="guie_others" value="<?= $patient->gu_ie->others ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row skinex">
    <div class="col-2">
        SKIN/EXTREMITIES:
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_essentiallynormal]" id="skinex_essentiallynormal" value="Y" <?= $patient->skin->essentially_normal ?> /> <label for="skinex_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_clubbing]" id="skinex_clubbing" value="Y" <?= $patient->skin->clubbing ?> /> <label for="skinex_clubbing">Clubbing </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_coldclammyskin]" id="skinex_coldclammyskin" value="Y" <?= $patient->skin->cold_clammy_skin ?> /> <label for="skinex_coldclammyskin">Cold clammy skin </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_cyanosismottledskin]" id="skinex_cyanosismottledskin" value="Y" <?= $patient->skin->cyanosis ?> /> <label for="skinex_cyanosismottledskin">Cyanosis/mottled skin </label>
    </div>
</div>
<div class="row skinex">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_edemaswelling]" id="skinex_edemaswelling" value="Y" <?= $patient->skin->edema ?> /> <label for="skinex_edemaswelling">Edema/swelling </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_decmobility]" id="skinex_decmobility" value="Y" <?= $patient->skin->decreased_mobility ?> /> <label for="skinex_decmobility">Decreased mobility </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_palenailbeds]" id="skinex_palenailbeds" value="Y" <?= $patient->skin->pale_nailbeds ?> /> <label for="skinex_palenailbeds">Pale nailbeds </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_poorskinturgor]" id="skinex_poorskinturgor" value="Y" <?= $patient->skin->poor_skin_turgor ?> /> <label for="skinex_poorskinturgor">Poor skin turgor </label>
    </div>
</div>
<div class="row skinex">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_rashespetechiae]" id="skinex_rashespetechiae" value="Y" <?= $patient->skin->rashes ?> /> <label for="skinex_rashespetechiae">Rashes/petechiae </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[skinex_weakpulses]" id="skinex_weakpulses" value="Y" <?= $patient->skin->weak_pulses ?> /> <label for="skinex_weakpulses">Weak pulses </label>
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
                <input type="text" class="form-control form-control-sm" id="skinex_others" name="skinex_others" value="<?= $patient->skin->others ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row neuro">
    <div class="col-2">
        NEURO-EXAM:
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_essentiallynormal]" id="neuro_essentiallynormal" value="Y" <?= $patient->neuro_exam->essentially_normal ?> /> <label for="neuro_essentiallynormal">Essentially normal </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_abnormalgait]" id="neuro_abnormalgait" value="Y" <?= $patient->neuro_exam->abnormal_gait ?> /> <label for="neuro_abnormalgait">Abnormal gait </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_abnopositionsense]" id="neuro_abnopositionsense" value="Y" <?= $patient->neuro_exam->abnormal_position_sense ?> /> <label for="neuro_abnopositionsense">Abnormal position sense </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_abnodecsensation]" id="neuro_abnodecsensation" value="Y" <?= $patient->neuro_exam->abnormal_sensation ?> /> <label for="neuro_abnodecsensation">Abnormal/decreased sensation </label>
    </div>
</div>
<div class="row neuro">
    <div class="col-2">

    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_abnoreflexes]" id="neuro_abnoreflexes" value="Y" <?= $patient->neuro_exam->abnoraml_reflex ?> /> <label for="neuro_abnoreflexes">Abnormal reflex(es) </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_pooralteredmemory]" id="neuro_pooralteredmemory" value="Y" <?= $patient->neuro_exam->poor_memory ?> /> <label for="neuro_pooralteredmemory">Poor/altered memory </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_poormusctonestren]" id="neuro_poormusctonestren" value="Y" <?= $patient->neuro_exam->poor_muscle_tone ?> /> <label for="neuro_poormusctonestren">Poor muscle tone/strength </label>
    </div>
    <div class="col">
        <input type="checkbox" name="physical[neuro_poorcoordination]" id="neuro_poorcoordination" value="Y" <?= $patient->neuro_exam->poor_coordination ?> /> <label for="neuro_poorcoordination">Poor coordination </label>
    </div>
</div>
<div class="row mb-3 neuro">
    <div class="col-2">

    </div>
    <div class="col">
        <div class="form-group row">
            <label for="neuro_others" class="col-sm-2 col-form-label text-right">Others:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="neuro_others" name="neuro_others" value="<?= $patient->neuro_exam->others ?>" />
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/scripts/philhealth/physical_examinations.js"></script>