""" Fix JW300 language codes """

import sys
import argparse
import pandas as pd
from iso639 import languages

# pylint: disable=invalid-name, line-too-ling

parser = argparse.ArgumentParser(prog='fixcodes',
                                 description='Fix JW300 codes')

parser.add_argument('-o', '--outlist',
                    action='store_true',
                    help='Output outlist (languages not to be processed)')

args = parser.parse_args()

data = pd.read_csv('file_list.txt', sep=r'\s+', header=None)
data.columns = ['number', 'code']
df = data.sort_values('number', ascending=False)

langs = df['code']


def getcodes(liszt):
    """ Get language codes """
    names = []
    twocodes = []
    for lang in liszt:
        if len(lang) == 2:
            lang2 = languages.get(alpha2=lang)
            names.append(lang2.name if lang2 else "")
            twocodes.append(lang2.part1 if lang2 else None)
        else:
            lang3 = None
            try:
                lang3 = languages.get(part3=lang)
            except KeyError as e:
                pass
            if lang3:
                names.append(lang3.name)
                twocodes.append(lang3.part1 if lang3.part1 else None)
            else:
                names.append("")
                twocodes.append(None)
    return names, twocodes

n, too = getcodes(langs)
df['Name'] = n
df['Two-code'] = too

def rename_twocodes():
    """ Rename languages where part3 differs from part2 """

    # Print languages where 3code -> 2code
    three2two = df[(df['code'] != df['Two-code']) & (df['Two-code'].notna())]
    # print(three2two)

    for idx, row in three2two.iterrows():
        twocode = row['Two-code']
        if df[df['code'] == twocode].empty:
            if not args.outlist:
                print("%s %s" % (row['code'], row['Two-code']))
        else:
            if args.outlist:
                print(row['code'])
            else:
                print('Language %s maps to %s, but %s already exists' % (row['code'], twocode, twocode),
                      file=sys.stderr)


def rename_supercodes():
    """ Rename languages with subcodes """

    supercodes = {'kq': ['kwy'],
                  'mg': ['tdx'],
                  'qu': ['que', 'qug', 'qus', 'quw', 'quy', 'quz', 'qvi', 'qvz'],
                  'sw': ['swc']}

    for sc in supercodes:
        mv = supercodes[sc]
        for lang in mv:
            print(lang)


def rename_sign_languages():
    """ Rename sign languages """
    for idx, row in df[df['Name'].str.contains('Sign')].iterrows():
        print(row['code'])


def rename_misc_languages():
    """ Rename misc languages """

    misc_languages = {'hy_arevmda': 'hyw',
                      'jw_dgr': 'os_x_dgr',
                      'jw_dmr': 'naq_x_dmr',
                      'jw_ibi': 'yom_x_ibi',
                      'jw_paa': 'pap_x_paa',
                      'jw_qcs': 'qxl',
                      'jw_rmg': 'rmn_x_rmg',
                      'jw_rmv': 'rmy_x_rmv',
                      'jw_spl': 'nso_x_spl',
                      'jw_ssa': 'st',
                      'jw_tpo': 'pt',
                      'jw_vlc': 'ca_x_vlc',
                      'jw_vz': 'skg_x_vz',
                      'rmy_AR': None,
                      'kmr_latn': 'kmr_x_rdu',
                      'nya': None,
                      'que': None,
                      'daf': 'dnj',
                      'tso_MZ': 'ts'}

    for sc in misc_languages:
        mv = misc_languages[sc]

        if not mv:
            if args.outlist:
                print(sc)
            else:
                print('No mapping for %s' % sc, file=sys.stderr)
        elif df[df['code']==mv].empty:
            if not args.outlist:
                print("%s %s" % (sc,mv))
        else:
            if args.outlist:
                print(sc)
            else:
                print('Language %s maps to %s, but %s already exists' % (sc, mv, mv), file=sys.stderr)


if args.outlist:
    rename_supercodes()
    rename_sign_languages()

rename_twocodes()
rename_misc_languages()
