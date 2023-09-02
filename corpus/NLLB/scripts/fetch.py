
from datasets import load_dataset, get_dataset_config_names
import multiprocessing
import gzip
import os.path


NLLB_LANGID_MAPPING = {
    "ace_Latn": "ace",
    "afr_Latn": "af",
    "aka_Latn": "ak",
    "als_Latn": "sq",
    "amh_Ethi": "am",
    "arb_Arab": "ar",
    "asm_Beng": "as",
    "ast_Latn": "ast",
    "awa_Deva": "awa",
    "ayr_Latn": "ay",
    "azb_Arab": "az_Arab",
    "azj_Latn": "az_Latn",
    "bak_Cyrl": "ba",
    "bam_Latn": "bm",
    "ban_Latn": "ban",
    "bel_Cyrl": "be",
    "bem_Latn": "bem",
    "ben_Beng": "bn",
    "bho_Deva": "bho",
    "bjn_Latn": "bjn",
    "bod_Tibt": "bo",
    "bos_Latn": "bs",
    "bug_Latn": "bug",
    "bul_Cyrl": "bg",
    "cat_Latn": "ca",
    "ceb_Latn": "ceb",
    "ces_Latn": "cs",
    "cjk_Latn": "cjk",
    "ckb_Arab": "ku_Arab",
    "crh_Latn": "crh",
    "cym_Latn": "cy",
    "dan_Latn": "da",
    "deu_Latn": "de",
    "dik_Latn": "dik",
    "diq_Latn": "diq",
    "dyu_Latn": "dyu",
    "dzo_Tibt": "dz",
    "ell_Grek": "el",
    "eng_Latn": "en",
    "epo_Latn": "eo",
    "est_Latn": "et",
    "ewe_Latn": "ee",
    "fao_Latn": "fo",
    "fij_Latn": "fj",
    "fin_Latn": "fi",
    "fon_Latn": "fon",
    "fra_Latn": "fr",
    "fur_Latn": "fur",
    "fuv_Latn": "ff",
    "gaz_Latn": "om",
    "gla_Latn": "gd",
    "gle_Latn": "ga",
    "glg_Latn": "gl",
    "grn_Latn": "gn",
    "guj_Gujr": "gu",
    "hat_Latn": "ht",
    "hau_Latn": "ha",
    "heb_Hebr": "he",
    "hin_Deva": "hi",
    "hne_Deva": "hne",
    "hrv_Latn": "hr",
    "hun_Latn": "hu",
    "hye_Armn": "hy",
    "ibo_Latn": "ig",
    "ilo_Latn": "ilo",
    "ind_Latn": "id",
    "isl_Latn": "is",
    "ita_Latn": "it",
    "jav_Latn": "jv",
    "jpn_Jpan": "ja",
    "kab_Latn": "kab",
    "kac_Latn": "kac",
    "kam_Latn": "kam",
    "kan_Knda": "kn",
    "kas_Arab": "ks_Arab",
    "kas_Deva": "ks_Deva",
    "kat_Geor": "ka",
    "kaz_Cyrl": "kk",
    "kbp_Latn": "kbp",
    "kea_Latn": "kea",
    "khk_Cyrl": "mn",
    "khm_Khmr": "km",
    "kik_Latn": "ki",
    "kin_Latn": "rw",
    "kir_Cyrl": "ky",
    "kmb_Latn": "kmb",
    "kmr_Latn": "ku_Latn",
    "knc_Arab": "kr_Arab",
    "knc_Latn": "kr_Latn",
    "kon_Latn": "kg",
    "kor_Hang": "ko",
    "lao_Laoo": "lo",
    "lij_Latn": "lij",
    "lim_Latn": "li",
    "lin_Latn": "ln",
    "lit_Latn": "lt",
    "lmo_Latn": "lmo",
    "ltg_Latn": "ltg",
    "ltz_Latn": "lb",
    "lua_Latn": "lua",
    "lug_Latn": "lg",
    "luo_Latn": "luo",
    "lus_Latn": "lus",
    "lvs_Latn": "lv",
    "mag_Deva": "mag",
    "mai_Deva": "mai",
    "mal_Mlym": "ml",
    "mar_Deva": "mr",
    "min_Latn": "min",
    "mkd_Cyrl": "mk",
    "mlt_Latn": "mt",
    "mni_Beng": "mni",
    "mos_Latn": "mos",
    "mri_Latn": "mi",
    "mya_Mymr": "my",
    "nld_Latn": "nl",
    "nob_Latn": "nb",
    "npi_Deva": "ne",
    "nso_Latn": "nso",
    "nus_Latn": "nus",
    "nya_Latn": "ny",
    "oci_Latn": "oc",
    "ory_Orya": "or",
    "pag_Latn": "pag",
    "pan_Guru": "pa",
    "pap_Latn": "pap",
    "pbt_Arab": "ps",
    "pes_Arab": "pes",
    "plt_Latn": "mg",
    "pol_Latn": "pl",
    "por_Latn": "pt",
    "prs_Arab": "prs",
    "quy_Latn": "qu",
    "ron_Latn": "ro",
    "run_Latn": "rn",
    "rus_Cyrl": "ru",
    "sag_Latn": "sg",
    "san_Deva": "sa",
    "sat_Beng": "sat",
    "scn_Latn": "scn",
    "shn_Mymr": "shn",
    "sin_Sinh": "si",
    "slk_Latn": "sk",
    "slv_Latn": "sl",
    "smo_Latn": "sm",
    "sna_Latn": "sn",
    "snd_Arab": "sd",
    "som_Latn": "so",
    "sot_Latn": "st",
    "spa_Latn": "es",
    "srd_Latn": "sc",
    "srp_Cyrl": "sr_Cyrl",
    "ssw_Latn": "ss",
    "sun_Latn": "su",
    "swe_Latn": "sv",
    "swh_Latn": "sw",
    "szl_Latn": "szl",
    "tam_Taml": "ta",
    "taq_Latn": "taq",
    "tat_Cyrl": "tt",
    "tel_Telu": "te",
    "tgk_Cyrl": "tg",
    "tgl_Latn": "tl",
    "tir_Ethi": "ti",
    "tpi_Latn": "tpi",
    "tsn_Latn": "tn",
    "tso_Latn": "ts",
    "tuk_Latn": "tk",
    "tum_Latn": "tum",
    "tur_Latn": "tr",
    "twi_Latn": "tw",
    "tzm_Tfng": "tzm",
    "uig_Arab": "ug",
    "ukr_Cyrl": "uk",
    "umb_Latn": "umb",
    "urd_Arab": "ur",
    "uzn_Latn": "uz",
    "vec_Latn": "vec",
    "vie_Latn": "vi",
    "war_Latn": "war",
    "wol_Latn": "wo",
    "xho_Latn": "xh",
    "ydd_Hebr": "yi",
    "yor_Latn": "yo",
    "zho_Hans": "zh_CN",
    "zho_Hant": "zh_TW",
    "zsm_Latn": "ms",
    "zul_Latn": "zu" }


def process_lang_pair(lang_pair):

    langs = lang_pair.split('-')
    src = NLLB_LANGID_MAPPING[langs[0]]
    trg = NLLB_LANGID_MAPPING[langs[1]]

    if not os.path.exists(f"{src}-{trg}.bitextf.tsv.gz"):
        
        try:

            print(f"fetch {lang_pair} to {src}-{trg}.bitextf.tsv.gz")
            dataset = load_dataset("allenai/nllb", lang_pair)

            with gzip.open(f"{src}-{trg}.bitextf.tsv.gz", 'wt') as f:
            # with gzip.open(f"{lang_pair}.tsv.gz", 'wt') as f:
            # with open(f"{lang_pair}.tsv", "w") as f:
                for d in dataset['train']:
                    f.write("{:f}\t{:s}\t{:s}\t{:f}\t{:f}\t{:s}\t{:s}\t{:s}\t{:s}\n".format(
                        d['laser_score'],
                        d['translation'][langs[0]],
                        d['translation'][langs[1]],
                        d['source_sentence_lid'],
                        d['target_sentence_lid'],
                        d['source_sentence_source'],
                        d['target_sentence_source'],
                        d['source_sentence_url'],
                        d['target_sentence_url']))
                    # f.write(b"test")
                    f.close()
            # dataset.cleanup_cache_files()
        except:
            print(f"ERROR: Could not load and convert bitext for {lang_pair}")
            if os.path.exists(f"{src}-{trg}.bitextf.tsv.gz"):
                os.remove(f"{src}-{trg}.bitextf.tsv.gz")

        

if __name__ == '__main__':
    langpairs = get_dataset_config_names("allenai/nllb")
    
    num_processes = multiprocessing.cpu_count()  # Use the number of available CPU cores
    pool = multiprocessing.Pool(processes=num_processes)
    # pool = multiprocessing.Pool(processes=2)
    
    pool.map(process_lang_pair, langpairs)
    
    pool.close()
    pool.join()
